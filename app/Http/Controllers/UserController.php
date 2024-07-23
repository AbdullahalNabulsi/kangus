<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return $this->SuccessResponse([
            "data" => $user
        ]);
    }

    public function index()
    {
        $users = User::all();
        return $this->SuccessResponse([
            "data" => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update([$request]);
        return $this->SuccessResponse('', '', "Updated Successfuly");
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return $this->SuccessResponse('', '', "Deleted Successfuly");
    }
}
