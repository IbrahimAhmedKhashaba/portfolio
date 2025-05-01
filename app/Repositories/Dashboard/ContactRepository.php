<?php

namespace App\Repositories\Dashboard;

use App\Models\Contact;

class ContactRepository
{
    public function getAllContacts()
    {
        return Contact::all();
    }

    public function getContactById($id)
    {
        return Contact::find($id);
    }

    public function deleteContact($contact)
    {
        return $contact->delete();
    }
}