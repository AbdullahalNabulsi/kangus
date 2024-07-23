<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($id)
    {
        $City = City::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $City
        ]);
    }

    public function index()
    {
        $City = City::all();
        return $this->SuccessResponse([
            "data" => $City
        ]);
    }

    public function store(Request $request)
    {
        try {
            $City = City::create($request->toArray());
            return $this->SuccessResponse($City, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        City::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        City::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
