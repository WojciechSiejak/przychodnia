<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Repositories\SpecializationRepository;
use App\Http\Controllers\SpecializationController;




class SpecializationController extends Controller
{
    public function index(SpecializationRepository $specializationRepo)
    {      
        $specializations = $specializationRepo->getAll();

        $footerYear= date("Y");
        $title ="Moduł specializacji";
        return view('specializations.list',compact('specializations','footerYear','title'));
    }

    public function create(){
        $footerYear= date("Y");
         return view('specializations.create',compact('footerYear'));
    }

    public static function store (Request $request){

        $specializations = new Specialization;
        $specializations->name = $request->input('name');
        $specializations->save();

        return redirect()->action([SpecializationController::class, 'index']);
   }
}
