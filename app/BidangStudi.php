<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangStudi extends Model
{
    public function kompetenikeahlian()
    {
        return $this->hasMany('App\KompetensiKeahlian', 'bidang_id');
    }
}
