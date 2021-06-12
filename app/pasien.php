<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $remember_token = false;

    public $timestamps = false;
    // const UPDATED_AT = 'updated_at';
    // const CREATED_AT = 'created_at';
    
    
    protected $fillable = [
							'id',
							'nama',
							'alamat',
    					];


}
