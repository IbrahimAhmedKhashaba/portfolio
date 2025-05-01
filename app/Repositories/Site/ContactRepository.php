<?php

namespace App\Repositories\Site;

use App\Models\Contact;

class ContactRepository
{
    public function store($request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return $contact;
    }
}