<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\SimOperator;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Offer::latest()->get();
        $operator = SimOperator::all();

        return view('front.offer',compact('data','operator'));
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
        $data = Offer::create([
            'operator' => $request->operator,
            'offer' => $request->offer,
            'costo' => $request->costo,
            'ricarica' => $request->ricarica,
            'valida' => $request->valida,
            'internet' => $request->internet,
            'minuti' => $request->minuti,
            'minuti_internazionale' =>$request->minuti_internazionale,
            'minuti_illimitati' => $request->minuti_illimitati,
            'minuti_internazionali_validi' => $request->minuti_internazionali_validi,
            'altre_informazioni' => $request->altre_informazioni
        ]);

        return redirect('/sim/wi-fi');
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
        $data = Offer::where('id',$id)->update([
            'operator' => $request->operator,
            'offer' => $request->offer,
            'costo' => $request->costo,
            'ricarica' => $request->ricarica,
            'valida' => $request->valida,
            'internet' => $request->internet,
            'minuti' => $request->minuti,
            'minuti_internazionale' =>$request->minuti_internazionale,
            'minuti_illimitati' => $request->minuti_illimitati,
            'minuti_internazionali_validi' => $request->minuti_internazionali_validi,
            'altre_informazioni' => $request->altre_informazioni
        ]);

        return redirect('/sim/wi-fi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Offer::where('id', $id)->delete();
        
        return redirect('/sim/wi-fi');
    }
}
