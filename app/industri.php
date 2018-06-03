<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class industri extends Model
{
    
    protected $table='industris';

    protected $fillable=['nama','tanggal_kerjasama'];

    public $timestamps= true;

    public function programstudi()
    {
    	return $this->hasMany('App\programstudi','industri_id');
    }
}
