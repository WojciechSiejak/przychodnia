@extends('template')

@section('title')

    @if (isset($title))
        {{$title}} @endsection
    @endif  

@section('content')
<h2>Lekarze</h2>
<a href="{{ URL::to('doctors/edit') }}">Dodaj Lekarza</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Telefon</th>
                <th scope="col">Specjalizacja</th>
                <th scope="col">Adres</th>
                <th scope="col">Status</th>
                <th scope="col">Działania</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($users as $doctor)
               
                    <tr>
                        <th scope="row">{{$doctor->id}}</th>
                        <td><a href="/doctors/{{$doctor->id}}">{{$doctor->name}}</a></td>
                    
                        <td>{{$doctor->email}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td><ul>
                            @foreach ($doctor->specializations as $spec )
                            <li>{{$spec->name}}</li>

                            @endforeach

                        </ul></td>
                        <td>{{$doctor->address}}</td>
                        <td>{{$doctor->status }}</td>
                        <td>
                            <a href="{{ URL::to('doctors/delete/'.$doctor->id ) }}" onclick="return confirm('Jesteś pewien?')">Usuń lekarza</a><br>
                            <a href="{{ URL::to('doctors/edit/'.$doctor->id ) }}" >Edycja lekarza</a>
                         </td>
                    </tr>
                
            @endforeach
        </tbody>
    </table>


        @foreach ($statistics as $stat )
            @if ($stat->status == "Active")
            <p>Liczba lekarzy dostępnych: {{$stat->user_count}}</p>
            @endif

            @if ($stat->status == "Inactive")
            <p>Liczba lekarzy niedostępnych: {{$stat->user_count}}</p>
            @endif
        @endforeach
            
          
   

@endsection ('content')