<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    //
    
    public function userview() {
        return view('User/userview');
    }
    
    
    
    public function insertUser(Request $request) {
        User:$u=new User();
        $u->FirstName=$request->get('firstname');
        $u->LastName=$request->get('lastname');
        $u->Mobile=$request->get('mobile');
        $result=$u->insertUser();
        return $result;
    }
    
}
