<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    const USER = 0;
    const PASSWORD = 1;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $users = new Users();

        $users->name = $request->name;
        $users->email = $request->email;
        if (strlen($request->password) > 7)
        {
            $user->password = bcrypy($request->password)
        }else
        {
            return response()->json(['Error' => 'la password debe tener 8 caracteres como poco', 400])
        }
        
        $users->rol_id = 2;

        $users->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        $headers = getallheaders();
        $token = $headers['Authorization'];
        $tokenDecoded = JWT::decode($token, '7kvP3yy3b4SGpVz6uSeSBhBEDtGzPb2n', array('HS256'));
        //var_dump($tokenDecoded); exit;
        
    
        if ($_POST['name'] == $tokenDecoded->name and $_POST['password'] == $tokenDecoded->password)
        {
            return response()->json(
                'Usuario' + $_POST['name'] + 'registrado');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        $user->delete();
    }
}
