<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    // use HasApiTokens, HasFactory, Notifiable;

    protected $table  = 'admins';
    protected $fillable = [
        'name','email','password','username','updated_by','added_by','com_code'
    ];
    use HasFactory;
}
