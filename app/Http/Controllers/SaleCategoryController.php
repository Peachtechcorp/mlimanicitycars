<?php

namespace App\Http\Controllers;

use App\Models\SaleCategory;
use Illuminate\Http\Request;

class SaleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saleCategories = SaleCategory::all();
        return view('resources.sale_categories.index', compact('saleCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.sale_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        SaleCategory::create($request->input());
        
        return redirect('/sale_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SaleCategory  $saleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SaleCategory $saleCategory)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaleCategory  $saleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleCategory $saleCategory)
    {
        return view('resources.sale_categories.edit', compact('saleCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaleCategory  $saleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaleCategory $saleCategory)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $saleCategory->update($request->input());
        
        return redirect('/sale_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaleCategory  $saleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleCategory $saleCategory)
    {
        $saleCategory->delete();
        return redirect('/sale_categories');
    }
}
