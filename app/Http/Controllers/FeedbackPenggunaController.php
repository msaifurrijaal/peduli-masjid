<?php

namespace App\Http\Controllers;

use App\Models\feedback_pengguna;
use App\Http\Requests\Storefeedback_penggunaRequest;
use App\Http\Requests\Updatefeedback_penggunaRequest;

class FeedbackPenggunaController extends Controller
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
     * @param  \App\Http\Requests\Storefeedback_penggunaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storefeedback_penggunaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedback_pengguna  $feedback_pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(feedback_pengguna $feedback_pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedback_pengguna  $feedback_pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(feedback_pengguna $feedback_pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatefeedback_penggunaRequest  $request
     * @param  \App\Models\feedback_pengguna  $feedback_pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Updatefeedback_penggunaRequest $request, feedback_pengguna $feedback_pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedback_pengguna  $feedback_pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(feedback_pengguna $feedback_pengguna)
    {
        //
    }
}
