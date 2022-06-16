@extends('layout.master')


@section('content')

<div class="container" style="margin-top: 94px;">
    <div class="row justify-content-center">
        <div class="col-md-6">

            {{-- @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif --}}

            <div class="card" style="border: 5px dashed #9bcaf2;box-shadow: 20px 18px 30px #787473;margin-left: 187px;}">
                <div class="card-header">
                    <h4>Edit Volunteer</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('volunteers') }}" method="POST"  enctype="multipart/form-data">
                           @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Volunteer Name</label>
                            <input type="text" name="name" value="{{$volEdit->volunteer_name}}" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Volunteer Email</label>
                            <input type="text" name="email" value="{{$volEdit->volunteer_email}}" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Volunteer Passowrd</label>
                            <input type="text" name="password" value="{{$volEdit->volunteer_password}}" class="form-control"required>
                        </div>
                     
                        <div class="form-group mb-3">
                            <label for="">Volunteer Image</label>
                            <input type="file" name="img" value="{{$volEdit->volunteer_img}}" class="form-control" required>
                        </div>




                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@show


@include('layout.nav')

