<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function Register(Request $request) {

        $count_user = User::count();
        if($count_user == 0){
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Success Register',
            ]);
        }
        $users = User::all();
        foreach($users as $user){

            $token = $user->createToken('myAppToken');

            return (new UserResource($user))->additional([
                'token' => $token->plainTextToken,
            ]);

            if($user["name"] == $request['name']) {
                return response()->json([
                    'success' => false,
                    'message' => 'Exist Register',
                ]);
            }
        }
    }
}
