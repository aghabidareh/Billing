<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory;

    public static function getAllRecord(){
        $return = self::select('bills.*' , 'parties_type.parties_type_name');
        $return = $return->join('parties_type','parties_type.id','=','bills.parties_type_id');

        // search box start

        if(!empty(Request::get('id'))){
            $return = $return->where('bills.id' , '=' , Request::get('id'));
        }

        if(!empty(Request::get('parties_type_name'))){
            $return = $return->where('bills.parties_type_name' , 'like' , '%' . Request::get('parties_type_name') . '%');
        }

        if(!empty(Request::get('tax_amount'))){
            $return = $return->where('bills.tax_amount' , 'like' , '%' . Request::get('tax_amount') . '%');
        }
        
        //search box end

        $return = $return->paginate(10);
        return $return;
    }
}
