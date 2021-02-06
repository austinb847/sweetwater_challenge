<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
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
                $exclude_categorys = [
                    ['comments' ,'not like','%'.'candy'.'%'],
                    ['comments' ,'not like','%'.'call'.'%'],
                    ['comments' ,'not like','%'.'referred'.'%'],
                    ['comments' ,'not like','%'.'signature'.'%'],
                ];
                return $query->where($exclude_categorys);
            default:
                break;
        }
    }

    public function scopeGetExpectedShipDate($query)
    {
        return $query->where('comments', 'LIKE', "%expected ship date%");
    }
}
