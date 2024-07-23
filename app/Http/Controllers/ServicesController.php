<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function show($id)
    {
        $Services = Services::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Services
        ]);
    }

    public function index()
    {
        $Services = Services::all();
        return $this->SuccessResponse([
            "data" => $Services
        ]);
    }

    public function store(Request $request)
    {
        try {
            $Services = Services::create($request->toArray());
            return $this->SuccessResponse($Services, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        Services::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Services::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
