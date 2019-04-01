



























        
                              
                                
                                
                                
                                   
                                      
                                       
                                        
                                        
                                                    <input type="text" name="boarding_point" class="form-control" placeholder="Boarding Point" required autofocus>
                                                    <input type="text" name="boarding_seat" class="form-control" placeholder="Boarding Seat" id="boarding_seat" required autofocus>
                                                    <input type="text" name="total_seat" class="form-control" placeholder="Total Seat" id="total_seat" autofocus>
                                                    <input type="time" name="arr_time" class="form-control" placeholder="ARR Time "  required autofocus>
                                                    <input type="time" name="dep_time" class="form-control" placeholder="DEP Time "   autofocus>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>
                                                <div class="form-line">
                                                <div class="form-line">
                                                <div class="form-line">
                                                <div class="form-line">
                                                <div class="form-line">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{ csrf_field() }}
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </form>
                                            <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add {{ $trip }} Trip</button>
                                            <div class="form-group">
                                            <div class="form-group">
                                            <div class="form-group">
                                            <div class="form-group">
                                            <div class="form-group">
                                            <form action="{{route('admin.delete_trip',$trips->id)}}" method="POST">
                                         Boarding Seat : &nbsp; {{$TripEntries->sum('boarding_seat')}}                                                                               
                                         Total Seat : &nbsp; {{$Trip->Vehicle->seat}}                                                                               
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </td>
                                        <div class="col-md-2">
                                        <div class="col-md-2">
                                        <div class="col-md-2">
                                        <div class="col-md-2">
                                        <div class="col-md-2">
                                        <div class="form-line">
                                        <td>
                                        <td>{{$trips->arr_time}}</td>
                                        <td>{{$trips->boarding_point}}</td>
                                        <td>{{$trips->boarding_seat}}</td>
                                        <td>{{$trips->dep_time}}</td>
                                        <td>{{$trips->total_seat}}</td>
                                    </div>
                                    </div>
                                    </div>
                                    </tr>
                                    <div class="form-group">
                                    <div class="row clearfix">
                                    <div class="row clearfix">
                                    <tr>
                                    {{ $trip }} Trip         
                                </div>
                                </h2>
                                </h2>
                                </h2>
                                </h2>
                                </tbody>
                                <div class="body">
                                <h2 >
                                <h2 >
                                <h2>
                                <h2>
                                <th>ACTION</th>
                                <th>ARR TIME </th>
                                <th>BORDING POINT</th>
                                <th>BORDING SEAT</th>
                                <th>DEP Time </th>
                                <th>TOTAL SEAT</th>
                                @endforeach
                                @foreach($TripEntries as $trips)
                             <tbody>
                            </div>
                            </thead>
                            </tr>
                            <div class="header">
                            <thead>
                            <tr>
                        </div>
                        </table>
                        <div class="card">
                        <table class="table table-striped">
                    <!-- #END# Multi Column -->
                    </div>
                    </div>
                    </div>  
                    </div>  
                    </div>  
                    <div class="body table-responsive">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>TRIP MASTER</h2> 
                   <div class="header">
                   <div class="header">
                   <div class="header">
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="block-header">
                <div class="card">
                <div class="card">
                <div class="card">
                <div class="card">
                <div class="row clearfix">
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-4">
            <div class="col-md-4">
            <div class="col-md-4">
            <div class="container-fluid">
            Remainder Seat : &nbsp; {{ ($Trip->Vehicle->seat) - ($TripEntries->sum('boarding_seat'))}}                                                                        
        </div>
        </div>
        </section>
        <div class="row clearfix">
        <div class="row clearfix">
        <section class="content">
        {{csrf_field()}}
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    </form>
    <form method="post" action="{{ route('admin.tripDirect',[$trip,$id]) }}">
    <section class="content">
</section>
<section class="content">
@endsection
@extends('admin.layout.master')
@section('content')