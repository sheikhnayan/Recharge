<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sim;
use App\Models\SimOperator;
use App\Models\Offer;
use App\Models\SimOrder;
use Auth;
use Carbon;
use Illuminate\Support\Facades\Storage;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use NumberFormatter;

class SimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function SimActivation($value='')
    {
        return view('front.sim-activation');
    }

    public function SimSelling($value='')
    {
        return view('front.sim-selling');
    }

    public function WiFi($value='')
    {
        return view('front.wi-fi');
    }

    public function index()
    {  if(Auth::user()->role == 'user'){
        $show = sim::where('status', 'available')
        ->where('reseller_id',Auth::user()->id)
        ->join('users','users.id','=','sims.reseller_id')
        ->select('users.nationality','sims.*')
        ->latest()
        ->get();
        }else{
            $show = sim::where('status', 'available')
            ->latest()
            ->get();  
        }

        return view('front.sim',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice($id)
    {   
        $data = SimOrder::where('id',$id)->first();
        $sim = sim::where('id',$data->sim_id)->first();
        $customer = new Party([
            'name'          => 'Ashley Medina',
            'address'       => 'The Green Street 12',
            'code'          => '#22663214',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);

        $operator = SimOperator::where('operator', $data->operator)->first();

        $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $price = '€ '.$sim->buy_price;

        $item = (new InvoiceItem())->title('Invoice')->pricePerUnit(2)->first($data->first_name)->last($data->last_name)->dob($data->dob)->gender($data->gender)->codice($data->codice)->iccid($data->iccid)->price($data->nationality);

        $invoice = Invoice::make()
            ->logo('storage/'.$operator->img)
            ->operator($operator->operator)
            ->date($sim->created_at)
            ->price($price)
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->name('Invoice')
            ->notes('MODULO DI IDENTIFICAZIONE E ATTIVAZIONE DEL SERVIZIO MOBILE PREPAGATO SI DICHIARA A TUTTI GLI EFFETTI DI LEGGE CHE TUTTE LE INFORMAZIONE E I DATI INDICATI NEL PRESENTE DOCUMENTO SONO ACCURATI, COMPLETI VERITIERI,')
            ->addItem($item);


        return $invoice->stream();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = sim::create([
            'operator' => $request->operator,
            'iccid' => $request->iccid,
            'sim_number' => $request->sim_number,
            'buy_date' => Carbon\Carbon::now(),
            'buy_price' => $request->buy_price,
            'reseller_id' => $request->re_seller,
            'status' => $request->status
        ]);

        return redirect('/sim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = sim::where('id', $id)->first();

        $offer = Offer::where('operator', $data->operator)->get();
        $operator = SimOperator::all();
        return view('front.buy-sim',compact('data','offer','operator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $order = SimOrder::where('id',$id)->first();
        $file='public/'.$order->file;
        return Storage::download($file);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buy(Request $request)
    { 
       $sim = sim::where('id', $request->sim_id)->first();
        $path = $request->file->store('sim/uploads', 'public');
        if($request->file2 != null){
            $path2 = $request->file2->store('sim/uploads', 'public');
        }else{
            $path2 = null;
        }
        $order = SimOrder::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'offer' => $request->offer,
            'gender' => $request->gender,
            'price' =>$sim->buy_price,
            'dob' => $request->dob,
            'codice' => $request->codice,
            'nationality' => $request->nationality,
            'file' => $path,
            'file_2' => $path2,
            'alt_operator' => $request->alt_operator,
            'alt_iccid' => $request->alt_iccid,
            'alt_sim_number' => $request->alt_sim_number,
            'operator' => $sim->operator,
            'iccid' => $sim->iccid,
            'sim_number' => $sim->sim_number,
            'reseller_id' => Auth::user()->id,
            'sim_id' => $sim->id
        ]);

        $update = sim::where('id', $request->sim_id)->update([
            'status' => 'pending'
        ]);

        return redirect('sim');

    }


    public function orders(){
        if(Auth::user()->role == 'admin'){
        $data = SimOrder::join('sims','sims.id','=','sim_orders.sim_id')
        ->select('sim_orders.*','sims.status')
        ->latest()->get();
        }else{
        $data = SimOrder::where('reseller_id',Auth::user()->id)
        ->join('sims','sims.id','=','sim_orders.sim_id')
        ->select('sim_orders.*','sims.status')
        ->latest()->get();
        }
        return view('front.sim-order',compact('data'));
    }


    public function sim_order_update(Request $request){
        $update = sim::where('id', $request->sim_id)->update([
            'status' => $request->status
        ]);
        return back();
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
