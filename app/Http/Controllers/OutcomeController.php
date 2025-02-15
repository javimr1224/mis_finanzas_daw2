<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $tableData = [
    //         'heading' => [
    //             'date','category','amount','newCategory'
    //         ],
    //         'data' => [
    //             ['12/12/2012','salary','2500',"1"],
    //             ['12/01/2013','salary','2500','2'],
    //             ['12/02/2013','salary','2550','3']
    //         ]

    //     ]; 
    //     //Aquí la lógica de negocio para el index
    //     return view('income.index',['title' => 'My outcomes','tableData' => $tableData]);
        
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return '<p>Esta es la página del create de outcomes</p>';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de outcomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de outcomes</p>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
