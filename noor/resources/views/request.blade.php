@extends('layout.master')

@section('title', 'Request')

@section('content')
    {{-- <form action="{{ url('request/send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <input type="submit" value="submit">
    </form> --}}

    <!--Section: Contact v.2-->
    {{-- style="background-image: url('{{ asset('../img/listen to book.jpg')}}')" --}}
<style>

.form_bg {
    background: url("../img/book.jpeg");
    background-repeat:no-repeat; 
    background-size: cover;
    height: 400px;
    background-attachment: fixed;
    padding: 1%;

    
}




</style>


<section>
<div class="form_bg h-100">
    <!--Section heading-->
    <h1 class="h1-responsive font-weight-bold text-center my-4" >Request</h1>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 col-sm-5 rounded" style="font-size: 20px; color:rgb(255, 255, 255);; background-color:rgba(110 94 94 / 54%)"> you want a specific book but you can't find it? please request your order here. </p>

    <div class="row col-col-md-6 my-5">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5" >
            <form id="contact-form"  name="contact-form" action="" method="post" enctype="multipart/form-data" style="justify-content: center">
                @csrf
                @method('PUT')
                <!--Grid row-->
                <div class="row ml-5" >
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" style="color: white">Book Name</label>
                            <input type="text" id="req_title" name="req_title" class="form-control my-3">
                            
                            <label for="message" style="color: white">Your request</label>
                            <textarea type="text" id="req_txt" name="req_txt" rows="2" class="form-control md-textarea"></textarea>
                        </div>
           <div class="text-center text-md-left mt-3">
                <a class="btn btn-primary"  onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
                    </div>
                </div>
        <input type="text" name="user_id" value="user_id" disabled style="display: none;">


            </form>
        </div>
    </div>
</div>
@endsection