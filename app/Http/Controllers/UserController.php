<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = User::where('username', $request->username)
        ->first();

        if(!$user || !Hash::check($request->password, $user->password)) {

            throw ValidationException::withMessages([
                'message'=>['Credenciales incorrectas'],
                'alert_title.'=>['Credenciales incorrectas'],
                'alert_text'=>['Credenciales incorrectas'],
            ]);
        }
        $token = $user->createToken($request->username, ['user'])->plainTextToken;
        $response = ObjectResponse::CorrectResponse();
        data_set($response,'message','peticion satisfactoria | usuario logeado.');
        data_set($response,'token',$token);
        data_set($response,'data',$user);
        return response()->json($response,$response["status_code"]);
    }

}
