<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $incomes = Income::all();

    $tableData = [
        'heading' => ['id', 'category', 'amount', 'newCategory'], 
        'data' => $incomes->map(function ($income) {
            return [
                'id' => $income->id,
                'category' => $income->category,
                'amount' => $income->amount,
                'newCategory' => $income->newCategory
            ];
        })->toArray(),
    ];

    return view('income.index', ['title' => 'My incomes', 'tableData' => $tableData]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return '<p>Esta es la página del create de incomes</p>';
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
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
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
