<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /**
     * show all user
     */
    public function allUsers()
    {
        $data = User::latest()->get();

        $api_data = [
            'status' => true,
            'mesg' => 'all user data',
            'users' => $data
        ];

        return response()->json($api_data);
    }

    /**
     * register user
     */
    public function register(Request $request)
    {
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $data->createToken('register')->plainTextToken;

        $api_data = [
            'users' => $data,
            'token' => $token
        ];

        return response()->json($api_data);
    }

    /**
     * log out
     */
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response(['mesg' => "logout succesful"]);
    }

    /**
     * login
     */

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {

            return response(['mesg' => 'user and password not match']);
        } else {
            $token = $user->createToken('login')->plainTextToken;

            $responce = [
                'user' => $user,
                'token' => $token
            ];

            return response($responce);
        }
    }

    /**
     * user soket id update update
     */

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->soket_id = $request->soket_id;
        $user->update();

        return response(['mesg' => "soket id set"]);
    }
}
