@extends('layouts.zalogowany_ogolny')

@section('content')
    @if($zmienna!='[]')
    <table>
        <tr>
            <th>Id</th>
            <th>Nazwa</th>
            <th>Liczba</th>
            <th>Wartosc</th>

        </tr>
        @foreach($zmienna as $zamowienie)
            <tr>
                <td>{{$zamowienie->id}}</td>
                <td>{{$zamowienie->nazwa}}</td>
                <td>{{$zamowienie->liczba}}</td>
                <td>{{$zamowienie->wartosc}} zł.</td>
                <td><a></a></td>
            </tr>
        @endforeach
    </table>
    <form action="{{route('home.usun')}}" method="post" id="formularz">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        Usun zamowienie o numerze:
        <input type="text" name="numer" placeholder="Podaj numer">
        <button class="btn btn-primary" >Usun</button>
    </form>
    @else
        <h1>Brak zamowien do wyswietlenia</h1>

    @endif

@endsection