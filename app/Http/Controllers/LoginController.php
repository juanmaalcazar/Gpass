<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;

class LoginController extends Controller{

public function login()
    {
        $key = '7kvP3yy3b4SGpVz6uSeSBhBEDtGzPb2n';
        $user = Users::where('email', $_POST['email'])->first();

            if(empty($user))
            { 
                return $this->response('login incorrecto', 401);

            }

            if ($user->password == $_POST['password']) 
            {
            
                $tokenParams = [
                    
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'name' => $user->name,
                    'id' => $user->id,


                ];
                $token = JWT::encode($tokenParams, $key);
            
                return response()->json([
                    'token' => $token,
                ]);
            }
            else
            {
             return $this->response('login incorrecto', 401);
            }
    }

    private function response ($message, $code)
    {
        $body = ['message' => $message];
        $body = json_encode($body);
        return response ($body, $code)->header('Content-Type', 'application/json');
    }


}