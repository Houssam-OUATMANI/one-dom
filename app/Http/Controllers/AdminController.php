<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use http\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->paginate(25);
        return view('admin.index', compact('contacts'));
    }
}
