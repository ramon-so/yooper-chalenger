<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $input = $request->all();
        $user = \DB::select('select username from users where username = ? and password = ?', [$input['username'], md5($input['password'])]);
        $user ? $user = $user : $user = array('erro' => 'usuario nao encontrado');
        return json_encode($user);
    }

}
