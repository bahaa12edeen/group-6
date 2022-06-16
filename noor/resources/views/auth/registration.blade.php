@extends('layout.master')

@section('content')
    <main class="login-form" style="color: white ;   font-size: 15px; ">
        <br>
        <br><br>
        <br>
        <video id="bgvid" playsinline autoplay muted loop style="position: absolute;
            

            top: 50%;
            left: 50%;
            min-width: 100%;
            width: 120% !important;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            transform: translateX(-57%) translateY(-50%);
            background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
            background-size: cover;
            transition: 1s opacity;">
            <source
                src="https://cdn.discordapp.com/attachments/978565358237646880/986532784698966086/istockphoto-1205271658-640_adpp_is.mp4"
                type="video/mp4">


        </video>
        <div class="cotainer ">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="card" style="background: rgb(0 0 0 / 51%);">
                        {{-- <div class="card-header">Register</div> --}}
                        <div class="card-body">

                            <form action="{{ route('register.post') }}" method="POST" enctype="@auth @endauth">
                                @csrf
                                <div class="form-group row">
                                    <label for="first_name" class="col-md-2 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-3">
                                        <input type="text" id="first_name" class="form-control" name="first_name" autofocus
                                            value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                        @endif

                                    </div>
                                    <br><br>
                                    <label for="last_name" class="col-md-2 col-form-label text-md-right">Last Name</label>
                                    <div class="col-md-3">
                                        <input type="text" id="last_name" class="form-control" name="last_name" autofocus
                                            value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-2 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-3">
                                        <input type="text" id="email_address" class="form-control" name="email" autofocus
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <label for="phone_number" class="col-md-2 col-form-label text-md-right">Phone
                                        Number</label>
                                    <div class="col-md-3">
                                        <input type="text" id="phone_number" class="form-control" name="phone_number"
                                            autofocus value="{{ old('phone_number') }}">
                                        @if ($errors->has('phone_number'))
                                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-md-2 col-form-label text-md-right">City</label>
                                    <div class="col-md-3">
                                        <input type="text" id="city" class="form-control" name="city" autofocus
                                            value="{{ old('city') }}">
                                        @if ($errors->has('city'))
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        @endif
                                    </div>
                                    <label for="address" class="col-md-2 col-form-label text-md-right">Address</label>
                                    <div class="col-md-3">
                                        <input type="text" id="address" class="form-control" name="address" autofocus
                                            value="{{ old('address') }}">
                                        @if ($errors->has('address'))
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">

                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-2 col-form-label text-md-right">Password</label>
                                    <div class="col-md-3">
                                        <input type="password" id="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <label for="password_confirmation"
                                        class="col-md-2 col-form-label text-md-right">Password Confirmation</label>
                                    <div class="col-md-3">
                                        <input type="password" id="password" class="form-control"
                                            name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-9">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </form>

                        </div>
                        <span>You have already account: <a href="{{ url('login') }}">login</a></span>

                    </div>
                </div>
            </div>
        </div>
<br>
<br><br><br>
<br>
    </main>
@endsection
