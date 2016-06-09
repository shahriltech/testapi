<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\User_information;

class UserinformationController extends Controller
{
    public function create(){
    	return view('create');
    }

    public function show(){
    	$userinfo = User_information::all();

    	return view('show',array('userinfo'=>$userinfo));
    }
    public function save(Request $request){
    	$userinfo = new User_information;

    	$userinfo->firstname = $request->firstname;
    	$userinfo->lastname = $request->lastname;
    	$userinfo->address = $request->address;
    	$userinfo->dob = $request->dob;
    	$userinfo->marital_status = $request->marital_status;
    	$userinfo->phone_no = $request->phone_no;

    	$userinfo->save();

        Session::flash('success','New User Added');
    	return redirect('/');
    }

    public function viewdetail($id){
    	$userinfo = User_information::find($id);

    	return view('viewdetail',array('userinfo'=>$userinfo));
    }

    public function edit($id){
        $userinfo = User_information::find($id);

        return view('edit',array('userinfo'=>$userinfo));
    }

    public function updateuser(Request $request,$id){
        $userinfo = User_information::find($id);

        $userinfo->firstname = $request->firstname;
        $userinfo->lastname = $request->lastname;
        $userinfo->address = $request->address;
        $userinfo->dob = $request->dob;
        $userinfo->marital_status = $request->marital_status;
        $userinfo->phone_no = $request->phone_no;

        $userinfo->save();

        Session::flash('success','User Information Has Been Updated');

        return redirect('/');
    }

    public function delete($id){
        $userinfo = User_information::find($id);

        $userinfo->delete();
        Session::flash('delete','User Has Been Deleted');
        return redirect('/');
    }
}
