<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function confirm(Request $request)
    {
        $tell='$request->tell1' . '$request->tell2' . '$request->tell3';
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email'] + ['tell' => $tell] + $request->only(['address', 'building', 'category_id', 'detail']));
        return view('confirm', compact('contact'));
    }
    
    public function store(Request $request)
    {
        $tell='$request->tell1' . '$request->tell2' . '$request->tell3';
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email'] + ['tell' => $tell] + $request->only(['address', 'building', 'category_id', 'detail']));
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email'] + ['tell' => '$request->tell1' . '$request->tell2' . '$request->tell3'] + $request->only(['address', 'building', 'category_id', 'detail']));
        Contact::create($contact);
        return view('thanks');
    }
}
