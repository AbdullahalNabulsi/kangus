<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create($request->toArray());
        event(new Registered($user));
        return $user;
    }

    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->firstOrFail();
        if ($user && (Hash::check($request->password, $user->password))) {
            $token = $user->createToken(
                $user->name.'_'.Carbon::now(),
                ['*'],                         
                Carbon::now()->addDays(6)    
            )->plainTextToken;
            return ['token'=>$token];
        }
    }
}
