<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandarKompetensi extends Model
{
    public function kompetensikeahlian()
    {
        return $this->belongsTo('App\KompetensiKeahlian', 'kompetensi_id');
    }
    public function nilai()
    {
        return $this->hasMany('App\Nilai', 'sk_id');
    }
}
