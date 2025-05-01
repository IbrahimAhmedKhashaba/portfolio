<?php

namespace App\Repositories\Dashboard;

use App\Models\Expertise;

class ExpertiseRepository
{
    public function getExpertise(){
        return Expertise::all();
    }

    public function getExpertiseById($id){
        return Expertise::find($id);
    }

    public function store($request){
        $expertise = new Expertise();
        $expertise->title = $request->title;
        $expertise->desc = $request->desc;
        $expertise->icon = $request->icon;
        $expertise->save();
        return $expertise;
    }

    public function update($expertise , $request){
        $expertise->title = $request->title;
        $expertise->desc = $request->desc;
        $expertise->icon = $request->icon;
        $expertise->save();
        return $expertise;
    }

    public function destroy($expertise){
        return $expertise->delete();
    }
}