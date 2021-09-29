@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
<div class="container">
    <h2>Edycja lekarza</h2>
</div>

    <form action="/doctors/edit" method="POST" role="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  

        <input type="hidden" name="id" value="{{ $doctor->id }}">  


        <div class="form-group">
            <label for="name">Nazwiski i imię lekarza</label>
            <input type="text" class="form-control" name="name" value="{{ $doctor->name }}"/>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $doctor->email }}"/>
        </div>


        <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}"/>
        </div>

        <div class="form-group">
            <label for="address">Adress</label>
            <input type="text" class="form-control" name="address" value="{{ $doctor->address }}"/>
        </div>

        <div class="form-group">
            <label for="pesel">Pesel</label>
            <input type="text" class="form-control" name="pesel" value="{{ $doctor->pesel }}"/>
        </div>

        <div class="form-group">
            <label for="pesel">Specjalizacja</label>

            @foreach ($specializations as $specialization )
            @if ($doctor->specializations->contains($specialization->id))
            <input type="checkbox" class="form-control" name="specializations[]" value="{{  $specialization->id }}" checked><span>{{  $specialization->name }}</span>
            @else

            <input type="checkbox" class="form-control" name="specializations[]" value="{{  $specialization->id }}"><span>{{  $specialization->name }}</span>

            @endif
               
            @endforeach
          
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            @if ($doctor->status =='Active')
            Aktywny <input type="radio" class="form-control" name="status" value="Active" checked/> 
            Nieaktywny <input type="radio" class="form-control" name="status" value="Inactive"/>
            @else
            Aktywny<input type="radio" class="form-control" name="status" value="Active" /> 
            Nieaktywny <input type="radio" class="form-control" name="status" value="Inactive" checked/>
            @endif
            
            
        </div>

      
        <input type="submit" value="Edytuj" class="btn btn-primary">
            
    </form>

</div>

@endsection ('content')