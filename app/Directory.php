<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = ['first_name', 'last_name', 'home_number','mobile_number',
    'email_address'];
}
