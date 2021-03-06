<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('products.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ADMIN');
    }
}
