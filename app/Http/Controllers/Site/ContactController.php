<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Services\Site\ContactService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactService $contactService)
    {
        $this->contactRepository = $contactService;
    }
    public function __invoke(ContactRequest $request)
    {
        //
        $this->contactRepository->store($request) ? Session::flash('success', 'Message Sent Successfully') : Session::flash('error', 'Message Not Sent, Try Again Later!');
        return redirect()->back();
    }
}
