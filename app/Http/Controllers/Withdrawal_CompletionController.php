<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Withdrawal_CompletionController extends Controller
{
    public function index()
    {
        return view('/withdrawal_completion');
    }
}
