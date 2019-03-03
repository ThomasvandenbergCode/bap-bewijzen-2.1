<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrauwKleren extends Model
{
    protected $table = 'clothes';
    protected $fillable = ['name', 'description', 'info', 'large', 'medium', 'small', 'oldPrice', 'price'];

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function getInfoItems(){
        $items = explode("\n",$this->info);
        return $items;
    }
}
