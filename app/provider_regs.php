<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provider_regs extends Model
{
    //
    protected $fillable = ['emp_name',
    'email',
    'phone',
    'pass',
    'conf_pass',
    'regi_at',
    'auto_id',
        'latitude',
        'longitude',
    ];
}
