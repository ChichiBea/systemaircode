<?php

namespace App\Http\Controllers;
use App\Models\AboutUsModel;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        return view('aboutus');
    }

    public function aboutusinsert(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        $isInsert = AboutUsModel::insert(['title'=>$title,
                                           'content'=>$content,
                                           ]);
        if($isInsert){
            echo "successfully added";
        }else{
            echo "Failed to add";
        }
    
    }
    public function aboutusdisplay(){
        $data = AboutUsModel::all();
        return view('aboutusview', ['about_us'=>$data]);

    }
    public function aboutusedit($id){
        $data = AboutUsModel::find($id);
        return view('aboutusupdate', ['about_us'=>$data]);
    }
    public function aboutuseditt(Request $request, String $id){
        $aboutus = AboutUsModel::find($id);
        $input = $request->all();
        $aboutus->update($input);
        if($aboutus){
            echo "successfully updated";
        }else{
            echo "Failed to update";
        }
    }

    public function aboutusdelete(Request $request, String $id){
        $aboutuss = AboutUsModel::find($id);
        $aboutuss->delete($aboutuss);
        if($aboutuss){
            echo "successfully deleted";
        }else{
            echo "Failed to delete";
        }
    }
    
}

