<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function show($id)
    {
        $ProductType = ProductType::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $ProductType
        ]);
    }

    public function index()
    {
        $ProductType = ProductType::all();
        return $this->SuccessResponse([
            "data" => $ProductType
        ]);
    }

    public function store(Request $request)
    {
        $ProductType = ProductType::create($request->toArray());
        return $this->SuccessResponse($ProductType, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        ProductType::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        ProductType::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
