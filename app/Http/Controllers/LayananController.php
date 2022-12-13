<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use App\Http\Requests\StorelayananRequest;
use App\Http\Requests\UpdatelayananRequest;

class LayananController extends Controller
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
     * @param  \App\Http\Requests\StorelayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelayananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelayananRequest  $request
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelayananRequest $request, layanan $layanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan $layanan)
    {
        //
    }
}
