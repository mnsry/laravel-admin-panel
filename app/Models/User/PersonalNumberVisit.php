<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class PersonalNumberVisit extends Model
{
    protected $table = 'user_personal_number_visits';

    public $timestamps = false;

    protected $fillable = ['seen'];
}
