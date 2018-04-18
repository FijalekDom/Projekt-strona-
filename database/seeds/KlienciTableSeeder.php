<?php

use Illuminate\Database\Seeder;

class KlienciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $klient =new \App\Klienci();
        $klient->login='User';
        $klient->imie='Jan';
        $klient->nazwisko='Kowalski';
        $klient->email='User@temp.pl';
        $klient->miasto='Lublin';
        $klient->adres_pocztowy='21-345';
        $klient->ulica='Lubelska';
        $klient->nr_domu='12';
        $klient->nr_mieszkania='23';
        $klient->save();

        $klient =new \App\Klienci();
        $klient->login='User1';
        $klient->imie='Niejan';
        $klient->nazwisko='Niekowalski';
        $klient->email='User1@temp.pl';
        $klient->miasto='Lublin';
        $klient->adres_pocztowy='21-345';
        $klient->ulica='Lubelska';
        $klient->nr_domu='12';
        $klient->nr_mieszkania='24';
        $klient->save();

    }
}
