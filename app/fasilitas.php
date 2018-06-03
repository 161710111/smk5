<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    
    protected $table='fasilitas';

    protected $fillable=['nama','jumlah','keterangan'];

    public $timestamps= true;

    public function programstudi()
    {
    	return $this->hasMany('App\programstudi','fasilitas_id');
    }
}
