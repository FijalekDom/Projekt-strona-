@extends('layouts.strona')

@section('content')

    <table>
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Składniki</th>
            <th>Cena mała</th>
            <th>Cena średnia</th>
            <th>Cena duża</th>
        </tr>
        @foreach($dane as $dana)
            <tr class="kolor">
                <td>{{$dana->id}}</td>
                <td>{{$dana->nazwa}}</td>
                <td>{{$dana->skladniki}}</td>
                <td class="cena">{{$dana->cena_m}}</td>
                <td class="cena">{{$dana->cena_s}}</td>
                <td class="cena">{{$dana->cena_d}}</td>
            </tr>
         @endforeach

    </table>

@endsection