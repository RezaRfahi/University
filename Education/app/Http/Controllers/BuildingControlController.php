<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingControlRequest;
use App\Http\Requests\UpdateBuildingControlRequest;
use App\Models\BuildingControl;

class BuildingControlController extends Controller
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
     * @param  \App\Http\Requests\StoreBuildingControlRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuildingControlRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuildingControl  $buildingControl
     * @return \Illuminate\Http\Response
     */
    public function show(BuildingControl $buildingControl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuildingControl  $buildingControl
     * @return \Illuminate\Http\Response
     */
    public function edit(BuildingControl $buildingControl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuildingControlRequest  $request
     * @param  \App\Models\BuildingControl  $buildingControl
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuildingControlRequest $request, BuildingControl $buildingControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuildingControl  $buildingControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuildingControl $buildingControl)
    {
        //
    }
}
