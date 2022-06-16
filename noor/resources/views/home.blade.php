@extends('layout.master')

@section('title', 'Aduio Book')

@section('content')
<style>
    .butt{
        padding: 15px 50px;
        border-radius:15px;
        background-color: #17a2b8;.
        color: #ffffff !important;
    }
</style>
    <div style="height: 90vh; background-image: url('https://post.healthline.com/wp-content/uploads/2019/10/Female_Blind_1200x628-facebook.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; position: relative;">
        <div style="background-color: rgba(0, 0, 0, 0.349); position: absolute; top: 0; bottom: 0; right:0; left: 0;">
            <div style="width: 50%; margin: 60px; margin-top: 100px;">
                <h4 class="text-white mb-4 mt-5 mt-lg-0" style="letter-spacing: 4px;">Noor Website for Blind People</h4>
                <h1 class="display-3 font-weight-bold text-white">Enjoy listening to books being read by human narrators</h1>
            </div>
        </div>
    </div>
    <!-- Header End -->



        <div style="display: flex; flex-direction:row; width: 85%; margin: 40px auto;">
            <div>
                <img src="https://images.squarespace-cdn.com/content/v1/5553b4b0e4b0bc7084971a20/1524955973299-PUODIB9UGQTRCIWVQNH1/445px-Helen_Keller_Century_Magazine_January_1905_page_454.jpg?format=750w" alt="">
            </div>
            <div  style="display: flex; flex-direction:row;">
                <div style="width:80%; margin:auto; margin-bottom:50px; height:93%; display: flex; flex-direction:column; justify-content: space-around;">
                    <div>
                        <h2 style="display: block; margin: 30px 0; text-align: center;">--Helen Keller--</h2>
                        <div style="margin: 30px 0;">
                            "Your success and happiness lies in you. Resolve to keep happy, and your joy and you shall form an invincible host against difficulties"
                        </div>
                    </div>
                    <div>
                        <h2 style="display: block; margin: 30px 0; text-align: center;">--Leonardo da Vinci--</h2>
                        <div style="margin: 30px 0;">
                            "An average human looks without seeing, listens without hearing, touches without feeling, eats without tasting, moves without physical awareness, inhales without awareness of odour or fragrance, and talks without thinking"
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <a href="{{ url('book') }}" class="butt" style="color: white;">Available Books</a>
                    </div>
                </div>
            </div>
        </div>
    {{--  --}}

        <!-- Facilities Start -->
        <div class="container-fluid pt-5" style="background-color: #17a2b8; margin-top: 100px;">
            <div class="container pb-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                            <i class="fa-solid fa-headphones-simple" style="font-size: 25px; color: #17a2b8;"></i>
                            <div class="pl-4">
                                <h4 style="font-size: 17px;">Podcast Book</h4>
                                <p class="m-0">Through this service, you can listen to recorded books and you can create a book registration request</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                            <i class="fa-solid fa-person-walking-with-cane" style="font-size: 25px; color: #17a2b8;"></i>
                            <div class="pl-4">
                                <h4 style="font-size: 17px;">Tools</h4>
                                <p class="m-0">
                                    Through this service, a request for tools for the blind is required
                                    <span style="color: #f8f9fa;">aaaaaaaa aaaaaa aaaaaaa aaaaaa aaaaaaaa</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                            <i class="fa-solid fa-van-shuttle" style="font-size: 25px; color: #17a2b8;"></i>
                            <div class="pl-4">
                                <h4 style="font-size: 17px;">Transportation</h4>
                                <p class="m-0">
                                    Through this service, safe transportation is provided anywhere and at any time
                                    <span style="color: #f8f9fa;">aaaaaaaa aaaaaa aaaaaaa</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities Start -->

    <div class="slidCont" style="width: 100%; margin: auto; overflow: hidden;">
        <div id="carouselExampleCaptions" style="margin-top: 100px;" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="overflow: visible;">
                <div class="carousel-item active">
                    <img src="https://www.dailypioneer.com/uploads/2021/story/images/big/do-different-types-of-blind-people-see-things-differently--2021-09-03.jpg"
                        alt="..." style="width:100%; max-height: 624.375px;">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://gdb.voanews.com/4B5B0413-B66C-4C90-8D97-5AFACA974E35_w1200_r1.jpg" alt="Chicago"
                        style="width:100%; max-height: 624.375px;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/photos/visually-impaired-man-in-earphones-listening-music-in-park-guide-dog-picture-id1176426150?k=20&m=1176426150&s=612x612&w=0&h=lfcVhNpV1NZi5NEOhIG18ncQS9w-O1xWIvF9Sza89IY="
                        alt="New york" style="width:100%; max-height: 624.375px;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev" style="border: 0; opacity: 0;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next" style="border: 0; opacity: 0;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{--  --}}

    <!-- Testimonial Start -->

    {{-- Slider --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
