
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


  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
          <h2 class="mb-4">Delicious Dumplings is our passion</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center fadeInUp ftco-animated">
          <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-cake"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Birthday Party</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center fadeInUp ftco-animated">
          <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-meeting"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Business Meetings</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center fadeInUp ftco-animated">
          <div class="media block-6 services d-block">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-tray"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Wedding Party</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>



      <section class="ftco-section">
      <div class="container">

      <div class="ftco-search">
                  <div class="row">
            <div class="col-md-12 tab-wrap">  
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                    <div class="row no-gutters d-flex align-items-stretch">
                             
                        @foreach ($foods as $food)
                      <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                  <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                <div class="menu-img img" style="background-image: url(https://img.taste.com.au/mdKxKxoR/taste/2016/11/chicken-momos-with-tomato-achar-46671-1.jpeg);"></div>
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
                                        <p><a href="#" class="btn btn-primary">Order now</a></p>
                                    </div>
                                </div>
                              </div>
                              </div>

                              @endforeach

                             
                              
                          </div>

                </div>

                              </div>
                              </div>
                          </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
  </section>
@endsection