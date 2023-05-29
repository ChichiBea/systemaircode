<?php

namespace App\Http\Controllers;
use App\Models\ProposalsModel;
use Illuminate\Http\Request;


class ProposalsController extends Controller
{
    
    public function index(){
        return view('proposals');
    }

    public function proposalsinsert(Request $request){
        $callforproposals = $request->input('callforproposals');
        $startdate = $request->input('startdate');
        $enddate = $request->input('enddate');
        $yeartobefunded = $request->input('yeartobefunded');
        $fundingagency = $request->input('fundingagency');
        $status = $request->input('status');
        $remarks = $request->input('remarks');

        $isInsert = ProposalsModel::insert(['callforproposals'=>$callforproposals,
                                           'startdate'=>$startdate,
                                           'enddate'=>$enddate,
                                           'yeartobefunded'=>$yeartobefunded,
                                           'fundingagency'=>$fundingagency,
                                           'status'=>$status,
                                           'remarks'=>$remarks,
                                           ]);
        if($isInsert){
            echo "successfully added";
        }else{
            echo "Failed to add";
        }
    
    }
    public function proposalsdisplay(){
        $data = ProposalsModel::all();
        return view('proposalsview', ['proposals'=>$data]);

    }
    public function proposalsedit($id){
        $data = ProposalsModel::find($id);
        return view('proposalsupdate', ['proposals'=>$data]);
    }
    public function proposalseditt(Request $request, String $id){
        $proposals = ProposalsModel::find($id);
        $input = $request->all();
        $proposals->update($input);
        if($proposals){
            echo "successfully updated";
        }else{
            echo "Failed to update";
        }
    }

    public function proposalsdelete(Request $request, String $id){
        $proposalss = ProposalsModel::find($id);
        $proposalss->delete($proposalss);
        if($proposalss){
            echo "successfully deleted";
        }else{
            echo "Failed to delete";
        }
    }
}
