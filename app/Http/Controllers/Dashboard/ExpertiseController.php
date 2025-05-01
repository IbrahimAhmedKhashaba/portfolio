<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpertiseRequest;
use App\Models\Expertise;
use App\Services\Dashboard\ExpertiseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExpertiseController extends Controller
{
    private $expertiseService;

    public function __construct(ExpertiseService $expertiseService)
    {
        $this->expertiseService = $expertiseService;
    }
    public function index()
    {
        //
        $expertise = $this->expertiseService->getExpertise();
        return view('dashboard.expertise.index',compact('expertise'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpertiseRequest $request)
    {
        //
        $this->expertiseService->store($request) ? Session::flash('success', 'Expertise Added Successfully')
            : Session::flash('error', 'Something went wrong');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Expertise $expertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expertise $expertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExpertiseRequest $request, $id)
    {
        //
        $this->expertiseService->update($request , $id) ? Session::flash('success', 'Expertise Updated Successfully')
            : Session::flash('error', 'Something went wrong');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $this->expertiseService->destroy($id) ? Session::flash('success', 'Expertise Deleted Successfully')
            : Session::flash('error', 'Something went wrong');
        return redirect()->back();
    }
}
