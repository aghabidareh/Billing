<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class PartyType extends Model
{
    use HasFactory;

    protected $table = "parties_type";

    public static function getAllRecord($request){
        $return = self::select('parties_type.*');
        
        // search box start
        
        if(!empty(Request::get('id'))){
            $return = $return->where('parties_type.id' , '=' , Request::get('id'));
        }

        if(!empty(Request::get('parties_type_name'))){
            $return = $return->where('parties_type.parties_type_name' , 'like' , '%' . Request::get('parties_type_name') . '%');
        }
        
        //search box end

        $return = $return->paginate(5);
        return $return;
    }
    
}
