<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public static function getAllRecord(){
        $return = self::select('bills.*' , 'parties_type.parties_type_name');
        $return = $return->join('parties_type','parties_type.id','=','bills.parties_type_id');
        $return = $return->paginate(10);
        return $return;
    }
}
