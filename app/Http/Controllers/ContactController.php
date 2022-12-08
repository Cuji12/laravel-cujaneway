<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

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

       $email = Mail::to('cu.janeway@gmail.com', 'Cu Janeway')
            ->send(new ContactMessage(
                $validated['name'], 
                $validated['email'], 
                $validated['phone'], 
                $validated['message'])
            );

        // Check if email is not null, otherwise we can assume it's an instance of Illuminate\Mail\SentMessage
        if (isset($email)) {
            return redirect()->route('contact.index')->with('success', true);
        }
    }
}
