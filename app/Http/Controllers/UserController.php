<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request,$id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function index(Request $request)
    {
        $users = User::all();
        return $users;
    }

    public function update(Request $request,$id)
    {
        User::find($id)->update([$request]);
        return "Updated Successfuly";
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return "Deleted Successfuly";
    }
}
