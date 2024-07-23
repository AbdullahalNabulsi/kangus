<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function show($id)
    {
        $Tools = Tools::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Tools
        ]);
    }

    public function index()
    {
        $Tools = Tools::all();
        return $this->SuccessResponse([
            "data" => $Tools
        ]);
    }

    public function store(Request $request)
    {
        $Tools = Tools::create($request->toArray());
        return $this->SuccessResponse($Tools, '', "Created Successfuly");
    }

    public function update(Request $request, $id)
    {
        Tools::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Tools::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
