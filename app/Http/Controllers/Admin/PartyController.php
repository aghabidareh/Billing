<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Party;
use App\Models\Admin\PartyType;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function parties(){
        $parties = Party::all();

        return view('Admin.Parties.list' , compact('parties'));
    }
    public function add(){
        $partiesType = PartyType::get();

        return view("Admin.Parties.add" , compact("partiesType"));
    }

    public function store(Request $request){
        $saver = request()->validate([
            'parties_type_name' => 'required|unique:parties_type,parties_type_name|min:4',
        ]);

        $saver = new Party();
        $saver->parties_type_name = trim($request->parties_type_name);
        $saver->save();

        return redirect()->route("parties")->with("success","Party Type Successfully Created!");
    }

    public function edit($id){
        $party = Party::find($id);
        return view("Admin.Parties.edit", compact("party"));
    }
    public function update(Request $request, $id){
        $party = Party::find($id);
        $party->parties_type_name = trim($request->parties_type_name);
        $party->save();

        return redirect()->route("parties")->with("success","Record Successfully Updated!");
    }

    public function delete($id){
        $parties = Party::find($id);
        $parties->delete();

        return redirect()->route("parties")->with("success","Record Successfully Deleted!");
    }
}
