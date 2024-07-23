<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function show($id)
    {
        $ServiceOrder = ServiceOrder::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $ServiceOrder
        ]);
    }

    public function index()
    {
        $ServiceOrder = ServiceOrder::all();
        return $this->SuccessResponse([
            "data" => $ServiceOrder
        ]);
    }

    public function store(Request $request)
    {
        try {
            $ServiceOrder = ServiceOrder::create($request->toArray());
            return $this->SuccessResponse($ServiceOrder, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        ServiceOrder::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        ServiceOrder::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
