<?php

namespace App\Http\Controllers;
use App\Models\NewModel;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(){
        return view('new');
    }

    public function newinsert(Request $request){
        $callforproposals = $request->input('callforproposals');
        $typeofproposal = $request->input('typeofproposal');
        $proposalclassification = $request->input('proposalclassification');
        $projecttitle = $request->input('projecttitle');
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');

        $isInsert = NewModel::insert(['callforproposals'=>$callforproposals,
                                           'typeofproposal'=>$typeofproposal,
                                           'proposalclassification'=>$proposalclassification,
                                           'projecttitle'=>$projecttitle,
                                           'startdate'=>$startdate,
                                           'enddate'=>$enddate,
                                           ]);
        if($isInsert){
            echo "successfully added";
        }else{
            echo "Failed to add";
        }
    
    }
    public function newdisplay(){
        $data = NewModel::all();
        return view('newview', ['new'=>$data]);

    }
    public function newedit($id){
        $data = NewModel::find($id);
        return view('newupdate', ['new'=>$data]);
    }
    public function neweditt(Request $request, String $id){
        $new = NewModel::find($id);
        $input = $request->all();
        $new->update($input);
        if($new){
            echo "successfully updated";
        }else{
            echo "Failed to update";
        }
    }

    public function newdelete(Request $request, String $id){
        $neww = NewModel::find($id);
        $neww->delete($neww);
        if($neww){
            echo "successfully deleted";
        }else{
            echo "Failed to delete";
        }
    }
    
}

