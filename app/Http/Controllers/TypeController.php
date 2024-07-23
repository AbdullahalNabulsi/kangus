<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function show($id)
    {
        $Type = Type::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Type
        ]);
    }

    public function index()
    {
        $Type = Type::all();
        return $this->SuccessResponse([
            "data" => $Type
        ]);
    }

    public function store(Request $request)
    {
        try {
            $Type = Type::create($request->toArray());
            return $this->SuccessResponse($Type, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        Type::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Type::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
