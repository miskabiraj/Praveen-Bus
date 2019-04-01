@extends('admin.layout.master')
@section('content')
<form method="post" action="{{ route('admin.tripDirect',[$trip,$id]) }}">
    {{csrf_field()}}
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row clearfix">
                    <div class="body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h3> Vehicle Number : &nbsp; {{$Trip->Vehicle->vehicle_number}} </h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h3> Bus Type : &nbsp; {{$Trip->Vehicle->bus_type}}</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h3> Driver Name : &nbsp;{{$Trip->Staff->name}} </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2> Total Seat : &nbsp; {{$Trip->Vehicle->seat}}  </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2> Boarding Seat : &nbsp; {{$TripEntries->sum('boarding_seat')}} </h2>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2>  Remainder Seat : &nbsp; {{ ($Trip->Vehicle->seat) - ($TripEntries->sum('boarding_seat'))}}   </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="block-header">
                        <h2>TRIP MASTER</h2>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2> {{ $trip }} Trip </h2>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="boarding_point" class="form-control" placeholder="Boarding Point" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="time" name="arr_time" class="form-control" placeholder="ARR Time "  required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="time" name="dep_time" class="form-control" placeholder="DEP Time "   autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="boarding_seat" class="form-control" min="0" max="($Trip->Vehicle->seat)" placeholder="Boarding Seat" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <button type="submit" class="btn btn-primary col-md-12 waves-effect">Add {{ $trip }} Trip</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>BORDING POINT</th>
                                    <th>ARR TIME </th>
                                    <th>DEP Time </th>
                                    <th>BORDING SEAT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($TripEntries as $trips)
                                <tr>
                                    <td>{{$trips->boarding_point}}</td>
                                    <td>{{$trips->arr_time}}</td>
                                    <td>{{$trips->dep_time}}</td>
                                    <td>{{$trips->boarding_seat}}</td>
                                    <td>
                                        <form action="{{route('admin.delete_TripDirection',$trips->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection