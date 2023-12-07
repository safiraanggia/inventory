<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class DataOperatorController extends Controller
{
    public function index() 
    {
    $User = User::where('roles', 'operator')->get();

    return view('pages.admin.datapimpinan.index', compact('User'));
    }
}
