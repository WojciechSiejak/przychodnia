<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\UserRepository;

class PatientController extends Controller
{
    public function index(UserRepository $userRepo)
    {      
    
        $patients = $userRepo->getAllPatients() ;

        $footerYear= date("Y");
        $title ="Moduł pacjentów";
        return view('patients.list',compact('patients','footerYear','title'));
    }

    public function show(UserRepository $userRepo,$id) 
    {
      
        $patient = $userRepo->find($id);


        $footerYear= date("Y");
        $title ="Moduł pacjenta";
        return view('patients.show',compact('patient','footerYear','title'));
    }

}
