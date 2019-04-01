@extends('admin.layout.master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TRIP MASTER </h2>
            </div>
            <!-- Basic Table -->

            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>Date</th>
                                    <th>Vehicle No</th> 
                                    <th> Driver 1</th>
                                    <th>Driver 2</th>
                                    <th>Coach Attends </th>
                                    <th>Starting KM </th>
                                    <th>Ending KM </th>
                                    <th>Total KM </th>
                                    <th>From Place </th>
                                    <th>Via Route </th>
                                    <th>To Place  </th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($trips as $trip)
                                    <tr>
                                        <td>{{$trip->date}}</td>
                                        <td>{{$trip->Vehicle->vehicle_number }}</td>
                                        <td>{{$trip->Staff->name}}</td>
                                        <td>{{$trip->driver2_id}}</td>
                                        <td>{{$trip->coach_attends_id}}</td>
                                        <td>{{$trip->startKm}}</td>
                                        <td>{{$trip->endKm}}</td>
                                        <td>{{$trip->totalKm}}</td>
                                        <td>{{$trip->from_place}}</td>
                                        <td>{{$trip->via_route}}</td>
                                        <td>{{$trip->to_place}}</td>


                                        <td> <div class="c-dropdown dropdown">
                                                <button href="#" class="c-btn btn-success c-btn--info has-icon dropdown-toggle" id="dropdownMenuTable1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                    More <i class="feather icon-chevron-down"></i>
                                                </button>
                                                <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuTable1">
                                                    <form action="" method="POST">
                                                        {{ csrf_field() }}
                                                        <input class="btn btn-danger" type="hidden" name="_method" value="DELETE">
                                                        <a class="btn btn-info" href="{{url('admin/Trips/'.'onward',$trip->id)}}">Onward Trip</a>
                                                        <a class="btn btn-warning" href="{{url('admin/Trips/'.'return',$trip->id)}}" >Return Trip</a>
                                                    </form>
                                                </div> </td>

                                        <td> <a href="{{(route('admin.edit_trip',$trip->id))}}"><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>

                                        <td>
                                            <form action="{{route('admin.delete_trip',$trip->id)}}" method="POST">
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
            <!-- #END# Striped Rows -->
            <!-- Bordered Table -->

@endsection