<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Http\Requests\accesoRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AutenticarController extends Controller
{
    public function registro (RegistroRequest $request)
    {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json([
                'res' => true,
                'msj' =>'Usuario Registrado correctamnete'
            ],200);


    }

    public function acceso (accesoRequest $request)
    {
        $user = User::where('email', $request->email)->first();
 
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'msj' => ['Las credenciales son incorrectas!!!'],
            ]);
        }
     
            $token = $user->createToken($request->email)->plainTextToken;

            return response()->json([
                'res' => true,
                'token' => $token
            ],200);
        //return $user->createToken($request->device_name)->plainTextToken;
    }

    public function cerrarsesion (Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Token Eliminado Correctamnete'
        ],200);
    }
}
