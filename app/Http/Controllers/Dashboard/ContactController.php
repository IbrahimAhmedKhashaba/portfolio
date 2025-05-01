<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\Dashboard\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    public function index()
    {
        //
        $contacts = $this->contactService->getAllContacts();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        //
        $this->contactService->deleteContact($id) ? Session::flash('success', 'Contact deleted successfully.')
            : Session::flash('error', 'Contact not deleted.');
        return redirect()->route('dashboard.contacts.index');
    }
}
