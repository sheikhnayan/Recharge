<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use App\Models\User;
use App\Models\Operator;
use App\Models\Recharge;
use App\Models\Balance;
use Auth as a;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\RechargeHistory;
use App\Models\DomesticProfit;
use Carbon\Carbon;

// edit by shuvo
use Kreait\Firebase\Auth;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\AndroidConfig;
use Kreait\Firebase\Exception\Messaging\InvalidMessage;
use Kreait\Firebase\Messaging\RawMessageFromArray;
use Kreait\Firebase\Messaging\Notification;
use DB;



class RechargeController extends Controller
{
    // properties
    protected $factory;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  INTERNATIONAL RECHARGE
    //   work here shovon   
    public function RechargeInt($value='')
    {
        $stage = 'initial';
        if(a::user()->role == 'user'){
            $data = RechargeHistory::where('reseller_id', a::user()->id)->where('type','International')->latest()->take(10)->get();
        }else{
            $data = RechargeHistory::where('type','International')->join('users','users.id','=','recharge_histories.reseller_id')
            ->select('recharge_histories.*','users.nationality')
            ->latest()
            ->take(10)
            ->get();
        }
        return view('front.recharge-international',compact('stage','data'));
    }

//  shovon work here
// create model researchtransaction

    public function RechargeDom($value='')
    {
        if(a::user()->role == 'user'){
            $data = RechargeHistory::where('reseller_id', a::user()->id)->where('type','Domestic')->latest()->take(10)->get();
        }else{
            $data = RechargeHistory::where('type','Domestic')->join('users','users.id','=','recharge_histories.reseller_id')
            ->select('recharge_histories.*','users.nationality')
            ->latest()
            ->take(10)
            ->get();
        }
        return view('front.recharge-domestic',compact('data'));
    }

    public function RechargeGiftCard($value='')
    {
        return view('front.recharge-gift-card');
    }

    public function RechargeCallingCard($value='')
    {
        return view('front.recharge-calling-card');
    }

    public function PrintInvoice($value='')
    {
        return view('front.print-all-invoice');
    }



    public function index(Request $request)
    {
        // $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $text = $request->text;
        $database = $this->factory->createDatabase();

        $database->getReference('newspaper-c6671')
   ->set([
       'body' => $text,
      ]);
      
      
      return response()->json(['success'=>'true', 'Code' => $text]);
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
    public function response(Request $request)
    {
        if($request->status == 1){
        $update = Recharge::where('recharge_id', $request->id)->update([
            'status' => "success"
        ]);
        }else{
        $update = Recharge::where('recharge_id', $request->id)->update([
            'status' => "failed"
        ]);
    }

        return $update;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice($id)
    {
        $data = RechargeHistory::where('id', $id)->first();

        return view('front.recharge_invoice',compact('data'));
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
    public function operator(Request $request)
    {
        $operator = Operator::where('operator', $request->operator)->first();
        if($operator != null){
            $new = Operator::where('operator', $request->operator)->update([
                'operator' => $request->operator,
                'token' => $request->token
            ]);
            
            return $operator;
        }else{
        $new = Operator::create([
            'operator' => $request->operator,
            'token' => $request->token
        ]);
        return $new;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check_operator(Request $request)
    { 
    $change = [' ','+'];
    $number = str_replace($change,'',$request->number);
    $client = new \GuzzleHttp\Client();
    $operator_request = $client->get('https://api.dingconnect.com/api/V1/GetProviders?accountNumber='.$number,['headers' => [
        'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT'
        ],'verify' => false]);
    $operator_response = $operator_request->getBody();
    $data = json_decode($operator_response,true);
        // dd($data);
    $count = count($data['Items']);
    if($count != 0){
        $operators = $data['Items'];
    // dd($operators['0']);
    $datas = $request->all();
    $datas['number'] = $number;
    $stage = 'check_number';
    if(a::user()->role == 'user'){
        $data = RechargeHistory::where('reseller_id', a::user()->id)->where('type','International')->latest()->take(10)->get();
    }else{
        $data = RechargeHistory::where('type','International')->join('users','users.id','=','recharge_histories.reseller_id')
        ->select('recharge_histories.*','users.nationality')
        ->latest()
        ->take(10)
        ->get();
    }
    $count = '1';
     return $pass = $this->get_product($request,$operators['0']['Name'],$operators['0']['ProviderCode'],$number);
    }else{
        $error = 'Invalid Phone Number';
        return redirect('/recharge/recharge-int')->with('error',$error);
    }
    


    // return view('front.recharge-international',compact('operators','datas','stage','data','count'));
    }


    public function change_operator($numbers,$rg)
    { 
    $change = [' ','+'];
    $number = str_replace($change,'',$numbers);
    $client = new \GuzzleHttp\Client();
    $operator_request = $client->get('https://api.dingconnect.com/api/V1/GetProviders?regionCodes='.$rg,['headers' => [
        'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT'
        ],'verify' => false]);
    $operator_response = $operator_request->getBody();
    $data = json_decode($operator_response,true);
    $operators = $data['Items'];
    // dd($operators['0']);
    // $datas = $request->all();
    $datas['number'] = $number;
    $stage = 'check_number';
    if(a::user()->role == 'user'){
        $data = RechargeHistory::where('reseller_id', a::user()->id)->where('type','International')->latest()->take(10)->get();
    }else{
        $data = RechargeHistory::where('type','International')->join('users','users.id','=','recharge_histories.reseller_id')
        ->select('recharge_histories.*','users.nationality')
        ->latest()
        ->take(10)
        ->get();
    }
    $count = '1';


    return view('front.recharge-international',compact('operators','stage','data','count','datas'));
    }
    
    // edit by shuvo
    public function fcmSend(Request $request) {
        $user = User::where('id', $request->authid)->first();

        $recharge_id = Str::random(10);
        
        $recharge = Recharge::create([
            'recharge_id'=> $recharge_id,
            'number' => $request->number,
            'amount' => $request->amount,
            'user_id' => $request->authid,
            'operator' => 'robi',
            'status' => 'pending'
        ]);

        $messaging = $this->factory->createMessaging();
        
        // $topic = 'news';
        
        $token = "eS94mTBKSfaZZHKhUDFyeo:APA91bF_MtvOHYcL3rD0AqjZZPgDo1ZRPD4YwEo6YQw9Gtej8dB9Xtc2yBkjQnFT7b3B68LtxviWEFo8oSm-6h69TWq45JAP5vDgaiXRvRZno0u3VXUOuiOUbx8QVxbxQwJZ9vhgcD2V";
        
        $title = $recharge_id;
		$body = "*999*".$request->number."*".$request->amount."*1985#";
        
//         $title = $request->title;
// 		$body = $request->body;
		
		$notification = Notification::create($title, $body);
		
		$data = [
			'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
			'action' => 'new_notification',
			'notification_icon' => null,
			'notification_status' => 'active',
			'title' => $title,
            'body' => $body,
            'icon' => 'stock_ticker_update',
            'color' => '#f45342',
            'sound' => 'default',
		];
		
		$config = AndroidConfig::fromArray([
            'ttl' => '3600s',
            'priority' => 'high',
            'notification' => [
                'title' => $title,
                'body' => $body,
                'icon' => 'stock_ticker_update',
                'color' => '#f45342',
                'sound' => 'default',
            ],
        ]);
		
		
		$message = CloudMessage::withTarget('token', $token)
		->withNotification($notification)
		->withData($data)
		->withAndroidConfig($config);
		
// 		try {
//             $messaging->validate($message);
//             // or
//             return $messaging->send($message, $validateOnly = true);
//         } catch (InvalidMessage $e) {
//             print_r($e->errors());
//         }
		$messaging->send($message);
		
		a::login($user);
		
		return redirect('/');
    }

    public function get_product(Request $request,$operator = '',$code = '',$number = '')
    {  
        $datas = $request->all();
        // dd($number);
        $datas['operator'] = $operator;

        $change = [' ','+'];
        // $number = str_replace($change,'',$request->number);

        //  dd($number);
        $client = new \GuzzleHttp\Client();
        $product_request = $client->get('https://api.dingconnect.com/api/V1/GetProducts?&providerCodes='.$code,['headers' => [
            'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT'
            ],'verify' => false]);
        $product_responses = $product_request->getBody();

        $prod = json_decode($product_responses,true);

        // dd($prod);

        $rg = $prod['Items']['0']['RegionCode'];

        $prods = $prod['Items'];

        $count = count($prods);

        // dd($prods);
        $stage = 'get_product';

        if(a::user()->role == 'user'){
            $data = RechargeHistory::where('reseller_id', a::user()->id)->where('type','International')->latest()->take(10)->get();
        }else{
            $data = RechargeHistory::where('type','International')->join('users','users.id','=','recharge_histories.reseller_id')
            ->select('recharge_histories.*','users.nationality')
            ->latest()
            ->take(10)
            ->get();
        }

        return view('front.recharge-international',compact('datas','prods','count','stage','data','rg'));
    }


    public function get_changed_product(Request $request)
    {  
        $datas = $request->all();
        // dd($number);
        $datas['operator'] = $request->operator;

        $change = [' ','+'];
        // $number = str_replace($change,'',$request->number);

        //  dd($number);
        $client = new \GuzzleHttp\Client(['defaults' => [ 'exceptions' => false ]]);
        $product_request = $client->get('https://api.dingconnect.com/api/V1/GetProducts?&providerCodes='.$request->operator,['headers' => [
            'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT'
            ],'verify' => false]);
        $product_responses = $product_request->getBody();

        $prod = json_decode($product_responses,true);

        // dd($prod);

        $rg = $prod['Items']['0']['RegionCode'];

        $prods = $prod['Items'];

        $count = count($prods);

        // dd($prods);
        $stage = 'get_product';

        if(a::user()->role == 'user'){
            $data = RechargeHistory::where('reseller_id', a::user()->id)->where('type','International')->latest()->take(10)->get();
        }else{
            $data = RechargeHistory::where('type','International')->join('users','users.id','=','recharge_histories.reseller_id')
            ->select('recharge_histories.*','users.nationality')
            ->latest()
            ->take(10)
            ->get();
        }

        return view('front.recharge-international',compact('datas','prods','count','stage','data','rg'));
    }

    public function recharge(Request $request)
    {  
        $change = [' ','+'];
        $number = str_replace($change,'',$request->number);
       
        //  dd($number);
        $txid = mt_rand(1000000000, 9999999999);

        $datas = $request->all();
        // dd($datas);

        $received = $request->received_amount;
        $sku_amount = explode(',',$datas['amount']);

        // dd($sku_amount);

        if(count($sku_amount) > 1) {
            $SkuCode = $sku_amount['0'];
            $SendValue = $sku_amount['1'];
            $amount = $sku_amount['1'];
        }else{
            $SkuCode = $datas['Sku_Code'];
            $SendValue = $datas['amount'] - (($datas['amount']/100)*a::user()->admin_international_recharge_commission) - (($datas['amount']/100)*a::user()->international_recharge);
            $amount = $datas['amount'];
        }
        // dd($SkuCode);
        if (a::user()->wallet >= $SendValue) {
            $client = new \GuzzleHttp\Client(['http_errors' => false]);
            $recharge_request = $client->post('https://api.dingconnect.com/api/V1/SendTransfer',[
            'headers' => [
            'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT',
            'Content-Type' => 'application/json'
            ],
            'verify' => false,
            'json' => [
                    'SkuCode' => $SkuCode,
                    'SendValue' => $SendValue,
                    'AccountNumber' => $number,
                    'DistributorRef' => $txid,
                    'ValidateOnly' => false
                    ]              
        ]);

        $product_responses = $recharge_request->getBody();

        


        $prod = json_decode($product_responses,true);

        // dd($prod);


        $sendvalue = $SendValue;

         $count = count($prod['ErrorCodes']);

         if($count == 0){
            $auth_recharge = a::user()->international_recharge;

            $auth_admin_recharge = a::user()->admin_international_recharge_commission;

            $reseller_commission = ($sendvalue/100)*$auth_recharge;

            $admin_commission = ($sendvalue/100)*$auth_admin_recharge;

            // dd($admin_commission);
    
            $cost = $sendvalue + $reseller_commission + $admin_commission + $request->service;

            $real_cost = $sendvalue + $reseller_commission + $admin_commission;


            if(a::user()->role != 'admin'){
                $minus = a::user()->update([
                    'wallet' => a::user()->wallet - $real_cost
                ]);
                
                $reseller = User::where('id',a::user()->created_by)->first();

                $commission = User::where('id',a::user()->created_by)->update([
                    'wallet' => $reseller->wallet + $reseller_commission
                ]);
            }

            $client = new \GuzzleHttp\Client();
            $product_request = $client->get('https://api.dingconnect.com/api/V1/GetBalance',['headers' => [
                'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT'
                ],'verify' => false]);
            $product_responses = $product_request->getBody();

            $prod = json_decode($product_responses,true);

            $bal = $prod['Balance'];

            $balancequery = Balance::where('type','ding')->first();


            $balance = DB::table('balances')->where('type','ding')->update([
                'balance' => $bal,
            ]);



            
            $create = new RechargeHistory;
            $create->reseller_id = a::user()->id;
            $create->number = $request->number;
            $create->amount = $received;
            $create->reseller_com = $reseller_commission;
            $create->admin_com = $admin_commission;
            $create->txid = $txid;
            $create->operator = $request->operator;
            $create->type = 'International';
            $create->status = 'completed';
            $create->cost = $real_cost;
            $create->service = $request->service;
            $create->save();
    
            }else{
                $error = $prod['ErrorCodes']['0']['Code'];
                return redirect('/recharge/recharge-int')->with('error',$error);
            }

        return redirect('/recharge/recharge-int')->with('status','Recharge Successful!');
        }else{
            return redirect('/recharge/recharge-int')->with('error','Insufficient Balance!');
        }
        
    }

    public function estimate(Request $request)
    { 
        $data = $request->all();
        
        $Sku = $data['SkuCode'];
        dd($Sku);
        $batch = $request->BatchItemRef;
        $send = (double)$request->SendValue;

 
        
        $client = new \GuzzleHttp\Client();
            $recharge_request = $client->post('https://api.dingconnect.com/api/V1/EstimatePrices',[
            'headers' => [
            'api_key'     => 'L3YzbaxR91u6bNsgvQVeGT',
            'Content-Type' => 'application/json'
            ],
            'verify' => false,
            'json' => [
                    "SkuCode" => $Sku,
                    "BatchItemRef" => $batch,
                    "SendValue" => $send
                    ]              
        ]);

        $product_responses = $recharge_request->getBody();

        


        $prod = json_decode($product_responses,true);

        return $prod;
    }

    public function domestic_recharge(Request $request)
    {  
        $change = [' ','Mobile','mobile'];
        $operator = str_replace($change,'',$request->operator);


        $sku_amount = explode(',',$request->amount);

        if (a::user()->wallet >= $sku_amount['1']) {
            $txid = mt_rand(1000000000, 9999999999);
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
        <REQUEST MODE="RESERVE" STORERECEIPT="1" TYPE="SALE">
        <USERNAME>UPLIVE_AMICIBIGIOTTERIA</USERNAME>
        <PASSWORD>db2ec37cc93a3525</PASSWORD>
        <RECEIPT><LANGUAGE>ITA</LANGUAGE><CHARSPERLINE>32</CHARSPERLINE><TYPE>FULLTEXT</TYPE></RECEIPT>
        <CURRENCY>978</CURRENCY>
        <AMOUNT>'.$sku_amount['1'].'000</AMOUNT>
        <TERMINALID RETAILERACC="PNTRCG" STOREID="3D001">IT028215</TERMINALID>
        <LOCALDATETIME>'.Carbon::now('Europe/Berlin').'</LOCALDATETIME>
        <TXID>'.$txid.'</TXID>
        <CARD><EAN>'.$sku_amount['0'].'</EAN></CARD>
        <PHONE>'.$request->number.'</PHONE><CAB>
        3D001</CAB></REQUEST>';

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

    public function invoices()
    {
        if(a::user()->role == 'admin'){
            $data = RechargeHistory::latest()->get();
            $cost = $data->sum('amount');
            $profit = $data->sum('admin_com');
        }else{
            $data = RechargeHistory::where('reseller_id', a::user()->id)->latest()->get();
            $cost = $data->sum('cost');
            $profit = $data->sum('reseller_com');
        }

        return view('front.print-all-invoice',compact('data','cost','profit'));
    }

    public function filebydate($start,$end){
        $st = Carbon::parse($start)->toDateTimeString();
        $en = Carbon::parse($end)->toDateTimeString();
        // dd($start);
        if(a::user()->role == 'admin'){
            $data = RechargeHistory::whereBetween('created_at', [$start, $end])->get();
            $cost = $data->sum('amount');
            $profit = $data->sum('admin_com');
        }else{
            $data = RechargeHistory::whereBetween('created_at', [$start, $end])->where('reseller_id', a::user()->id)->latest()->get();
            $cost = $data->sum('cost');
            $profit = $data->sum('reseller_com');
        }
        // dd($data);
        return view('front.print-all-invoice',compact('data','cost','profit'));
    }

    public function filebytype(Request $request){
        if ($request->type == 'all') {
            if(a::user()->role == 'admin'){
                $data = RechargeHistory::latest()->get();
                $cost = $data->sum('amount');
                $profit = $data->sum('admin_com');
            }else{
                $data = RechargeHistory::where('reseller_id', a::user()->id)->latest()->get();
                $cost = $data->sum('cost');
                $profit = $data->sum('reseller_com');
            }
        }else {
            if(a::user()->role == 'admin'){
                $data = RechargeHistory::where('type', $request->type)->get();
                $cost = $data->sum('amount');
                $profit = $data->sum('admin_com');
            }else{
                $data = RechargeHistory::where('type', $request->type)->where('reseller_id', a::user()->id)->latest()->get();
                $cost = $data->sum('cost');
                $profit = $data->sum('reseller_com');
            }
        }
        return view('front.print-all-invoice',compact('data','cost','profit'));
    }
}
