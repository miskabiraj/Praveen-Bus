@extends('admin.layout.master')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>STAFF MASTER</h2>
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

                                    <th>NAME</th>
                                    <th>Mobile Number</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Licence Number</th>
                                    <th>Licence Renewal</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>

                                 <tbody>
                                @foreach($staffs as $staff)
                                    <tr>
                                        <td>{{$staff->name}}</td>
                                        <td>{{$staff->mobile_number}}</td>
                                        <td>{{$staff->phone_number}}</td>
                                        <td>{{$staff->address}}</td>
                                        <td>{{$staff->licence_number}}</td>
                                        <td>{{$staff->licence_renewal}}</td>
                                        <td> <a href="{{route('admin.edit_Staff',$staff->id)}}"><input type="button" name="edit" class="btn btn-primary" value="Edit"></a><br></td>
                                        <td>
                                            <form action="{{route('admin.delete_staff',$staff->id)}}" method="POST">
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