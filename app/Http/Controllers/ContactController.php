<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
  public function __construct(private readonly ContactService $contactService)
  {
  }


  public function store(ContactFormRequest $request)
  {

    Contact::query()->create($request->validated());
    return redirect()->route('home')->withFragment('contact_us')->with('success', 'Votre message à bien été envoyé');
  }
}
