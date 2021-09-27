<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth as a;
use Carbon\Carbon;
use App\Models\Pin;

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

        $pin = $xml->PINCREDENTIALS;

        if($xml->RESULT == 0){

        $create = new Pin;

        $create->reseller_id = a::user()->id;

        $create->amount = $sku_amount['1'];

        $create->txid = $txid;

        $create->type = 'pin';

        $create->pin = $pin->PIN;

        $create->serial = $pin->SERIAL;

        $create->validity = $pin->VALIDTO;

        $create->operator = $operator;

        $create->status = 'success';

        $create->save();


        return  Redirect('/pin/all-invoice')->with('status','Your Pin Purchase Has Been Sucessfull! Here is your pin '.$pin->PIN);


        }else{
            return  Redirect()->back()->with('error','Error occured Please try again!'); 
        }


        // $data = json_encode($bod,true);
         
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
    public function invoices()
    {
        if(a::user()->role == 'admin'){
            $data = Pin::latest()->get();
            $cost = $data->sum('amount');
            // $profit = $data->sum('admin_com');
        }else{
            $data = Pin::where('reseller_id', a::user()->id)->latest()->get();
            $cost = $data->sum('cost');
            // $profit = $data->sum('reseller_com');
        }

        return view('front.print-all-invoice_pin',compact('data','cost'));
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
