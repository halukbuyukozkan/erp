<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Material;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function index(Warehouse $warehouse)
    {
        $materials = Material::where('type',1)->paginate(10);
        return view('warehouse.stock.index',[
            'materials'=>$materials,
            'warehouse'=>$warehouse
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function create(Warehouse $warehouse)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Warehouse $warehouse)
    {
        foreach($request->stock as $materialId => $stock){
            Stock::updateOrCreate(
                ['warehouse_id' => $warehouse->id, 'material_id' => $materialId],
                ['quantity' => $stock]
            );
        }
        return redirect()->route('warehouse.stock.index',$warehouse);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse, Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse, Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse, Stock $stock)
    {
        //
    }
}
