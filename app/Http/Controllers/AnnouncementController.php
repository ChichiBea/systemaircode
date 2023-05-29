<?php

namespace App\Http\Controllers;
use App\Models\AnnouncementModel;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        return view('announcement');
    }

    public function announcementinsert(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        $isInsert = AnnouncementModel::insert(['title'=>$title,
                                           'content'=>$content,
                                           ]);
        if($isInsert){
            echo "successfully added";
        }else{
            echo "Failed to add";
        }
    
    }
    public function announcementdisplay(){
        $data = AnnouncementModel::all();
        return view('announcementview', ['announcements'=>$data]);

    }
    public function announcementedit($id){
        $data = AnnouncementModel::find($id);
        return view('announcementupdate', ['announcements'=>$data]);
    }
    public function announcementeditt(Request $request, String $id){
        $announce = AnnouncementModel::find($id);
        $input = $request->all();
        $announce->update($input);
        if($announce){
            echo "successfully updated";
        }else{
            echo "Failed to update";
        }
    }

    public function announcementdelete(Request $request, String $id){
        $announce = AnnouncementModel::find($id);
        $announce->delete($announce);
        if($announce){
            echo "successfully deleted";
        }else{
            echo "Failed to delete";
        }
    }
    
}

