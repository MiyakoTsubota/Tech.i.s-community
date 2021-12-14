<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile_editController extends Controller
{
    public function index()
    {
        return view('/profile_edit');
    }
}
