<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use App\Http\Requests\StoreadministratorRequest;
use App\Http\Requests\UpdateadministratorRequest;

class AdministratorController extends Controller
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
     * @param  \App\Http\Requests\StoreadministratorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadministratorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function show(administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function edit(administrator $administrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadministratorRequest  $request
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateadministratorRequest $request, administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administrator  $administrator
     * @return \Illuminate\Http\Response
     */
    public function destroy(administrator $administrator)
    {
        //
    }
}
