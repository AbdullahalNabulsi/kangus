<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function show($id)
    {
        $Unit = Unit::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Unit
        ]);
    }

    public function index()
    {
        $Unit = Unit::all();
        return $this->SuccessResponse([
            "data" => $Unit
        ]);
    }

    public function store(Request $request)
    {
        $Unit = Unit::create($request->toArray());
        return $this->SuccessResponse($Unit, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        Unit::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Unit::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
