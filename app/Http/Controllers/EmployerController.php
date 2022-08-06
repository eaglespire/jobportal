<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','employer']);
    }
    public function dashboard()
    {
        return view('employer.dashboard');
    }
    public function profile()
    {
        return view('employer.profile');
    }
}
