@extends('admin.layout.master')
@section('content')


    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   <form method="post" action="{{ route('admin.add_Staff') }}">
        {{csrf_field()}}

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>STAFF MASTER</h2>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Add Staff
                                </h2>

                                <div class="body">
                                    <div class="row clearfix">

                                        </div>

                                    <div class="row clearfix">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                  
                                  
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number " maxlength="10" minlength="10" required autofocus>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number "  maxlength="10" minlength="10"  autofocus>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="address" class="form-control" placeholder="Address" required autofocus>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="licence_number" class="form-control" placeholder="Licence Number"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" name="licence_renewal" class="form-control" placeholder="Licence Renewal"  autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add Staff</button>
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


