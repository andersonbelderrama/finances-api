<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecurringTransactionRequest;
use App\Http\Requests\UpdateRecurringTransactionRequest;
use App\Models\RecurringTransaction;

class RecurringTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecurringTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RecurringTransaction $recurringTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecurringTransactionRequest $request, RecurringTransaction $recurringTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecurringTransaction $recurringTransaction)
    {
        //
    }
}
