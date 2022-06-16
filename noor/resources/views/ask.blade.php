@extends('layout.master')

@section('title', 'Ask')

@section('content')
    {{-- @foreach ($result as $item)
        <ul>
            <li><b>Request Title: </b>{{ $item->req_title }}</li>
            <li><b>Request Text: </b>{{ $item->req_txt }}</li>
            <li><b>Volunteer: </b>{{ $item->volunteer_id }}</li>
            <li><b>User: </b>{{ $item->user_id }}</li>
            <li><b><a href="{{ url('/respond') }}">Replay</a></li>
        </ul>
    @endforeach --}}

    <div class="container-fluid" style="min-height: 124vh; background-image: url({{ asset('/files/ask.jpg') }});"><br>
        <div class="row">
            <div class="col-sm-6">
                @foreach ($result as $item)
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->req_title }}</h5>
                            <p class="card-text">{{ $item->req_txt }}</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            <b><a href="{{ url('/respond') }}">Replay</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
