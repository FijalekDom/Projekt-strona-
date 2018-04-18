<?php

namespace App\Http\Controllers;

use App\Http\Requests\RejestracjaReguest;
use App\Klienci;
use App\Oferta;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Mockery\Exception;

class IndexController extends Controller
{

    public function index() {
        return view('index.index');
    }

    public function wyswietl_oferte() {
        try {
            $dane = Oferta::all();
            return view('index.oferta', compact('dane'));
         }catch (\Exception $e)
        {
            return view('index.blad_bazy');
        }
    }
    
    public function add() {
        return view('index.add');
    }


    public function save(RejestracjaReguest $request) {
        try {
            $klient = new Klienci();
            $klient->login = $request->input('login');
            $klient->imie = $request->input('imie');
            $klient->nazwisko = $request->input('nazwisko');
            $klient->email = $request->input('email');
            $klient->miasto = $request->input('miasto');
            $klient->adres_pocztowy = $request->input('adres_pocztowy');
            $klient->ulica = $request->input('ulica');
            $klient->nr_domu = $request->input('nr_domu');
            $klient->nr_mieszkania = $request->input('nr_mieszkania');
            $klient->save();

            $user = new User();
            $user->name = $request->input('login');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('haslo'));
            $user->save();

        }catch ( \QueryException $queryException )
        {
            return view('index.blad_bazy');
        }
        return view('index.index');
    }

}
