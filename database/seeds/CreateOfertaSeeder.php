<?php

use Illuminate\Database\Seeder;

class CreateOfertaSeeder extends Seeder
{
    public function run()
    {
        $ofertas = new \App\Oferta();
        $ofertas->nazwa='PURYTANSKA';
        $ofertas->skladniki='sos ser';
        $ofertas->cena_m='14.90';
        $ofertas->cena_s='16.90';
        $ofertas->cena_d='19.90';
        $ofertas->save();
        
        $ofertas = new \App\Oferta();
        $ofertas->nazwa='HAWAJSKA';
        $ofertas->skladniki='sos ser szynka ananas kukurydza';
        $ofertas->cena_m='19.90';
        $ofertas->cena_s='25.90';
        $ofertas->cena_d='30.90';
        $ofertas->save();
        
        $ofertas = new \App\Oferta();
        $ofertas->nazwa='VEGETARIANA';
        $ofertas->skladniki='sos ser pieczarki cebula papryka pomidor kukurydza bazylia brokuły';
        $ofertas->cena_m='23.90';
        $ofertas->cena_s='27.90';
        $ofertas->cena_d='34.90';
        $ofertas->save();

        $ofertas = new \App\Oferta();
        $ofertas->nazwa='SMAKOSZ';
        $ofertas->skladniki='sos, ser, szynka, boczek, pieczarki, cebula, papryka, wołowina mielona';
        $ofertas->cena_m='19.90';
        $ofertas->cena_s='26.90';
        $ofertas->cena_d='38.90';
        $ofertas->save();

        $ofertas = new \App\Oferta();
        $ofertas->nazwa='WIEJSKA';
        $ofertas->skladniki='sos, ser, pieczarki, szynka, wołowina, cebula, jajko';
        $ofertas->cena_m='18.20';
        $ofertas->cena_s='24.50';
        $ofertas->cena_d='35.60';
        $ofertas->save();

        $ofertas = new \App\Oferta();
        $ofertas->nazwa='MEKSYKAŃSKA';
        $ofertas->skladniki='sos, sos pikantny, boczek, cebula, salami, fasola czerwona, papryka, kukurydza';
        $ofertas->cena_m='18.80';
        $ofertas->cena_s='27.90';
        $ofertas->cena_d='35.90';
        $ofertas->save();

        $ofertas = new \App\Oferta();
        $ofertas->nazwa='SEROWA';
        $ofertas->skladniki='sos, ser mozarella, parmezan, feta';
        $ofertas->cena_m='19.50';
        $ofertas->cena_s='26.90';
        $ofertas->cena_d='36.90';
        $ofertas->save();

        $ofertas = new \App\Oferta();
        $ofertas->nazwa='SZPINAKOWA';
        $ofertas->skladniki='sos czosnkowy, ser, szpinak, 2 jajka';
        $ofertas->cena_m='17.20';
        $ofertas->cena_s='25.50';
        $ofertas->cena_d='36.90';
        $ofertas->save();

        $ofertas = new \App\Oferta();
        $ofertas->nazwa='WIOSENNA';
        $ofertas->skladniki='sos, ser, pieczarki, cebula, szynka, groszek, pomidor, ogórek konserwowy';
        $ofertas->cena_m='19.90';
        $ofertas->cena_s='28.00';
        $ofertas->cena_d='37.90';
        $ofertas->save();
    }
}
