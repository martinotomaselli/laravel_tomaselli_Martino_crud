<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ["name", "type", "cl", "naz", "descrizione" ];
}
