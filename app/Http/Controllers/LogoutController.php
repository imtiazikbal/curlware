<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function logout(){
        auth()->logout();
        return redirect('/');
    }
}
