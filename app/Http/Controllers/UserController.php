<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function getUser(){
        $user = User::all();
        return DataTables::of($user)->Make(true);
    }
}
