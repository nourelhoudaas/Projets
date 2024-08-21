<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function liste_Op()
    {
        return view('operations.liste_Op');
    }

    public function add_Op()
    {
        return view('operations.add_Op');
    }
}
