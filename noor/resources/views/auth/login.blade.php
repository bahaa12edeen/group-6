@extends('layout.master')

@section('content')
    <br>
    <br><br><br>
    <br>
    <main class="login-form" style="color: white ;   font-size: 18px; ">
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
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background: rgb(0 0 0 / 51%);">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            @if (session('message'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" autofocus
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                {{-- <input type="checkbox" name="remember"> Remember Me --}}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                                <a href=""></a>
                            </form>

                        </div>
                        <span>You don't have account: <a href="{{ url('registration') }}">register</a></span>

                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <br>
    </main>
@endsection
