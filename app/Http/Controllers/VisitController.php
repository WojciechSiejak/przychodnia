<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\VisitRepository;
use App\Repositories\UserRepository;
use App\Models\Visit;


class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo)
    {      
        $visits = $visitRepo->getAll();

        $footerYear= date("Y");
        $title ="Moduł wizyt";
        return view('visits.list',compact('visits','footerYear','title'));
    }

    public function create(UserRepository $userRepo){
        $footerYear= date("Y");
        $title ="Moduł wizyt";
        $doctors = $userRepo->getAllDoctors();
        $patients = $userRepo->getAllPatients();

        return view('visits.create',compact('doctors','patients','footerYear','title'));
    }

    public function store (Request $request){
        
        $visit = new Visit;

        $visit->doctor_id = $request->input('doctor');
        $visit->patient_id = $request->input('patient');
        $visit->date = $request->input('date');
        $visit->save();
        
        return redirect()->action([VisitController::class, 'index']);
    }
}
