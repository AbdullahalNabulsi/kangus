<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show($id)
    {
        $Country = Country::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Country
        ]);
    }

    public function index()
    {
        $Country = Country::all();
        return $this->SuccessResponse([
            "data" => $Country
        ]);
    }

    public function store(Request $request)
    {
        try {
            $Country = Country::create($request->toArray());
            return $this->SuccessResponse($Country, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        Country::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Country::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
