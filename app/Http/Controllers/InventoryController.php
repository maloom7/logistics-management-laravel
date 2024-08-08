<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::all();
        return response()->json($inventory);
    }

    public function show($id)
    {
        $item = Inventory::find($id);
        return response()->json($item);
    }

    public function store(Request $request)
    {
        $item = Inventory::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = Inventory::find($id);
        $item->update($request->all());
        return response()->json($item);
    }

    public function destroy($id)
    {
        Inventory::destroy($id);
        return response()->json(null, 204);
    }
}
