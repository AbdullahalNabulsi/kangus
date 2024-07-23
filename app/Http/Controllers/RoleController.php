<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function show($id)
    {
        $Role = Role::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Role
        ]);
    }

    public function index()
    {
        $Role = Role::all();
        return $this->SuccessResponse([
            "data" => $Role
        ]);
    }

    public function store(Request $request)
    {
        try {
            $Role = Role::create($request->toArray());
            return $this->SuccessResponse($Role, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        Role::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Role::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
