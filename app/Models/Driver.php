<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function carrier(){
        return $this->belongsTo('App\Models\Carrier')->withDefault();
    }
}
