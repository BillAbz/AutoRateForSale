<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'title' => 'Contact',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email',
            'message' => 'required|min:10|max:1000',
        ]);

        ContactMessage::create($validated);

        return view('thanks', [
            'title' => 'Thank You',
            'name' => $validated['name'],
        ]);
    }
}