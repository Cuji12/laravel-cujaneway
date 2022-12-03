<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Post the contact form.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|phone:US,UK,NL,FR,CA,CH,DE,ES',
            'message' => 'required|max:2048'
        ]);
    }
}
