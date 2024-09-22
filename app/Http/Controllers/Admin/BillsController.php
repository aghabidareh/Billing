<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PartyType;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function bills(){
        return view('Admin.Bills.list');
    }

    public function add(){
    $partiesType = PartyType::get();

    return view('Admin.Bills.add' , compact('partiesType'));
    }

    public function store(Request $request){
        die;
    }

    public function edit($id){
        return view('Admin.Bills.edit');
    }

    public function update(Request $request, $id){
        die;
    }

    public function delete($id){
        die;
    }
}
