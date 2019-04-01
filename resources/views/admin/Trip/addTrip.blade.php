@extends('admin.layout.master')
@section('content')


    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <form method="post" action="{{ route('admin.add_Trip') }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>TRIP MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Trip 
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">
                                    </div>

                                    <div class="row clearfix">
                                    	<div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" name="date" class="form-control" placeholder=" Date"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                           <select class="form-control show-tick" name="vehicle_no" >
                                                <option value="" >-- Select Vehicle No --</option>
                                                @foreach($vehicles as $vehicle)
                                                <option value="{{$vehicle->id}}" >{{$vehicle->vehicle_number}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                             <div class="col-sm-3">
                                            <select class="form-control show-tick" name="driver1" >
                                                <option value="" >-- Select Driver 1 --</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{$staff->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control show-tick" name="driver2" >
                                                <option value="" >-- Select Driver 2 --</option>
                                                 @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{$staff->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                              
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="coach_attends" class="form-control" placeholder="Coach Attends" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="starting_km" class="form-control" min="0" placeholder="Starting KM "  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="ending_km" class="form-control" min="0"  placeholder="Ending KM "  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="from_place" class="form-control" placeholder="From Place"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="via_route" class="form-control" placeholder="Via Route "  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="to_place" class="form-control" placeholder="To Place  "  autofocus>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add Trip</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #END# Multi Column -->
                    </div>
                </div>
            </div>
        </section>
    </form>


@endsection


