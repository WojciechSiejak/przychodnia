@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
<div class="container">
    <h2>Dodawanie wizyty</h2>
</div>

    <form action="/visits/create" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
           
        
            <div class="form-group">
                <label for="name">Lekarz:</label>
                <select name="doctor" id="">
                    @foreach ($doctors as $doctor )
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Pacjent:</label>

                <select name="patient" id="">
                    @foreach ($patients as $patient )
                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="name">Data wizyty</label>
                <input type="text" class="form-control" name="date"/>
            </div>
    
            <input type="submit" value="Dodaj" class="btn btn-primary"/>
    </form>

</div>

@endsection ('content')