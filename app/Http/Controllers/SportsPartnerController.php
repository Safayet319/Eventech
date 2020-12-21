<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsPartnerController extends Controller
{
    public function index()
    {
        return view('pages.sponsor');
    }
}
