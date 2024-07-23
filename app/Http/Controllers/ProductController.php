<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $Product = Product::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Product
        ]);
    }

    public function index()
    {
        $Product = Product::all();
        return $this->SuccessResponse([
            "data" => $Product
        ]);
    }

    public function store(Request $request)
    {
        $Product = Product::create($request->toArray());
        return $this->SuccessResponse($Product, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        Product::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
