@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
<div class="container">
    <h2>Dodawanie specjalizacji</h2>
</div>

    <form action="/specializations/create" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
        <div class="form-group">
            <label for="name">Nazwa specjalizacji</label>
            <input type="text" class="form-control" name="name"/>
            <input type="submit" value="Dodaj" class="btn btn-primary"/>
        </div>
    

    </form>

</div>

@endsection ('content')