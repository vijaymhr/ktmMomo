
@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('https://img.taste.com.au/mdKxKxoR/taste/2016/11/chicken-momos-with-tomato-achar-46671-1.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Our Menu</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="img img-1 mr-md-2">
      {{-- <img style ="width: 100%" height ="100%" src="/storage/aboutUs/{{}}"></div> --}}
      <img style ="width: 100%" height ="100%" src=""></div>



            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate fadeInUp ftco-animated">
      <div class="heading-section mb-4 my-5 my-md-0">
      
        <h2 class="mb-4">Confirm your order here</h2>
    </div>
  {{-- <p style="text-align:justify">
    djlfjad;fja;djfadf
  
  </p> --}}


  <form action="{{action('FeedbackController@store')}}" method="POST">
    {{csrf_field()}}
<div class="form-group">
@include('inc.messages')

<input type="text" name="fname" class="form-control" placeholder="Your Name" >
</div>
<div class="form-group">
<input type="text" name="email" class="form-control" placeholder="Your Email" >
</div>

<div class="form-group">
<input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" >
</div>
<div class="form-group">
<textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" >

</textarea>
</div>
<div class="form-group">
<input type="submit" value="Confirm Order" class="btn btn-primary py-3 px-5">

</div>
</form>




                </div>
        </div>
    </div>
</section>




@endsection