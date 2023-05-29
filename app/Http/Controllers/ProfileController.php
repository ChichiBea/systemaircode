<?php

namespace App\Http\Controllers;
use App\Models\ProfileModel;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function profileinsert(Request $request){
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $sex = $request->input('sex');
        $email = $request->input('email');
        $mobilenumber = $request->input('mobilenumber');
        $address = $request->input('address');
        $primaryinstitution = $request->input('primaryinstitution');
        $position = $request->input('position');

        $isInsert = ProfileModel::insert(['firstname'=>$firstname,
                                           'middlename'=>$middlename,
                                           'lastname'=>$lastname,
                                           'sex'=>$sex,
                                           'email'=>$email,
                                           'mobilenumber'=>$mobilenumber,
                                           'address'=>$address,
                                           'primaryinstitution'=>$primaryinstitution,
                                           'position'=>$position,
                                           ]);
        if($isInsert){
            echo "successfully added";
        }else{
            echo "Failed to add";
        }
    
    }
    public function profiledisplay(){
        $data = ProfileModel::all();
        return view('profileview', ['profile'=>$data]);

    }
    public function profileedit($id){
        $data = ProfileModel::find($id);
        return view('profileupdate', ['profile'=>$data]);
    }
    public function profileeditt(Request $request, String $id){
        $profile = ProfileModel::find($id);
        $input = $request->all();
        $profile->update($input);
        if($profile){
            echo "successfully updated";
        }else{
            echo "Failed to update";
        }
    }

    public function profiledelete(Request $request, String $id){
        $profilee = ProfileModel::find($id);
        $profilee->delete($profilee);
        if($profilee){
            echo "successfully deleted";
        }else{
            echo "Failed to delete";
        }
    }
    
}
