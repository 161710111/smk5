<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
	protected $table='eskuls';

    protected $fillable=['nama','pengurus','jadwal','prestasi_id'];

    public $timestamps= true;

    public function prestasi()
    {
    	return $this->BelongsTo('App\prestasi','prestasi_id');
    }
    }
