<?php 

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\ExpertiseRepository;

class ExpertiseService
{
    private $expertiseRepository;

    public function __construct(ExpertiseRepository $expertiseRepository)
    {
        $this->expertiseRepository = $expertiseRepository;
    } 

    public function getExpertise()
    {
        return $this->expertiseRepository->getExpertise();
    } 

    public function store($request){
        return $this->expertiseRepository->store($request);
    }

    public function update($request , $id){
        $expertise = $this->expertiseRepository->getExpertiseById($id);
        return $this->expertiseRepository->update( $expertise, $request);
    }

    public function destroy($id){
        $expertise = $this->expertiseRepository->getExpertiseById($id);
        return $this->expertiseRepository->destroy( $expertise);
    }
}