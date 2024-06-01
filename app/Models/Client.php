<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;

    

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
    ];

   


}
