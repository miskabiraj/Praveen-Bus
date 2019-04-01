<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
   public  function Vehicle(){
       return $this->hasOne(Vehicle::class,'id','vehicle_id');
       
   }
     public  function Staff(){
       return $this->hasOne(Staff::class,'id','driver1_id');
   }
   
}

