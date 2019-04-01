@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <form method="post" action="{{ route('admin.update_Trip',$trips -> id ) }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
    @if(count($errors))
    <div class="alertalert-danger alert u-mb-medium">
        <span class="alert__icon">
          <i class="feather icon-info"></i>
        </span>
        <div class="alert__content">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        <button class="close" data-dismiss="alert" type="button">×</button>
    </div>
@endif

                    <h2>STAFF MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit Staff
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="date" class="form-control" value="{{$trips->date}}" required autofocus>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                           <select class="form-control show-tick" name="vehicle_no" >
                                                <option value="{{$trips->vehicle_id}}" >-- Select Vehicle No --</option>
                                                @foreach($vehicles as $vehicle)
                                                <option value="{{$vehicle->id}}" selected="{{$vehicle->vehicle_number}}" >{{$vehicle->vehicle_number}}</option>
                                                @endforeach

                                            </select>
                                        </div>


                                          <div class="col-sm-2">
                                            <select class="form-control show-tick" name="driver1" >
                                                <option value="{{$trips->driver1_id}}" >-- Select Driver 1 --</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}" selected="{{$staff->name}}" required >{{$staff->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="form-control show-tick" name="driver2" >
                                                <option value="{{$trips->driver2_id}}" >-- Select Driver 2 --</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}" selected="{{$staff->name}}" required >{{$staff->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="coach_attends" class="form-control" placeholder="Coach Attends"   value="{{$trips->coach_attends_id}}"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row clearfix">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="starting_km" class="form-control" min="0" placeholder="Starting KM "  value="{{$trips->startKm}}"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="ending_km" class="form-control" min="0"  placeholder="Ending KM "   value="{{$trips->endKm}}" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="total_km" class="form-control" value="{{$trips->totalKm}}" min="0" readonly autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="from_place" class="form-control" value="{{$trips->from_place}}"  placeholder="From Place"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="via_route" class="form-control" value="{{$trips->via_route}}" placeholder="Via Route " autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="to_place" class="form-control" value="{{$trips->to_place}}"  placeholder="To Place  " autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Update Trips</button>
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


