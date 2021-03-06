@extends('layout.master')

@section('title', 'Blog')

@section('content')

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>Fashion is our passion | Free responsive Fashion Blog template
    </title>
    <meta name="description" content="Download free amazing responsive Fashion Blog template." />
    <meta name="keywords" content="free, responsive, blog, fashion, web site, template" />
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsee.css') }}">
    <!-- CUSTOM STYLE -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/template-style.css') }}">
    <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/responsee.js') }}"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
</head>

<body class="size-1140" style="background-color:white; ">
    <!-- TOP NAV WITH LOGO -->
    <header>


    </header>

   <!-- MAIN SECTION -->
      <section id="home-section" class="line" style="margin-block-start: 48px;">
         <div class="margin">
            <!-- ARTICLES -->
            <div class="s-12 l-9">

               <!-- ARTICLE 1 -->
               <article class="post-1 line">
                  <!-- image -->
                     <div class="s-12 l-6 post-image">
                        <a href="{{ asset('post-1') }}">
                           <img src="{{ asset('img/post1.jpg') }}" alt="Fashion 1">
                        </a>
                     </div>
                     <!-- text -->
                     <div class="s-12 l-5 post-text">
                        <a href="{{ asset('post-1') }}">
                           <h2>Early Explorers</h2>
                        </a>least once each day.2 The need to access websites and mobile applications doesn???t stop when
                        it reaches Americans with disabilities. According to the American Community Survey,
                        </p>
                    </div>
                    <!-- date -->

                </article>

                <!-- ARTICLE 2 -->
                <article class="post-2 right-align line">
                    <!-- image -->
                    <div class="s-12 l-6 post-image">
                        <a href="{{ asset('post-2') }}">
                            <img src="{{ asset('img/post2.jpg') }}" alt="Fashion 2">
                        </a>
                    </div>
                    <!-- text -->
                    <div class="s-12 l-5 post-text " style="text-align:left; ">
                        <a href="{{ asset('post-2') }}">
                            <h2>Early Childhood Initiatives</h2>
                        </a>
                        <p>The National Federation of the Blind National Convention is the largest gathering of blind
                            people in the world.
                        </p>
                    </div>
                    <!-- date -->


                </article>

                <!-- ARTICLE 3 -->
                <article class="post-3 line">
                    <!-- image -->
                    <div class="s-12 l-6 post-image">
                        <a href="{{ asset('post-3') }}">
                            <img src="{{ asset('img/post3.jpg') }}" alt="Fashion 3" style="height:500px ;">
                        </a>
                    </div>
                    <!-- text -->
                    <div class="s-12 l-5 post-text">
                        <a href="{{ asset('post-3') }}">
                            <h2>NFB BELL?? Academy</h2>
                        </a>
                        <p>The NFB BELL Academy provides children with Braille and nonvisual skills instruction through
                            fun, hands-on learning activities.
                    </div>
                    <!-- date -->

                </article>

                <!-- ARTICLE 4 -->
                <article class="post-4 right-align line">
                    <!-- image -->
                    <div class="s-12 l-6 post-image">
                        <a href="{{ asset('post-4') }}">
                            <img src="{{ asset('img/post4.jpg') }}" alt="Fashion 4">
                        </a>
                    </div>
                    <!-- text -->
                    <div class="s-12 l-5 post-text" style="text-align:left;">
                        <a href="{{ asset('post-4') }}">
                            <h2>Blind</h2>
                        </a>
                        <p> Although the convention is open to all, our constitution states that only members of the NFB
                            have the right to participate in decision making when it comes to organizational policy. If
                            you are not already a member, joinam; est usus legentis in iis qui facit eorum claritatem.
                    </div>
                    <!-- date -->

                </article>

                <!-- ARTICLE 5 -->
                <!-- <article class="post-5 line"> -->
                <!-- text -->
                <!-- <div class="s-12 l-11 post-text">
                     <a href="post-5.html">
                        <h2>And again - it's totally free!</h2>
                     </a>
                     <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                  </div> -->
                <!-- date -->

                </article>
            </div>
            <!-- SIDEBAR -->
            <div class="s-12 l-3">
                <aside>
                    <!-- NEWS 1 -->
                    <img src="{{ asset('img/news1.jpg') }}" alt="News 1">
                    <div class="aside-block margin-bottom">
                        <h3>This is the first news on blog</h3>
                        <p>LThe National Federation of the Blind National Convention is the largest gathering of blind
                            people in the world. It is the premier event for training, support, and information for the
                            blind community. </p>
                    </div>
                    <!-- NEWS 2 -->
                    <img src="{{ asset('img/news2.jpg') }}" alt="News 2">
                    <div class="aside-block margin-bottom">
                        <h3>Second news on the blog</h3>
                        <p>The National Federation of the Blind National Convention is the largest gathering of blind
                            people in the world. It is the premier event for training, support, and information for the
                            blind community. .</p>
                    </div>
                    <!-- AD REGION -->

                </aside>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <style>

    </style>
</body>

</html>
@endsection
