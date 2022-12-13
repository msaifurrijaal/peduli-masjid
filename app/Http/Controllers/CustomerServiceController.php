<?php

namespace App\Http\Controllers;

use App\Models\customer_service;
use App\Http\Requests\Storecustomer_serviceRequest;
use App\Http\Requests\Updatecustomer_serviceRequest;

class CustomerServiceController extends Controller
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
     * @param  \App\Http\Requests\Storecustomer_serviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecustomer_serviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function show(customer_service $customer_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_service $customer_service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecustomer_serviceRequest  $request
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecustomer_serviceRequest $request, customer_service $customer_service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_service $customer_service)
    {
        //
    }
}
