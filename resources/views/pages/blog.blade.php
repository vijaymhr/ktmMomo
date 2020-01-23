@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://resources.stuff.co.nz/content/dam/images/1/x/6/t/2/i/image.related.StuffLandscapeSixteenByNine.1420x800.1x6jh5.png/1569818371468.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
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

          @foreach ($blogs as $blog)

                  <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                      <div class="menus d-sm-flex ftco-animate align-items-stretch">
                    <div class="menu-img img" style="background-image: url(/storage/blogImages/{{$blog->blogImage}});"></div>
                    <div class="text d-flex align-items-center">
                                      <div>
                            <div class="d-flex">
                              <div class="one-half">
                              <h3>{{$blog->blogTitle}}</h3>
                              </div>
                              <div class="one-forth">
                              </div>
                            </div>
                          <p><span>{{$blog->blogDesc}}</span></p>
                            <p><a href="#" class="btn btn-primary">View Blog</a></p>
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