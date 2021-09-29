@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
<div class="container">
    <h2>Dodawanie lekarza</h2>
</div>

    <form action="/doctors/create" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
        <div class="form-group">
            <label for="name">Nazwiski i imię lekarza</label>
            <input type="text" class="form-control" name="name"/>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>

        <div class="form-group">
            <label for="password">hasło</label>
            <input type="password" class="form-control" name="password"/>
        </div>

        <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="text" class="form-control" name="phone"/>
        </div>

        <div class="form-group">
            <label for="address">Adress</label>
            <input type="text" class="form-control" name="address"/>
        </div>

        <div class="form-group">
            <label for="pesel">Pesel</label>
            <input type="text" class="form-control" name="pesel"/>
        </div>

        <div class="form-group">
            <label for="pesel">Specjalizacja</label>

            @foreach ($specializations as $specialization )
                <input type="checkbox" class="form-control" name="specializations[]" value="{{  $specialization->id }}"><span>{{  $specialization->name }}</span>
            @endforeach
          
        </div>
        <input type="hidden" name="status" value="Active">  
        <input type="submit" value="Dodaj" class="btn btn-primary">
            
    </form>

</div>

@endsection ('content')