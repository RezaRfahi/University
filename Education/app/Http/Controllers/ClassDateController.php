<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassDateRequest;
use App\Http\Requests\UpdateClassDateRequest;
use App\Models\ClassDate;

class ClassDateController extends Controller
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
     * @param  \App\Http\Requests\StoreClassDateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassDateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassDate  $classDate
     * @return \Illuminate\Http\Response
     */
    public function show(ClassDate $classDate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassDate  $classDate
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassDate $classDate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassDateRequest  $request
     * @param  \App\Models\ClassDate  $classDate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassDateRequest $request, ClassDate $classDate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassDate  $classDate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassDate $classDate)
    {
        //
    }
}
