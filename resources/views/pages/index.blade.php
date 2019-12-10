
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
                              <div class="menu-img img" style="background-image: url(https://cdn.pastemagazine.com/www/articles/Momos%20-%20Photo%20Credit%20-%20Sabrina%20Toppa.jpg);"></div>
                              <div class="text d-flex align-items-center">
                                                <div>
                                      <div class="d-flex">
                                        <div class="one-half">
                                          <h3>Momo</h3>
                                        </div>
                                        <div class="one-forth">
                                          <span class="price">$14</span>
                                        </div>
                                      </div>
                                      <p><span>Momo</span>, <span>Momo</span>, <span>Momo</span>, <span>Momo</span></p>
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
              <p><a href="menu" class="btn btn-dark " style="margin-top:20px;" > Discover More</a></p>

            </div>

  </section>


  

@endsection