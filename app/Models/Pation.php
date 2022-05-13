<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pation extends Model
{
    use HasFactory;
    protected $table='pation';
     protected $fillable=[
        'name',
        'password',
        'phone',
        'address',
        'image',
        // 'phone',
        // 'salary',
        // 'department',
    ];
}
