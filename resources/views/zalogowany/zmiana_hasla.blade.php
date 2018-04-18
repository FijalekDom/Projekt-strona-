@extends('layouts.zalogowany_ogolny')

@section('content')

    @if($zmienna==1)
    <h1>Hasło zostało zmienione</h1>
    @else
        <h1>Podane obecne hasło jest nie poprawne spróbuj ponownie</h1>
    @endif

@endsection