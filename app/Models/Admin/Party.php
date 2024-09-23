<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Party extends Model
{
    use HasFactory;

    public static function frontRecors($request){
        $return = self::select("parties.*" , 'parties_type.parties_type_name');
        $return = $return->join('parties_type' , 'parties_type.id' , 'parties.parties_type_id');
        
        // search box start

        if(!empty(Request::get('id'))){
            $return = $return->where('parties.id' , '=' , Request::get('id'));
        }

        if(!empty(Request::get('full_name'))){
            $return = $return->where('parties.full_name' , 'like' , '%' . Request::get('full_name') . '%');
        }

        if(!empty(Request::get('phone_number'))){
            $return = $return->where('parties.phone_number' , 'like' , '%' . Request::get('phone_number') . '%');
        }
        
        //search box end
        
        $return = $return->paginate(5);
        return $return;
    }
}
