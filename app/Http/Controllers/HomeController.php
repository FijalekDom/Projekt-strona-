<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZamowienieRequest;
use App\Http\Requests\ZmianaHaslaRequest;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\Hash;
use App\Klienci;
use App\Oferta;
use App\User;
use App\Zamowienia;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function save(ZamowienieRequest $request)
    {
        $zm = Auth::id();
        $nazwa_id=$request->input('rodzaj');
        $liczba=$request->input('liczba');
        $oferta_id = Oferta::where('nazwa','=',$nazwa_id)->get(['id','cena_m','cena_s','cena_d']);
        $rozmiar=$request->input('wielkosc');

        if($rozmiar=="Duża")
        {
            $rozmiar=$oferta_id->implode('cena_d');
        }
        else
        {
            if($rozmiar=="Średnia")
            {
                $rozmiar=$oferta_id->implode('cena_s');
            }
            else
            {
                $rozmiar=$oferta_id->implode('cena_m');
            }
        }

        $zamowienia = new Zamowienia();
        $zamowienia->klient_id = $zm;
        $zamowienia->oferta_id = $oferta_id->implode('id');
        $zamowienia->liczba = $liczba;
        $zamowienia->wartosc = $rozmiar*$liczba;
        $zamowienia->save();

        return (view('zalogowany.index'));
    }

    public function index()
    {
        return view('zalogowany.index');
    }

    public function usun(Request $request)
    {
        $pom=0;
        $numer='{"id":'.$request->input('numer').'}';
        $zm = Auth::id();
        $zamowienia = Zamowienia::where('klient_id','=',$zm)->get(['id']);
        foreach ($zamowienia as $zamowienie)
        {
            if($zamowienie == $numer)
            {
                $pom=1;
            }
        }

        if($pom==1)
        {
            Zamowienia::destroy($request->input('numer'));
        }
        else
        {
            echo "Nie ma zamowienia o tym numerze";
        }


        $zamowienia=DB::select('select zamowienias.id, ofertas.nazwa, zamowienias.liczba, zamowienias.wartosc from zamowienias, ofertas where zamowienias.klient_id = ? and zamowienias.oferta_id=ofertas.id', array($zm));
        $zmienna= collect($zamowienia);

        return view('zalogowany.moje_zamowienia', compact('zmienna'));


    }

    public function pokazZamowienia()
    {
        $zm=$id = Auth::id();


        $zamowienia=DB::select('select zamowienias.id, ofertas.nazwa, zamowienias.liczba, zamowienias.wartosc from zamowienias, ofertas where zamowienias.klient_id = ? and zamowienias.oferta_id=ofertas.id order by zamowienias.id', array($zm));
        $zmienna= collect($zamowienia);

        return view('zalogowany.moje_zamowienia', compact('zmienna'));
    }

    public function pokazDane()
    {
        $zmienna=$id = Auth::id();

        $klienci = Klienci::where('id','=',$zmienna)->get(['*']);

        return view('zalogowany.o_mnie', compact('klienci'));
    }

    public function zmien_haslo(ZmianaHaslaRequest $request)
    {
        $zm=$id = Auth::id();

        $pobrane_haslo=$request->input('obecne_haslo');

        $zmienna=User::where('id','=',$zm)->get(['password']);

        $obecne_haslo=$zmienna->implode('password');

        if(Hash::check($pobrane_haslo, $obecne_haslo))
        {
            if($request->input('nowe_haslo')==$request->input('nowe_haslo_potwierdz'))
            {
                $user = User::find($zm);
                $user->password=bcrypt($request->input('nowe_haslo'));
                $user->save();
                $zmienna=1;
                return view('zalogowany.zmiana_hasla', compact('zmienna'));
            }
        }
        else
        {
            $zmienna=2;
            $id = Auth::id();

            $klienci = Klienci::where('id','=',$id)->get(['*']);

            return view('zalogowany.zmiana_hasla', compact('zmienna'));
        }
    }

    public function zamow()
    {
        return view('zalogowany.zamow');
    }

    public function oferta()
    {
        $dane = Oferta::all();

        return view('zalogowany.oferta', compact('dane'));
    }
}
