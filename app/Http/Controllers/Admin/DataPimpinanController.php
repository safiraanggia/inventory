<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class DataPimpinanController extends Controller
{
    public function index() 
    {
    $User = User::where('roles', 'pimpinan')->get();

    return view('pages.admin.datapimpinan.index', compact('User'));
    }

}
