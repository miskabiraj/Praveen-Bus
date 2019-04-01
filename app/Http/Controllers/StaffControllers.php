<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffControllers extends Controller
{
	public function Staff(){
    return view('admin.staff.addStaff');
  }
  public function saveStaff(){
         $this->validate(request(),[
            'name'=>'required',
            'mobile_number'=> 'required|numeric|digits:10',
            'address'=>'required',
        ]);
        $staffs = new Staff;
        $staffs->name = request()->name;
        $staffs->mobile_number = request()->mobile_number;
        $staffs->phone_number = request()->phone_number;
        $staffs->address = request()->address;
        $staffs->licence_number = strtoupper(request()->licence_number);
        $staffs->licence_renewal = request()->licence_renewal;
        $staffs-> save();
        return back()->with('success','Staff Added Successfully Created');
    }

    public function viewStaff(){
      $staffs = Staff::all();
  	return view('admin.staff.viewStaff',compact('staffs'));
  }

  public function deleteStaff($id){

   try {
    Staff::FindorFail($id)->delete();
    return back()->with('danger','Transport Manager Deleted Successfully');
     
   } catch (Exception $e) {
     return back()->with('danger','Transport Manager Delete Not Successfully');
     
   }
  }

  public function editStaff($id){
    $staffs = Staff::FindorFail($id);
    return view('admin.staff.editStaff',compact('staffs'));
  }
  public function updateStaff($id){
       $this->validate(request(),[
            'name'=>'required',
            'mobile_number'=> 'required|numeric|digits:10',
            'address'=>'required',
          ]);
        
        $staffs = Staff::FindorFail($id);
        $staffs->name = request()->name;
        $staffs->mobile_number = request()->mobile_number;
        $staffs->phone_number = request()->phone_number;
        $staffs->address = request()->address;
        $staffs->licence_number = strtoupper(request()->licence_number);
        $staffs->licence_renewal = request()->licence_renewal;
        $staffs-> save();
        return redirect('admin/Staffs')->with('success','Staff Updated Sucessfully!');
  }
}
