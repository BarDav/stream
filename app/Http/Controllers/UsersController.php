<?php
namespace App\Http\Controllers;

use Gate;
class UsersController extends Controller
{

    public function getDashboard()
    {
        return view('users.dashboard');
    }

}