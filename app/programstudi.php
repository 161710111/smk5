<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programstudi extends Model
{
    protected $table='pasiens';

    protected $fillable=['nama','kurikulum_id','fasilitas_id','industri_id'];

    public $timestamps= true;

    public function kurikulum()
    {
    	return $this->BelongsToMany('App\kurikulum','kurikulum_id');
    }
    public function fasilitas()
    {
    	return $this->BelongsToMany('App\fasilitas','fasilitas_id');
    }
    public function industri()
    {
    	return $this->BelongsToMany('App\industri','industri_id');
    }
    }
