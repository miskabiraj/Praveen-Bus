<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripDirection extends Model
{ 
	public  function Vehicle(){
       return $this->hasOne(Vehicle::class,'id','vehicle_id');
       
   }
   public  function Trip(){
       return $this->hasMany(Vehicle::class,'id','vehicle_id');
       
   }
}
