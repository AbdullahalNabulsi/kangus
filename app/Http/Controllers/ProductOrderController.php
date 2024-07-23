<?php

namespace App\Http\Controllers;

use App\Models\ProductOrder;
use Illuminate\Http\Request;

class ProductOrderController extends Controller
{
    public function show($id)
    {
        $ProductOrder = ProductOrder::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $ProductOrder
        ]);
    }

    public function index()
    {
        $ProductOrder = ProductOrder::all();
        return $this->SuccessResponse([
            "data" => $ProductOrder
        ]);
    }

    public function store(Request $request)
    {
        try {
            $ProductOrder = ProductOrder::create($request->toArray());
            return $this->SuccessResponse($ProductOrder, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        ProductOrder::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        ProductOrder::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
