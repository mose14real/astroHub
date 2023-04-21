<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('astrohub.index');
    }

    public function register()
    {
        return view('astrohub.users.register');
    }

    public function store(StoreRequest $request)
    {
        // 
    }

    public function login()
    {
        return view('astrohub.users.login');
    }

    public function authLogin(LoginRequest $request)
    {
        // 
    }

    public function logout()
    {
        // 
    }
}
