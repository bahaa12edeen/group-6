<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\user;
// use Illuminate\Support\Facades\DB;


class UserController extends Controller
{


    public function fetchallUser()
    {
        $show = user::all();
        return view('users', compact('show'));
    }
}
