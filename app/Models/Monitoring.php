<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{

    protected $table = 'monitoring';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';

    protected $fillable = [
        'projek_name',
        'client',
        'name_leader',
        'email',
        'photo_leader',
        'start_date',
        'ent_date',
        'progres',
    ];


    protected $casts = [
        'start_date' => 'date',
        'ent_date' => 'date',
    ];

}