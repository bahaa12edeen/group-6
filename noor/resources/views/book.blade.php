@extends('layout.master')

@section('title', 'Aduio Book')

@section('content')

    {{-- @foreach ($data as $item) --}}
    {{-- <ul>
                    <li><b>Book Name: </b>{{ $item->book_name }}</li>                
                    <li><b>Book Author: </b>{{ $item->book_author }}</li>
                    <li><b>Book Description: </b>{{ $item->book_description }}</li>
                    <li><b>Book Image: </b> <img src="/files/{{ $item->book_image }}" width="250px" alt=""></li>
                    <li><b>Book File: </b> <a href="/files/{{ $item->book_file }}">Book</a></li>

                </ul> --}}
    {{-- @endforeach --}}

    <div style="margin-left: 20%">
        <video id="bgvid" playsinline autoplay muted loop style=" width:80%; height=50%;margin-top:3%;">
            <source src="/img/book_video.mp4" type="video/mp4">
        </video>
    </div>
    <h2 style="align-items: center; position:absolute; top:350px; left:500px; background:#f8f9fa66;">
        <div class="head" style="padding: 20px;">
            <div class="search" style="display: flex; display-direction: row; justify-content: space-between;">
                <form action="/book/seaech/" method="get">
                    {{-- <input type="text" name="search" id="search">
              <button type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
              </button> --}}
                    <div class="input-group rounded">

                        <input type="text" name="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" /> &nbsp;&nbsp;
                        <span class="input-group-text border-0" id="search-addon">
            <button type="submit" style="border: 0;">

                            <i class="fas fa-search"></i>
            </button>

                        </span>
                    </div>
            </div>
            </form>
            <div>
    </h2>




    <br><br>
    <h2 style="align-items: center; position:absolute; top:350px; left:800px;">
        <div class="head" style="padding: 20px;">
            <div class="request ml-1" class="text-info">
                <a href="{{ url('request') }}" class="btn btn-primary px-4">Request</a>
                <div>
    </h2>





    <div class="container">
        <div class="row ">
            @foreach ($data as $item)
                <div class="col-sm-4 col-md-4 col-sm-4">
                    <div class="card mb-5 shadow-sm">
                        <img style="height: 400px;" src="/files/{{ $item->book_image }}" class="img-fluid" />

                        <div class="card-body">
                            <div class="card-title">
                                <h3 style="text-align: center; font-size: 19px;">{{ $item->book_name }}</h3>
                                <h4 style="font-size: 17px;"><i
                                        class="fa-solid fa-feather-pointed"></i>{{ $item->book_author }}</h4>
                            </div>
                            <div class="card-text">
                                <p>
                                    {{ $item->book_description }}
                                </p>
                            </div>

                            <a href="/files/{{ $item->book_file }}">Book</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>


    {{--  --}}
    {{-- #bgvid {
    width: 100%;
    background-size: cover;
  } --}}


    {{-- ---------------------------------------------------gallary------------------------------------------------------------------------------ --}}
    {{--  --}}
    {{-- ------------------------------------------------------------------------------------------------- --}}
    <!--Footer-->
    <div class="modal-footer justify-content-center">


    </div>

    </div>
    <!--/.Content-->

    </div>
    </div>
    <!--Modal: Name-->

    {{-- <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.webp" alt="video"
          data-toggle="modal" data-target="#modal6"></a> --}}

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-4">

        <!--Modal: Name-->
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">

                <!--Content-->
                <div class="modal-content">

                    <!--Body-->
                    <div class="modal-body mb-0 p-0">

                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                    <!--Footer-->


                </div>

            </div>
            <!--/.Content-->

        </div>
    </div>
    <!--Modal: Name-->

    {{-- <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.webp" alt="video"
          data-toggle="modal" data-target="#modal4"></a> --}}

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GUEZCxBcM78"
                                    allowfullscreen></iframe>
                            </div>

                        </div>

                        <!--Footer-->


                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="{{ asset('/files/p1.jpeg') }}" alt="video" data-toggle="modal"
                    data-target="#modal2"></a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PjGkVCAo8Fw"
                                    allowfullscreen></iframe>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">


                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="{{ asset('/files/p2.jpeg') }}" alt="video" data-toggle="modal"
                    data-target="#modal5"></a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
                                    allowfullscreen></iframe>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer d-block d-md-flex justify-content-center">
                            <span class="mr-4">Spread the word!</span>
                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                            <!--Linkedin-->
                            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                data-dismiss="modal">Close</button>

                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="{{ asset('/files/p3.jpeg') }}" alt="video" data-toggle="modal"
                    data-target="#modal3"></a>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
@endsection
