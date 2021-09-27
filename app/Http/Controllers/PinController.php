<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth as a;
use Carbon\Carbon;

class PinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.pin-domestic');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $change = [' ','Mobile','mobile'];
        $operator = str_replace($change,'',$request->operator);


        $sku_amount = explode(',',$request->amount);

        // dd($sku_amount);

        if (a::user()->wallet >= $sku_amount['1']) {
            $txid = mt_rand(1000000000, 9999999999);
        
        $xml = '<?xml version="1.0" ?><REQUEST MODE="DIRECT" STORERECEIPT="1" TYPE="SALE">
        <USERNAME>UPLIVE_AMICIBIGIOTTERIA</USERNAME>
        <TXID>'.$txid.'</TXID>
        <RECEIPT><LANGUAGE>ITA</LANGUAGE><CHARSPERLINE>40</CHARSPERLINE><TYPE>FULLTEXT</TYPE></RECEIPT>
        <AMOUNT>'.$sku_amount['1'].'000</AMOUNT>
        <TERMINALID RETAILERACC="PNTRCG" STOREID="3D001">IT028215</TERMINALID>
        <CURRENCY></CURRENCY>
        <CARD><EAN>'.$sku_amount['0'].'</EAN></CARD>
        <LOCALDATETIME>'.Carbon::now('Europe/Berlin').'</LOCALDATETIME>
        <CAB>3D001</CAB>
        <PASSWORD>db2ec37cc93a3525</PASSWORD>
        </REQUEST>';

        // $req = $client->request(["Content-Type" => "application/xml"])
        //                ->post('https://precision.epayworldwide.com/up-interface', [$xml,'verify' => false]);

        $client = new \GuzzleHttp\Client();
        $recharge_request = $client->post('https://precision.epayworldwide.com/up-interface',[
            'headers' => [
            'api_key'     => 'Etmo8i5V9q862PHn5dNJSb',
            'content_type' => 'application/xml'
            ],
            'verify' => false,
            'body' => $xml              
        ]);

        $body = $recharge_request->getBody(); 
        $xml = simplexml_load_string($body);

        dd($xml->PINCREDENTIALS);


        // $data = json_encode($bod,true);

        if($xml->RESULT == 0)
        {
            $txid2 = mt_rand(1000000000, 9999999999);
            $xml2 = '<?xml version="1.0" encoding="UTF-8"?>
                <REQUEST MODE="CAPTURE" STORERECEIPT="1" TYPE="SALE">
                    <USERNAME>UPLIVE_AMICIBIGIOTTERIA</USERNAME>
                    <PASSWORD>db2ec37cc93a3525</PASSWORD>
                    <RECEIPT>
                        <LANGUAGE>ITA</LANGUAGE>
                        <CHARSPERLINE>32</CHARSPERLINE>
                        <TYPE>FULLTEXT</TYPE>
                    </RECEIPT>
                    <CURRENCY>978</CURRENCY>
                    <AMOUNT>'.$sku_amount['1'].'000</AMOUNT>
                    <TERMINALID RETAILERACC="PNTRCG" STOREID="3D001">IT028215</TERMINALID>
                    <LOCALDATETIME>'.Carbon::now('Europe/Berlin').'</LOCALDATETIME>
                    <TXID>'.$txid2.'</TXID>
                        <CARD>
                            <EAN>'.$sku_amount['0'].'</EAN>
                        </CARD>
                        <PHONE>'.$request->number.'</PHONE>
                        <CAB>3D0013D001</CAB>
                    <TXID/>
                    <TXREF>'.$txid.'</TXREF>
                    <CAB/>
                </REQUEST>';

       

            $client = new \GuzzleHttp\Client();
            $recharge_request = $client->post('https://precision.epayworldwide.com/up-interface',[
                'headers' => [
                'api_key'     => 'Etmo8i5V9q862PHn5dNJSb',
                'content_type' => 'application/xml'
                ],
                'verify' => false,
                'body' => $xml2              
            ]);

            $body2 = $recharge_request->getBody(); 
            $xml2 = simplexml_load_string($body2);


            $balancequery = Balance::where('type','domestic')->first();

            $prof = DomesticProfit::where('ean',$sku_amount['0'])->first();
        

        


            $balance = DB::table('balances')->where('type','domestic')->update([
                'balance' => $xml2->LIMIT,
            ]);
            if($xml2->RESULT == 0){

                if(a::user()->role != 'admin'){
                    $reseller_commission = ($sku_amount['1']/100)*a::user()->recharge;
                    $admin_commission = ($sku_amount['1']/100)*a::user()->admin_recharge_commission;
                    $cost = $sku_amount['1'];
    
                    $admin_given_profit = ($prof->commission/100)*a::user()->admin_recharge_commission;
    
                    $minus = a::user()->update([
                        'wallet' => a::user()->wallet - $cost + $admin_given_profit,
                    ]);
    
                    $reseller = User::where('id',a::user()->created_by)->first();
    
                    // $commission = User::where('id',a::user()->created_by)->update([
                    //     'wallet' => $reseller->wallet + $reseller_commission
                    // ]);
                }else{
                    $reseller_commission = 0;
                    $admin_commission = 0;
                    $cost = $xml2->AMOUNT;
                }

                $create = new RechargeHistory;
                $create->reseller_id = a::user()->id;
                $create->number = $request->number;
                $create->amount = $sku_amount['1'];
                $create->operator = $operator;
                $create->reseller_com = $reseller_commission;
                $create->admin_com = $admin_commission;
                $create->txid = $xml2->TXID;
                $create->type = 'Domestic';
                $create->status = 'completed';
                $create->cost = $cost;
                $create->save();

            }else {
                return  Redirect()->back()->with('error','Recharge Incomplete,. Please try again!'); 
            }
            return  Redirect()->back()->with('status','Your Recharge Has Been Sucessfull!');
        }else{
            return  Redirect()->back()->with('error','Recharge Incomplete,. Please try again!'); 
        }
         
        }else{
            return  Redirect()->back()->with('error','Insufficient Balance!'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
