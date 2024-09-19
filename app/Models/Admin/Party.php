<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    public static function frontRecors(){
        return self::select("parties.*" , 'parties_type.parties_type_name')->join('parties_type' , 'parties_type.id' , 'parties.parties_type_id')->paginate(5);
    }
}
