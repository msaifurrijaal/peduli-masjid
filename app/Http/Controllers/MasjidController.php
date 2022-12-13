<?php

namespace App\Http\Controllers;

use App\Models\masjid;
use App\Http\Requests\StoremasjidRequest;
use App\Http\Requests\UpdatemasjidRequest;

class MasjidController extends Controller
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
     * @param  \App\Http\Requests\StoremasjidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremasjidRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function show(masjid $masjid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function edit(masjid $masjid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemasjidRequest  $request
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemasjidRequest $request, masjid $masjid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masjid  $masjid
     * @return \Illuminate\Http\Response
     */
    public function destroy(masjid $masjid)
    {
        //
    }
}
