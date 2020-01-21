
@extends('layouts.app')

@section('content')
        <section class="home-slider owl-carousel js-fullheight">
                <div class="slider-item js-fullheight" style="background-image: url(https://www.yummefy.com/uploads/1564996b55.jpg);">
                    <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
        
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Kathmandu Mo:Mo</span>
                        <h1 class="mb-4">Best Mo:Mo in Town</h1>
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
              <p><a href="menu" class="btn btn-primary" style="margin-top:20px;" > Discover More</a></p>

            </div>

  </section>


  

@endsection