<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Bill;
use App\Models\Admin\PartyType;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    public function bills(){
        $records = Bill::getAllRecord();

        return view('Admin.Bills.list' , compact('records'));
    }

    public function add(){
    $partiesType = PartyType::get();

    return view('Admin.Bills.add' , compact('partiesType'));
    }

    public function store(Request $request){

        $saver = request()->validate([
            'declration' => 'min:4|required'
        ]);

        $saver = new Bill();
        $saver->parties_type_id = $request->parties_type_id;
        $saver->invoice_date = $request->invoice_date;
        $saver->invoice_number = $request->invoice_number;
        $saver->item_description = $request->item_description;
        $saver->total_amount = $request->total_amount;
        $saver->cgst_rate = $request->cgst_rate;
        $saver->sgst_rate = $request->sgst_rate;
        $saver->igst_rate = $request->igst_rate;
        $saver->cgst_amount = $request->cgst_amount;
        $saver->sgst_amount = $request->sgst_amount;
        $saver->igst_amount = $request->igst_amount;
        $saver->tax_amount = $request->tax_amount;
        $saver->net_amount = $request->net_amount;
        $saver->declration = trim( $request->declration );

        $saver->save();

        return redirect()->route('bills')->with('success','Bill Successfully Added!');
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
