<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model
{
    
    protected $table='kurikulums';

    protected $fillable=['nama','bidang'];

    public $timestamps= true;

    public function programstudi()
    {
    	return $this->hasMany('App\programstudi','kurikulum_id');
    }
}
