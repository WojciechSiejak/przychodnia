<?php

namespace App\Repositories;
use App\Models\User;
use DB;

class UserRepository extends BaseRepository{

    public function __construct(User $model){
        $this->model=$model;
    }
    
    
    public function getAllDoctors(){
        // ! zapytanie do bazy za pomocą Eloquent'a
        return $this->model->where('type','doctor')->orderBy('name','asc')->get();

        // ! to samo za pomocą Query buildera
        // return DB::table('users')->where('type','=','doctor')->get();
    }

    public function getAllPatients(){
        return $this->model->where('type','patient')->orderBy('name','asc')->get();

        // return DB::table('users')->where('type','=','doctor')->get();
    }


    public function getDoctorsStatistics(){

        return DB::table('users')->select(DB::raw('count(*) as user_count, status'))->where('type','doctor')->groupBy('status')->get();
    }


}
 
?>