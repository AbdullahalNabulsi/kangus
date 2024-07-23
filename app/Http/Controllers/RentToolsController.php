<?php

namespace App\Http\Controllers;

use App\Models\RentTools;
use Illuminate\Http\Request;

class RentToolsController extends Controller
{
    public function show($id)
    {
        $RentTools = RentTools::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $RentTools
        ]);
    }

    public function index()
    {
        $RentTools = RentTools::all();
        return $this->SuccessResponse([
            "data" => $RentTools
        ]);
    }

    public function store(Request $request)
    {
        $RentTools = RentTools::create($request->toArray());
        return $this->SuccessResponse($RentTools, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        RentTools::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        RentTools::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
