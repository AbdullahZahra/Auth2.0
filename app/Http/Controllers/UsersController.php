<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        return 'hello';
    }
}
