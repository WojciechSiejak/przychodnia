@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Telefon</th>
                <th scope="col">Adres</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($patients as $patient)
               
                    <tr>
                        <th scope="row">{{$patient->id}}</th>
                        <td><a href="/patients/{{$patient->id}}">{{$patient->name}}</a></td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->phone}}</td>
                        <td>{{$patient->address}}</td>
                        <td>{{$patient->status }}</td>
                    </tr>
                
            @endforeach
        </tbody>
    </table>        
   

@endsection ('content')