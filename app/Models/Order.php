<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function scopeGetComments($query, $category)
    {
        switch ($category) {
            case 'candy':
                return $query->where('comments', 'LIKE', "%candy%");
            
            case 'call';
                return $query->where('comments', 'LIKE', "%call%");
            
            case 'referred';
                return $query->where('comments', 'LIKE', "%referred%");
            
            case 'signature';
                return $query->where('comments', 'LIKE', "%signature%");
            
            case 'miscellaneous':
                return $query->where('comments', 'NOT LIKE', "%candy%" , 'and', 'comments', 'NOT LIKE', "%call%" , 'and', 'comments', 'NOT LIKE', "%referred%", 
                                     'and', 'comments', 'NOT LIKE', "%signature%");
            
            default:
                break;
        }
    }
}
