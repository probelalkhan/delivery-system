<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function pickupAddress(){
        return $this->belongsTo('\App\Models\Address', 'address_pickup');
    }


    public function deliveryAddress(){
        return $this->belongsTo('\App\Models\Address', 'address_delivery');
    }


}
