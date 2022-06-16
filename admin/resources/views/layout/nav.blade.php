

@yield('contant')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.js') }}" >




<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse " style="box-shadow: 0px 0px 70px -4px;  background-color: #cff4fc;">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="{{url('index')}} " class="list-group-item list-group-item-action py-2 ripple active" aria-current="true" style="    box-shadow: 0px 5px 11px 0px grey;">
            <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span>Main dashboard</span>
          </a>
          <br>
        <!-- Volunteers Table  -->

          <a href="{{url('volunteers')}}" class="list-group-item list-group-item-action py-2 ">
            <i class="fa-solid fa-handshake-angle "></i><span> Volunteers </span>
          </a>
          

          <!-- Uesr Table  -->

        <a href="{{url('users')}}" class="list-group-item list-group-item-action py-2 ripple"><i 
            class="fas fa-users fa-fw me-3"></i><span>Users </span>
        </a>

        <!--Book Table  -->

          <a href="{{url('book')}}" class="list-group-item list-group-item-action py-2 ripple"><i
             class="fa-solid fa-book-open-reader" ></i><span> BooK </span>
            </a>

            <!-- Uesr Table  -->



          <a href="{{url('blog')}}" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa-solid fa-blog"></i><span>   Blog</span>
          </a>


        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg  fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid" style="height:60px">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="{{url('https://cdn.discordapp.com/attachments/984432095038410752/984713996747808798/Untitled-2.png')}}" height="100" style="    margin-left: 33px;
          margin-top: -30px;" alt="nOOr Logo"
            loading="lazy" />
        
            <p style="    margin-left: 26px;margin-top: -35px;"><span style="color:#f8d576">Admin </span> <span style="color: #0753c8">dashboard </span> </p>
     
        </a>
        <!-- Search form -->

          
      </div></nav></header>

