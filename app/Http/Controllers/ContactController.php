<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
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
    $contact = $request->validated();
    $this->contactService->store($contact);
    return redirect()->route('home')->withFragment('contact_us')->with('success', 'Votre message à bien été envoyé');
  }
}
