<?php

namespace App\Http\Controllers;

use App\Models\SolusiStunting;
use Illuminate\Http\Request;

class SolusiStuntingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = 'Master - Solusi Stunting';
        return view('pages.dashboardpage.master.hasil_diagnosa.index', compact('judulHalaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(SolusiStunting $solusiStunting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SolusiStunting $solusiStunting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SolusiStunting $solusiStunting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SolusiStunting $solusiStunting)
    {
        //
    }
}
