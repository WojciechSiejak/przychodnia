<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Specialization;
use App\Repositories\UserRepository;



class DoctorController extends Controller
{
    public function index(UserRepository $userRepo)
    {      
        $statistics = $userRepo->getDoctorsStatistics();
        $users = $userRepo->getAllDoctors() ;

        $footerYear= date("Y");
        $title ="Moduł lekarzy";
        return view('doctors.list',compact('users','footerYear','title','statistics'));
    }

    public function show(UserRepository $userRepo,$id)
    {
      
        $doctor = $userRepo->find($id);


         $footerYear= date("Y");
        $title ="Moduł lekarzy";
        return view('doctors.show',compact('doctor','footerYear','title'));
    }


    
    public function create()
    {  $specializations= Specialization::all();
        $footerYear= date("Y");
       return view ('doctors.create',compact('specializations', 'footerYear'));
    }

    public function store(Request $request)
    {  $doctor = new User;
        $doctor->name=$request->input('name');
        $doctor->email=$request->input('email');
        $doctor->password=bcrypt($request->input('password'));
        $doctor->phone=$request->input('phone');
        $doctor->address=$request->input('address');
        $doctor->pesel=$request->input('pesel');
        $doctor->status=$request->input('status');
        $doctor->type='doctor';
        $doctor->save();

        $doctor ->specializations()->sync($request->input('specializations'));


        $footerYear= date("Y");

       return redirect()->action([DoctorController::class, 'index']);
    }

    public function editStore(Request $request)
    {  $doctor = User::find($request->input('id'));
        $doctor->id=$request->input('id');
        $doctor->name=$request->input('name');
        $doctor->email=$request->input('email');
        $doctor->phone=$request->input('phone');
        $doctor->address=$request->input('address');
        $doctor->pesel=$request->input('pesel');
        $doctor->status=$request->input('status');

        $doctor->save();

        $doctor ->specializations()->sync($request->input('specializations'));


        $footerYear= date("Y");

       return redirect()->action([DoctorController::class, 'index']);
    }
    

    public function edit(UserRepository $userRepo, $id)
    {
        $footerYear= date("Y");
        $doctor = $userRepo->find($id);
        $specializations= Specialization::all();

        return view('doctors.edit',compact('doctor', 'footerYear','specializations'));
    }

    public function delete(UserRepository $userRepo, $id){

       $doctor = $userRepo->delete($id);
       return redirect('doctors');
    }

}
