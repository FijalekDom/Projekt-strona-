@extends('layouts.zalogowany_ogolny')

@section('content')

    <h2>Wypełnij formularz aby zamowic pizze</h2>
    <form action="{{route('dodaj_zamowienie')}}" method="post" id="formularz">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <table>
            <tr>
                <td>Rodzaj pizzy:</td>
                <td>
                    <select name="rodzaj">
                        <option>HAWAJSKA</option>
                        <option>VEGETARIANA</option>
                        <option>PURYTANSKA</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Wielkość pizzy:</td>
                <td>
                    <select id="wielkosc">
                        <option> Duża </option>
                        <option> Średnia </option>
                        <option> Mała </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Liczba: </td>
                <td>
                    <input type="number" name="liczba" placeholder="Podaj liczbe">
                </td>
            </tr>

            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div id="walidacja">{{$error}}</div>
                @endforeach
            @endif

            <tr>
                <td><div class="form-group"><button class="btn btn-primary">Zamów</button></div></td>
                <td></td>
            </tr>
        </table>
    </form>

@endsection