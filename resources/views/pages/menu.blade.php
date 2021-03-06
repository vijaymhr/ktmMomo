
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
          @include('inc.messages')

          <h2 class="mb-4">Delicious Dumplings is our passion</h2>
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
                                    <div class="menu-img img">
                              
                                      <img style ="width: 100%" height ="232px" src="/storage/cover_images/{{$food->cover_image}}">
        
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
                                        <p><a href="/foods/{{$food->id}}" class="btn btn-primary">Order now</a></p>
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