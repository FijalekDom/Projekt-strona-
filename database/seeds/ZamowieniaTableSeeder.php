<?php

use Illuminate\Database\Seeder;

class ZamowieniaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zamowienia =new \App\Zamowienia();
        $zamowienia->klient_id='1';
        $zamowienia->oferta_id='2';
        $zamowienia->liczba='1';
        $zamowienia->wartosc='25.90';
        $zamowienia->save();

        $zamowienia =new \App\Zamowienia();
        $zamowienia->klient_id='2';
        $zamowienia->oferta_id='1';
        $zamowienia->liczba='1';
        $zamowienia->wartosc='16.9';
        $zamowienia->save();
    }
}
