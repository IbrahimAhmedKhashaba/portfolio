<?php 

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\ContactRepository;

class ContactService
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getAllContacts()
    {
        return $this->contactRepository->getAllContacts();
    }

    public function getContactById($id)
    {
        return $this->contactRepository->getContactById($id);
    }

    public function deleteContact($id)
    {
        $contact = $this->getContactById($id);
        return $this->contactRepository->deleteContact($contact);
    }
}