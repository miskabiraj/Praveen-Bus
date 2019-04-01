<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Trip;
use App\Vehicle;
use App\Staff;
use App\OnwardTrip;
use App\ReturnTrip;
use App\TripDirection;

class TripControllers extends Controller
{
    public function addTrip(){
        $vehicles = Vehicle::all();
        $staffs = Staff::all();
    	return view('admin.Trip.addTrip',compact('vehicles','staffs'));
    }
     public function saveTrip(){

        $this->validate(request(),[
            'vehicle_no'=>'required',
            'driver1'=>'required',
            'starting_km'=>'required',
            'ending_km'=>'required',
            'from_place'=>'required',
            'to_place'=>'required',      

        ]);
        $trips= new Trip;
        $trips->date = request()->date;
        $trips->vehicle_id = request()->vehicle_no;
        $trips->driver1_id = request()->driver1;
        $trips->driver2_id = request()->driver2;
        $trips->coach_attends_id = request()->coach_attends;
        $trips->startKm = request()->starting_km;
        $trips->endKm = request()->ending_km;
        $trips->totalKm = request('ending_km')-request('starting_km');
        $trips->from_place = request()->from_place;
        $trips->via_route = request()->via_route;
        $trips->to_place = request()->to_place;
        $trips->save();

    	return back()->with('success','Trip Added Successfully');


    }

    public function viewTrip(){
        $trips = Trip::all();
    	return view('admin.Trip.viewTrip',compact('trips'));

    }

     public function deleteTrip($id){

   try {
    Trip::FindorFail($id)->delete();
    return back()->with('success','Trip Deleted Successfully');
     
   } catch (Exception $e) {
     return back()->with('danger','Trip Delete Not Successfully');
     
   }
  }

  public function editTrip($id){
    $vehicles = Vehicle::all();
    $staffs = Staff::all();
    $trips = Trip::FindorFail($id);
    return view('admin.Trip.editTrip',compact('trips','vehicles','staffs'));
  }

   public function updateTrip($id){

     $this->validate(request(),[
            'vehicle_no'=>'required',
            'driver1'=>'required',
            'starting_km'=>'required',
            'ending_km'=>'required',
            'from_place'=>'required',
            'to_place'=>'required',    

        ]);
       
        $trips = Trip::FindorFail($id);
        $trips->date = request()->date;
        $trips->vehicle_id = request()->vehicle_no;
        $trips->driver1_id = request()->driver1;
        $trips->driver2_id = request()->driver2;
        $trips->coach_attends_id = request()->coach_attends;
        $trips->startKm = request()->starting_km;
        $trips->endKm = request()->ending_km;
        $trips->totalKm = request()->total_km;
        $trips->from_place = request()->from_place;
        $trips->via_route = request()->via_route;
        $trips->to_place = request()->to_place;
        $trips->save();
        return redirect('admin/Trips')->with('success','Staff Updated Sucessfully!');
  }

    // public function onwardTrip(){
    //     $onwards= OnwardTrip::all();
    //     return view('admin.Trip.onward_trip',compact('onwards'));
    // }


    // public function saveOnward(){

    //     $onwards = new OnwardTrip;
    //     $onwards->boarding_point = request()->boarding_point;
    //     $onwards->arr_time = request()->arr_time;
    //     $onwards->dep_time = request()->dep_time;
    //     $onwards->boarding_seat = request()->boarding_seat;
    //     $onwards->total_seat = request()->total_seat;
    //     $onwards->staff_sign = request()->staff_sign;
    //     $onwards->save();
    //     return back();


    // }

    //  public function deleteOnward($id){
    //     try {
    //         OnwardTrip::FindorFail($id)->delete();
    //         return back()->with('success','Onward Trip Updated Successfully');
    //     }catch (Exception $e){
    //         return back()->with('danger','Something went wrong! Delete Not Allowed!');
    //     }
    // }


    // public function returnTrip(){
    //     $returns = ReturnTrip::all();
    //     return view('admin.Trip.return_trip',compact('returns'));

    // }
    // public function saveReturn(){
    //     $returns = new ReturnTrip;
    //     $returns->station = request()->station;
    //     $returns->arr_time = request()->arr_time;
    //     $returns->dep_time = request()->dep_time;
    //     $returns->pickup_seat = request()->pickup_seat;
    //     $returns->total_seat = request()->total_seat;
    //     $returns->staff_sign = request()->staff_sign;
    //     $returns->save();
    //     return back();

    // }
    //  public function deleteReturnTrip($id){
    //     try {
    //         ReturnTrip::FindorFail($id)->delete();
    //         return back()->with('success','Return Trip Updated Successfully');
    //     }catch (Exception $e){
    //         return back()->with('danger','Something went wrong! Delete Not Allowed!');
    //     }
    // }

    // public function onward($id,$direct ){

    //     $trips = Trip::FindorFail($id);
    //     return $onwards = TripDirection::where('id',$trips->id);
    //     return view('admin.Trip.trip_direction',compact('onwards','trips'));
    // }

    public function tripDirect($trip,$id){
         $this->validate(request(),[
            'boarding_point'=>'required',
            'boarding_seat'=>'required|numeric',
        ]);
        $onwards = new TripDirection;
        $onwards->boarding_point = request()->boarding_point;
        $onwards->arr_time = request()->arr_time;
        $onwards->dep_time = request()->dep_time;
        $onwards->boarding_seat = request('boarding_seat');
        $onwards->trip_direct = $trip;
        $onwards->trip_id = $id;
        $onwards->save();
        return back()->with('success','Trip Direct  Successfully');
    }

    public function tripWise($trip,$id){
        $Trip = Trip::FindorFail($id);
        $TripEntries = TripDirection::where([['trip_id',$id],['trip_direct',$trip]])->get();
        if($trip != 'onward' &&  $trip != 'return'){
             return redirect('/admin/Trips');
        }
        return view('admin.Trip.trip_direction',compact('trip','TripEntries','id','Trip'));
    }
    
    public function deleteTripDirection($id){
        // return $id;
       try {
        TripDirection::FindorFail($id)->delete();
        return back()->with('success','Trip Deleted Successfully',compact('Trip','TripEntries'));
         
       } catch (Exception $e) {
         return back()->with('danger','Trip Delete Not Successfully');
         
       }
  }

   
}
