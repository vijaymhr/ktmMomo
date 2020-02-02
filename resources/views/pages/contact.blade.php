@extends('layouts.app')

@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('https://resources.stuff.co.nz/content/dam/images/1/x/6/t/2/i/image.related.StuffLandscapeSixteenByNine.1420x800.1x6jh5.png/1569818371468.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>




  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="padding-top:119px; padding-bottom:119px">
        <div class="container">

                <div class="row d-flex contact-info">
                        <div class="col-md-12 mb-4">
                          <h2 class="h4 font-weight-bold">Contact Information</h2>
                        </div>
                        @foreach ($infos as $info)
                            
                        <div class="col-md-3 d-flex">
                            <div class="dbox">
                              <p><span><strong>Address</strong></span> <br>
                                {{$info->shopAddress}}</p>

                          </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="dbox">
                              <p><span><strong>Phone</strong></span> <br>
                                <a href="tel://{{$info->phone}}">{{$info->phone}}</a></p>
                          </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="dbox">
                              <p><span><strong>Email</strong></span> <a href="mailto:{{$info->email}}">{{$info->email}}</a></p>
                          </div>
                        </div>
                        @endforeach

                        <div class="col-md-3 d-flex">
                            <div class="dbox">
                              <p><span><strong>Website</strong></span> <a href="/">www.ktmmomohouse.com</a></p>
                          </div>
                        </div>
                      </div>

            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                    <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
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
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">

          </div>
        </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                   <!--The div element for the map -->
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.4847922475187!2d172.6316751154939!3d-43.53393537912564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318b06342bb7db%3A0xae23d47f810b094f!2sKathmandu%20MO%3A%20MO%20House!5e0!3m2!1sen!2snz!4v1580683760782!5m2!1sen!2snz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>


@endsection