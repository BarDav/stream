<?php
namespace App\Http\Controllers;

class UsersController extends Controller
{

    public function getDashboard()
    {
        return view('users.dashboard');
    }

}