<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function show($id)
    {
        $Permission = Permission::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $Permission
        ]);
    }

    public function index()
    {
        $Permission = Permission::all();
        return $this->SuccessResponse([
            "data" => $Permission
        ]);
    }

    public function store(Request $request)
    {
        try {
            $Permission = Permission::create($request->toArray());
            return $this->SuccessResponse($Permission, '', "Created Successfuly");
            //code...
        } catch (\Throwable $th) {
            return $th;
            //throw $th;
        }
      
    }

    public function update(Request $request, $id)
    {
        Permission::find($id)->update($request->toArray());
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        Permission::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
