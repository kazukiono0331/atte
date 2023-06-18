<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }
}
