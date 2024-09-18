<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartiesController extends Controller
{
    public function partiesType(){
        return view("Admin.PartiesType.list");
    }

    public function add(){
        return view("Admin.PartiesType.add");
    }

    public function store(Request $request){
        die;
    }
}
