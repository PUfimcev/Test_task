<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'patronymic',
        'birth_date',
        'email',
        'tel_code',
        'tel',
        'status',
        'about',
    ];


}
