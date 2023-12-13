<?php

namespace App\Http\Controllers;

use App\Models\CiriFisik;
use Illuminate\Http\Request;

class CiriFisikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judulHalaman = "Master - Ciri Fisik";
        return view('pages.dashboardpage.master.ciri_fisik.index',compact('judulHalaman'));
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
    public function show(CiriFisik $ciriFisik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CiriFisik $ciriFisik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CiriFisik $ciriFisik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CiriFisik $ciriFisik)
    {
        //
    }
}
