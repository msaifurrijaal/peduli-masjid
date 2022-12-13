<?php

namespace App\Http\Controllers;

use App\Models\PaymentBill;
use App\Http\Requests\StorePaymentBillRequest;
use App\Http\Requests\UpdatePaymentBillRequest;

class PaymentBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePaymentBillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentBillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentBill  $paymentBill
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentBill $paymentBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentBill  $paymentBill
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentBill $paymentBill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentBillRequest  $request
     * @param  \App\Models\PaymentBill  $paymentBill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentBillRequest $request, PaymentBill $paymentBill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentBill  $paymentBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentBill $paymentBill)
    {
        //
    }
}
