@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
   <div class="container">
       <div class="card">
           <div class="card-header">
               {{$patient->name}}
           </div>
           <div class="card-body">
               <table class="table">
                   <tr>
                       <td>Name:</td>
                       <td>{{$patient->name}}</td>
                   </tr>
                   <tr>
                       <td>Email:</td>
                       <td>{{$patient->email}}</td>
                   </tr>
                   <tr>
                       <td>Telefon:</td>
                       <td>{{$patient->phone}}</td>
                   </tr>
                   <tr>
                       <td>Adres:</td>
                       <td>{{$patient->address}}</td>
                   </tr>
                   <tr>
                       <td>Pesel:</td>
                       <td>{{$patient->pesel}}</td>
                   </tr>
                   <tr>
                       <td>Status:</td>
                       <td>{{$patient->status}}</td>
                   </tr>

                   <tr>
        
                   </tr>
               </table>
           </div>

       </div>
   </div>

@endsection ('content')