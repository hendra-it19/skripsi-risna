<?php

namespace App\Http\Controllers;

use App\Models\TinggiBadan;
use Illuminate\Http\Request;

class TinggiBadanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = 'Master - Tinggi Badan';
        return view('pages.dashboardpage.master.tinggi_badan.index',compact('judulHalaman'));
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
    public function show(TinggiBadan $tinggiBadan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TinggiBadan $tinggiBadan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TinggiBadan $tinggiBadan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TinggiBadan $tinggiBadan)
    {
        //
    }
}
