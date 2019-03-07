<?php

namespace App\Http\Controllers;

use App\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{
    use AuthenticatesUsers;
    public function showLoginForm(){

    	return view('administrators.login');
    }

    protected $guard = 'admins';
}
