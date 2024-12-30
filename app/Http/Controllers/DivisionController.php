<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function view(){
        $allData=Division::all();
        return view('pages.divisions.division',compact('allData'));
    }

    public function add(){
        return view('pages.divisions.add_division');
    }

    public function store(Request $request){
        request()->validate([
            'division_name'=>'required|unique:divisions,division_name',
        ]);
        
        $division= new Division();
        $division->division_name= $request->division_name;
        $division->save();
        return redirect()->route('divisions.view')->with('success', 'Data save seccessfully!');
    }
    public function edit($id){

        return view('pages.divisions.edit_division');
    }
}
