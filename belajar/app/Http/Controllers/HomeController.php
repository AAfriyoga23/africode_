<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index() {
    // 	return view ('index');
    // }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {

        $data = User::get();

        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }
}
