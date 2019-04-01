@extends('admin.layout.master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>VEHICLE MASTER</h2>
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

                                    <th>Owner Name</th>
                                    <th>Vehicle Number</th>
                                    <th>Vehicle Name </th>
                                    <th>Vehicle Type</th>
                                    <th>Model Number</th>
                                    <th>Bus Type</th>
                                    <th>Seat</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                 <tbody>
                                @foreach($vehicles as $vehicle)
                                    <tr>
                                      

                                        <td>{{$vehicle->owner_name}}</td>
                                          <td>{{$vehicle->vehicle_number }}</td>
                                        <td>{{$vehicle->vehicle_name}}</td>
                                       <td>{{$vehicle->vehicle_type }}</td>
                                        <td>{{$vehicle->model_number}}</td>
                                        <td>{{$vehicle->bus_type}}</td>
                                        <td>{{$vehicle->seat}}</td>
                                        <td> <a href="{{route('admin.edit_Vehicle', $vehicle->id )}}"><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>
                                        <td>
                                            <form action="{{route('admin.delete_vehicle',$vehicle->id)}}" method="POST">
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