<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use App\Models\User;
use App\Models\Operator;
use App\Models\Recharge;
use Auth as a;
use Illuminate\Support\Str;

// edit by shuvo
use Kreait\Firebase\Auth;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\AndroidConfig;
use Kreait\Firebase\Exception\Messaging\InvalidMessage;
use Kreait\Firebase\Messaging\RawMessageFromArray;
use Kreait\Firebase\Messaging\Notification;



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
    $client = new \GuzzleHttp\Client();
    $operator_request = $client->get('https://api.dingconnect.com/api/V1/GetProviders?accountNumber='.$request->number,['headers' => [
        'api_key'     => 'Etmo8i5V9q862PHn5dNJSb'
        ],'verify' => false]);
    $operator_response = $operator_request->getBody();
    $data = json_decode($operator_response,true);
    $list = $data['Items'];
    $operator_info = $list['0'];

    $operator = $operator_info['Name'];
    $logo = $operator_info['LogoUrl'];

    $client = new \GuzzleHttp\Client();
    $product_request = $client->get('https://api.dingconnect.com/api/V1/GetProducts?accountNumber='.$request->number,['headers' => [
        'api_key'     => 'Etmo8i5V9q862PHn5dNJSb'
        ],'verify' => false]);
    $product_response = $product_request->getBody();
    return $product_response;
    $checked = 1;
    return view('front.recharge',compact('checked','operator','logo'));
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
}
