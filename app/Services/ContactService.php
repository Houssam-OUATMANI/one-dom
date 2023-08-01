<?php

namespace App\Services;
use App\Models\Contact;

class ContactService
{

    public function store($contact)
    {
        Contact::query()->create($contact);
    }
}
