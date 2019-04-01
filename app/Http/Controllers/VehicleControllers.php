<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleControllers extends Controller
{
    public function addVehicle()
    {
        $vehicles = Vehicle::all();
    	return view('admin.vehicle.addVehicle',compact('$vehicles'));
    }

    public function saveVehicle(){
        $this->validate(request(),[
            'owner_name'=>'required',
            'vehicle_number'=>'required',
        ]);

	    $vehicled = new Vehicle;
        $vehicled->owner_name = request()->owner_name;
        $vehicled->vehicle_number = strtoupper(request()->vehicle_number);
        $vehicled->vehicle_name = request()->vehicle_name;
        $vehicled->vehicle_type = request()->vehicle_type;
        $vehicled->model_number = request()->model_number;
        $vehicled->bus_type = request()->bus_type;
        $vehicled->seat = request()->seat;
        $vehicled->save();
        return back()->with('success','Vehicle Created Successfully Added');
    }

    public function viewVehicle(){
        $vehicles = Vehicle::all();
    	return view('admin.vehicle.viewVehicle',compact('vehicles'));
    }

    public function deleteVehicle($id){
    try {
        Vehicle::FindorFail($id)->delete();
        return back()->with('danger','Transport Manager Deleted Successfully');
        } catch (Exception $e) {
        return back()->with('danger','Transport Manager Delete Not Successfully');
            
        }
       
    }

    public function editVehicle($id){
     
        $vehicled = Vehicle::FindorFail($id);
        return view('admin.vehicle.editVehicle',compact('vehicled'));
    }
     public function updateVehicle($id){
         $this->validate(request(),[
            'owner_name'=>'required',
            'vehicle_number'=>'required',
        ]);

        $vehicled = Vehicle::FindorFail($id);
        $vehicled->owner_name = request()->owner_name;
        $vehicled->vehicle_number = strtoupper(request()->vehicle_number);
        $vehicled->vehicle_name = request()->vehicle_name;
        $vehicled->vehicle_type = request()->vehicle_type;
        $vehicled->model_number = request()->model_number;
        $vehicled->bus_type = request()->bus_type;
        $vehicled->seat = request()->seat;
        $vehicled->save();
        return redirect('admin/vehicles')->with('success','Vehicle Updated Sucessfully!');
    }
}

