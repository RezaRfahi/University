<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermissionUserRequest;
use App\Http\Requests\UpdatePermissionUserRequest;
use App\Models\PermissionUser;

class PermissionUserController extends Controller
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
     * @param  \App\Http\Requests\StorePermissionUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermissionUser  $permissionUser
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionUser $permissionUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermissionUser  $permissionUser
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionUser $permissionUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionUserRequest  $request
     * @param  \App\Models\PermissionUser  $permissionUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionUserRequest $request, PermissionUser $permissionUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionUser  $permissionUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionUser $permissionUser)
    {
        //
    }
}
