@extends('layouts.zalogowany_ogolny')

@section('content')
<h1>O mnie</h1>
<div>
    <h1>
    @foreach($klienci as $klient)
    Login:  {{$klient->login}}</br>
    Imie:  {{$klient->imie}}</br>
    Nazwisko:  {{$klient->nazwisko}}</br>
    Adres E-mail:  {{$klient->email}}</br>
    Miasto:  {{$klient->miasto}}</br>
    Kod pocztowy:  {{$klient->adres_pocztowy}}</br>
    Ulica:  {{$klient->ulica}}</br>
    Nr. domu:  {{$klient->nr_domu}}</br>
    Nr. mieszkania:  {{$klient->nr_mieszkania}}</br>
        @endforeach
    </h1>
</div>

<h1>Zmiana hasła</h1>

<div>
    <form action="{{route('home.zmien_haslo')}}" method="post" id="formularz">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>
            <input type="password" name="obecne_haslo"  placeholder="Podaj obecne haslo">
        </div>

        <div>
            <input type="password" name="nowe_haslo"  placeholder="Podaj nowe haslo">
        </div>

        <div>
            <input type="password" name="nowe_haslo_potwierdz"  placeholder="Potwierdz haslo">
        </div>

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div id="walidacja">{{$error}}</div>
            @endforeach
        @endif

        <div>
            <button>Zmien hasło</button>
        </div>
    </form>

</div>


@endsection