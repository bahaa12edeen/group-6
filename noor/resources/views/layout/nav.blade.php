<style>
    *{
        font-family: "Nunito", sans-serif !important;
        letter-spacing: 1px;
    }

    i, h4 {
        font-family: "Font Awesome 6 Free"!important;
    }

    .fab{
        font-family: "Font Awesome 6 Brands"!important;
    }

    nav a{
        color: white !important;
        font-family: "cursive !important";
        font-size: 19px;
        font-weight: 500;
    }

    .dropdown-item{
        color: black !important;
    }
</style>

<div class="container-fluid bg-light position-relative shadow" style="background-color: #054569 !important;">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5" style="background-color: #054569 !important; ">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <img width="120px" style="width: 120px;" src="{{ asset('img/logo/a1.png') }}" alt="description of myimage">
            <!-- <i class="fa-solid fa-eye"></i>
            <span class="text-primary">nOOr</span> -->
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{ url('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('ask') }}" class="nav-item nav-link active">Asks</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">services</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ url('book') }}" class="dropdown-item" style="color: black;">Podcast Book</a>
                        <a href="{{ url('index') }}" class="dropdown-item" style="color: black;">Blog</a>
                        {{-- <a href="./team.html" class="dropdown-item">toolss</a> --}}

                    </div>
                </div>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ url('registration') }}" class="btn btn-primary px-4">Join Us</a>
        </div>
    </nav>
</div>
<script src="https://kit.fontawesome.com/aca8d5a1fa.js" crossorigin="anonymous"></script>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}