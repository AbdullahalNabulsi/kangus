<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function show($id)
    {
        $Addres = Address::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Addres
        ]);
    }

    public function index()
    {
        $Address = Address::all();
        return $this->SuccessResponse([
            "data" => $Address
        ]);
    }

    public function store(Request $request)
    {
        $address = Address::create($request->toArray());
        return $this->SuccessResponse($address, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        Address::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Address::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
