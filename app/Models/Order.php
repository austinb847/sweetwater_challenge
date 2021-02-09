<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    //

    public function scopeGetExpectedShipDate($query)
    {
        return $query->where('comments', 'LIKE', "%expected ship date%");
    }
}
