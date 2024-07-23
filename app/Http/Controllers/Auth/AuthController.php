<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
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
        return $this->SuccessResponse([
            "data" => $user
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();
        if ($user && (Hash::check($request->password, $user->password))) {
            $token = $user->createToken(
                $user->name . '_' . Carbon::now(),
                ['*'],
                Carbon::now()->addDays(6)
            )->plainTextToken;
            return $this->SuccessResponse([
                "token" => $token
            ]);
        }
    }

    public function me(Request $request)
    {
        //TODO
        return $authUser = auth()->user();

        try {
            $authUser = auth()->user();
            if (!$authUser) {
                throw new Exception('unauthorized', 1);
            }

            $user = $this->getUser();

            if ($request->fcm_token && $request->fcm_token != $authUser->fcm_token) {
                User::find($authUser->id)->update(['fcm_token' => $request->fcm_token]);
            }

            return $this->SuccessResponse([
                'user' => $user,
            ]);
        } catch (\Throwable $th) {
            return $this->ErrorResponse('unauthorized', 401);
        }
    }
}
