<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table='prestasis';

    protected $fillable=['nama'];

    public $timestamps= true;

    public function eskul()
    {
    	return $this->hasOne('App\eskul','prestasi_id');
    }
}
