<?php 

namespace App\Services\Site;

use App\Repositories\Site\ContactRepository;

class ContactService
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    public function store($request){
        return $this->contactRepository->store($request);
    }
}