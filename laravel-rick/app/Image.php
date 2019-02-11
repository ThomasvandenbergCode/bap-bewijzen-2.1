<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['filename','name'];
    public function grauwkleren(){
        return $this->belongsTo('App\GrauwKleren');
    }
}
