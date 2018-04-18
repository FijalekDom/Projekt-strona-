@extends('layouts.strona')

@section('content')

    <h1> Aby dołączyć do grona naszych klientów podaj swoje dane. </h1>


    <form action="{{route('index.save')}}" method="post" id="formularz">


        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div >
            <input type="text" name="login" placeholder="Podaj nazwe użytkownika">
        </div>

        <br/>

        <div>
            <input type="password" name="haslo"  placeholder="Podaj haslo">
        </div>

        <br/>
        
        <div>
            <input type="text" name="imie" placeholder="Podaj imie">
        </div>

        <br/>

        <div>
            <input type="text" name="nazwisko" placeholder="Podaj nazwisko">
        </div>

        <br/>
        
        <div>
            <input type="text" name="email" placeholder="Podaj E-mail">
        </div>

        <br/>
        
        <div>
            <input type="text" name="miasto" placeholder="Podaj miasto">
        </div>

        <br/>
        
        <div>
            <input type="text" name="adres_pocztowy" placeholder="Podaj kod pocztowy">
        </div>

        <br/>
        
        <div>
            <input type="text" name="ulica" placeholder="Podaj nazwe ulicy">
                
        </div>

        <br/>
        
        <div>
            <input type="text" name="nr_domu" placeholder="Podaj numer budynku">
        </div>

        <br/>
        
        <div>
            <input type="text" name="nr_mieszkania" placeholder="Podaj numer mieszkania">
        </div>

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div id="walidacja">{{$error}}</div>
            @endforeach
        @endif

        <br/>

        <div>
            <button>Zapisz</button>
        </div>
    </form>


@endsection