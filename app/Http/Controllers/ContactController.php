<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contacts');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email',
            'subject' => 'required|string',
            'message' => 'required|string',



        ]);
    }
}
