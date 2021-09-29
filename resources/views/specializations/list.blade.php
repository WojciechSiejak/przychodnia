@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
<div class="container">
    <h2>Specjalizacje</h2>
     <a href="{{ URL::to('specializations/create') }}">Dodaj nową specjalizacje</a>
</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa specjalizacji</th>
                
            </tr>
        </thead>
        <tbody>
            
            @foreach ($specializations as $spec)
               
                    <tr>
                        <th scope="row">{{$spec->id}}</th>
                        <td>{{$spec->name}}</td>              
                    </tr>
                
            @endforeach
        </tbody>
    </table>

@endsection ('content')