@extends('admin.layout.master')
@section('content')



    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <form method="post" action="{{ route('admin.update_Staff',$staffs -> id ) }}">
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

                                        </div>

                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$staffs->name}}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                  
                                  
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number " value="{{$staffs->mobile_number}}"  maxlength="10" minlength="10" required autofocus>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number " value="{{$staffs->phone_number}}"  maxlength="10" minlength="10"  autofocus>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$staffs->address}}" required autofocus>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="licence_number" class="form-control" placeholder="Licence Number" value="{{$staffs->licence_number}}"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" name="licence_renewal" class="form-control" placeholder="Licence Renewal" value="{{$staffs->licence_renewal}}"  autofocus>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Update Staff</button>
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


