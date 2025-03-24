<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controller\Request;


class Resource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  "Hola Pablete";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  "Hola Pablete";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return  "Hola Pablete";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return  "Hola Pablete";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return  "Hola Pablete";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       return  "Hola Pablete";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return  "Hola Pablete";
    }
}
