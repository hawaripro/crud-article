<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // mass assignment from controller
    protected $guarded = ['id'];
}
