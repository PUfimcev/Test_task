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

    /**
     * The Mutator transform string Date to Date format Sql
     *
     * @param string $value Data from input type="text".
     * @return void
     */
    public function setBirthDateAttribute(string $value) :Void
    {
        $this->attributes['birth_date'] = date("Y-m-d", strtotime($value));
    }

}
