
@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('https://img.taste.com.au/mdKxKxoR/taste/2016/11/chicken-momos-with-tomato-achar-46671-1.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Your Order</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Your Order <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-wrap-about">
    <div class="container">
    



            <div class="row">
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
              <div class="menus d-sm-flex ftco-animate align-items-stretch">
            <div class="menu-img img">
            
            <img style ="width: 100%" height="232px" src="/storage/cover_images/{{$food->cover_image}}">

            </div>
            <div class="text d-flex align-items-center">
                              <div>
                    <div class="d-flex">
                      <div class="one-half">
                        <h3>{{$food->foodTitle}}</h3>
                      </div>
                      <div class="one-forth">
                        <span class="price">${{$food->price}}</span>
                      </div>
                    </div>
                    <p><span>{{$food->foodDesc}}</span></p>

                </div>
            </div>
          </div>
          </div>

            </div>


            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate fadeInUp ftco-animated">
      <div class="heading-section mb-4 my-5 my-md-0">
      
        <h2 class="mb-4">Confirm your order here</h2>
    </div>
  

  <form action="{{action('OrderController@store')}}" method="POST">
    {{csrf_field()}}

    @include('inc.messages')


    <div class="form-group">
      <input type="text" name="foodName" class="form-control" value="{{$food->foodTitle}}" readonly >
      </div>


<div class="form-group">
<input type="text" name="cName" class="form-control" placeholder="Your Name" >
</div>

<div class="form-group">
<input type="text" name="cEmail" class="form-control" placeholder="Your Email" >
</div>

<div class="form-group">
<input type="tel" name="cMobile" class="form-control" placeholder="Mobile Number" >
</div>
<div class="form-group">
  <input type="number" name="cQuantity" class="form-control" placeholder="Quantity" min="1" max="5" >
  </div>
<div class="form-group">
<textarea name="cMessage" cols="30" rows="7" class="form-control" placeholder="Message" >

</textarea>
</div>



<div class="form-group">
<input type="submit" value="Confirm Order" class="btn btn-primary py-3 px-5">

</div>
</form>




                </div>
    </div>
</section>




@endsection