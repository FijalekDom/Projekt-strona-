<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zamowienia extends Model
{
    public function zamowienia(){
        return $this->belongsToMany(Zamowienia::class, 'zamowienias', 'klient_id', 'oferta_id')->withTimestamps();
    }
}
