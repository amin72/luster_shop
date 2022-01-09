<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function create() {
        return view('contact.form');
    }


    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:60',
            'phone' => 'nullable|regex:/(09)[0-9]{9}/|digits:11|numeric',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return back()->with('success', 'پیام شما با موفقیت ارسال شد.');
    }
}
