<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.layout.master');
    	
});

Route::get('/Staff','StaffControllers@Staff');
Route::post('/Staff/add','StaffControllers@saveStaff')->name('add_Staff');
Route::get('/Staffs','StaffControllers@viewStaff');
Route::delete('/staff/{id}/delete','StaffControllers@deleteStaff')->name('delete_staff');
Route::get('/Staffs/{id}/edit','StaffControllers@editStaff')->name('edit_Staff');
Route::post('/Staffs/{id}/update','StaffControllers@updateStaff')->name('update_Staff');






Route::get('/vehicle','VehicleControllers@addVehicle');
Route::post('/vehicle/add','VehicleControllers@saveVehicle')->name('add_Vehicle');
Route::get('/vehicles','VehicleControllers@viewVehicle');
Route::delete('/vehicle/{id}/delete','VehicleControllers@deleteVehicle')->name('delete_vehicle');
Route::get('/vehicle/{id}/edit','VehicleControllers@editVehicle')->name('edit_Vehicle');
Route::post('/vehicle/{id}/update','VehicleControllers@updateVehicle')->name('update_Vehicle');



Route::get('/Trip','TripControllers@addTrip');
Route::post('/Trip/add','TripControllers@saveTrip')->name('add_Trip');
Route::get('/Trips','TripControllers@viewTrip');
Route::delete('/Trip/{id}/delete','TripControllers@deleteTrip')->name('delete_trip');
Route::get('/Trip/{id}/edit','TripControllers@editTrip')->name('edit_trip');
Route::post('/Trip/{id}/update','TripControllers@updateTrip')->name('update_Trip');




// Route::get('/Trips/onward/{id}','TripControllers@onwardTrip');
// Route::post('/Trip/add/onward','TripControllers@saveOnward')->name('add_onward');
// Route::delete('/Trip/{id}/deleteOnward','TripControllers@deleteOnward')->name('delete_onward');





// Route::get('/Trips/return','TripControllers@returnTrip');
// Route::post('/Trip/add/return','TripControllers@saveReturn')->name('add_return');
// Route::delete('/Trip/{id}/delete/returnTrip','TripControllers@deleteReturnTrip')->name('delete_returnTrip');





Route::get('/Trips/{trip}/{id}/','TripControllers@tripWise');
Route::post('/Trip/add/{trip}/{id}','TripControllers@tripDirect')->name('tripDirect');
Route::delete('/TripDirection/{id}/delete','TripControllers@deleteTripDirection')->name('delete_TripDirection');
