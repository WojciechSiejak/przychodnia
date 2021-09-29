<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // !admin
        \DB::table('users')->insert([
            'name'=>'Jan Kowalski',
            'email'=>'jan.kowalski@wp.pl',
            'password'=>bcrypt('password'),
            'phone'=>'888777222',
            'address'=>'Jaka ulica 23 Poznan',
            'status'=>'Active',
            'pesel'=>'8822232902139',
            'type'=>'admin',
        ]);

        // ! pacjent 1
        \DB::table('users')->insert([
            'name'=>'John rambo',
            'email'=>'johny@gmail.com',
            'password'=>bcrypt('password'),
            'phone'=>'555333111',
            'address'=>'Mokotowska 23 Warszawa',
            'status'=>'Active',
            'pesel'=>'832423423423',
            'type'=>'patient',
        ]);
 // ! pacjent 2
        \DB::table('users')->insert([
            'name'=>'Janusz Korwin-Mikke',
            'email'=>'krol@gmail.com',
            'password'=>bcrypt('password'),
            'phone'=>'888823233',
            'address'=>'Prawicowa 11 Warszawa',
            'status'=>'Active',
            'pesel'=>'7778888888',
            'type'=>'patient',
        ]);


        // ! doktor 1
        \DB::table('users')->insert([
            'name'=>'Zbigniew Religa',
            'email'=>'religia@gmail.com',
            'password'=>bcrypt('password'),
            'phone'=>'112000000',
            'address'=>'Ul. Kwriodawstwa 22',
            'status'=>'Active',
            'pesel'=>'55566323421',
            'type'=>'doctor',
        ]);

          // ! doktor 2
          \DB::table('users')->insert([
            'name'=>'Maria Kazimierska',
            'email'=>'m.kaz@wp.pl',
            'password'=>bcrypt('password'),
            'phone'=>'87653648',
            'address'=>'ul. Nowa 44 Poznań',
            'status'=>'Active',
            'pesel'=>'3832490237',
            'type'=>'doctor',
        ]);

          // ! specjalizacja 1
        \DB::table('specializations')-> insert([
            'name'=>'chirurg'
        ]);
         // ! specjalizacja 2
        \DB::table('specializations')-> insert([
            'name'=>'internista'
                    ]);
         // ! specjalizacja 3    
        \DB::table('specializations')-> insert([
            'name'=>'dermatolog'
        ]);

    }
}
