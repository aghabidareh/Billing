<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Party;
use App\Models\Admin\PartyType;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function parties(Request $request){
        $records = Party::frontRecors($request);

        return view('Admin.Parties.list' , compact('records'));
    }
    public function add(){
        $partiesType = PartyType::get();

        return view("Admin.Parties.add" , compact("partiesType"));
    }

    public function store(Request $request){
        $saver = request()->validate([
            'parties_type_id' => 'required',
            'full_name'=> 'required|min:3',
            'phone_number'=> 'required|max:12',
            'address'=> 'required',
            'account_holder_name'=> 'required|min:10',
            'account_number'=> 'required|min:1',
            'bank_name' => 'required|min:2',
            'ifsc_code'=> 'required|min:6',
            'brach_address'=> 'required|min:3',
        ]);

        $saver = new Party();
        $saver->parties_type_id = $request->parties_type_id;
        $saver->full_name = trim($request->full_name);
        $saver->phone_number = trim($request->phone_number);
        $saver->address = trim($request->address);
        $saver->account_holder_name = trim($request->account_holder_name);
        $saver->account_number = trim($request->account_number);
        $saver->bank_name = trim($request->bank_name);
        $saver->ifsc_code = trim($request->ifsc_code);
        $saver->brach_address = trim($request->brach_address);
        $saver->save();

        return redirect()->route("parties")->with("success","Party Successfully Created!");
    }

    public function edit($id){
        $partiesType = PartyType::get();
        $party = Party::find($id);
        return view(view: "Admin.Parties.edit" , data: compact(["party","partiesType"]));
    }
    public function update(Request $request, $id){
        $party = Party::find($id);
        $party->parties_type_id = $request->parties_type_id;
        $party->full_name = trim($request->full_name);
        $party->phone_number = trim($request->phone_number);
        $party->address = trim($request->address);
        $party->account_holder_name = trim($request->account_holder_name);
        $party->account_number = trim($request->account_number);
        $party->bank_name = trim($request->bank_name);
        $party->ifsc_code = trim($request->ifsc_code);
        $party->brach_address = trim($request->brach_address);
        $party->save();

        return redirect()->route("parties")->with("success","Record Successfully Updated!");
    }

    public function delete($id){
        $parties = Party::find($id);
        $parties->delete();

        return redirect()->route("parties")->with("success",value: "Record Successfully Deleted!");
    }
}
