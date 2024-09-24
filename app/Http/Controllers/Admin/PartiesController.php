<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PartyType;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PartiesController extends Controller
{
    public function partiesType(Request $request){
        $parties = PartyType::getAllRecord($request);

        return view("Admin.PartiesType.list" , compact("parties"));
    }

    public function add(){
        return view("Admin.PartiesType.add");
    }

    public function store(Request $request){
        $saver = request()->validate([
            'parties_type_name' => 'required|unique:parties_type,parties_type_name|min:4',
        ]);

        $saver = new PartyType();
        $saver->parties_type_name = trim($request->parties_type_name);
        $saver->save();

        return redirect()->route("parties-type")->with("success","Party Type Successfully Created!");
    }

    public function edit($id){
        $party = PartyType::find($id);
        return view("Admin.PartiesType.edit", compact("party"));
    }
    public function update(Request $request, $id){
        $party = PartyType::find($id);
        $party->parties_type_name = trim($request->parties_type_name);
        $party->save();

        return redirect()->route("parties-type")->with("success","Record Successfully Updated!");
    }

    public function delete($id){
        $parties = PartyType::find($id);
        $parties->delete();

        return redirect()->route("parties-type")->with("success","Record Successfully Deleted!");
    }

    public function pdfGenerator(){
        $getAllRecord = PartyType::get();
        $data = [
            'title'=> 'welocome to github.com/aghabidareh :)',
            'date'=> date('m/d/Y'),
            'parties' => $getAllRecord
        ];
        $pdf = PDF::loadView('PartiesTypePDF', $data);

        return $pdf->download('aghabdareh.pdf');
    }
}
