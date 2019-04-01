@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <form method="post" action="{{route('admin.update_Vehicle', $vehicled->id ) }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>VEHICLE MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit Vehicle
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">

                                        </div>

                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="owner_name" class="form-control" placeholder="Owner Name" value="{{ $vehicled->owner_name }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                  
                                  
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="vehicle_number" class="form-control" placeholder="Vehicle Number" value="{{$vehicled->vehicle_number}}" required autofocus>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="vehicle_name" class="form-control" placeholder="Vehicle Name " value="{{$vehicled->vehicle_name}}"  autofocus>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                    
                                    <div class="row clearfix">
                                       <div class="col-md-3">
                                             <div class="form-group">
                                                  <div class="form-line">
                                                      <input type="text" name="vehicle_type" class="form-control" placeholder="Vehicle Type" value="{{$vehicled->vehicle_type}}" required autofocus>
                                                  </div>
                                              </div>
                                         </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="model_number" class="form-control" placeholder="Model Number" value="{{$vehicled->model_number}}"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                             <div class="form-group">
                                                  <div class="form-line">
                                                      <input type="text" name="bus_type" class="form-control" placeholder="Bus Type" value="{{$vehicled->bus_type}}" required  autofocus>
                                                  </div>
                                              </div>
                                         </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="seat" class="form-control" placeholder="Seat" value="{{$vehicled->seat}}" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Update Vehicle</button>
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


