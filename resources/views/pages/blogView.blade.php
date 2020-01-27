@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://resources.stuff.co.nz/content/dam/images/1/x/6/t/2/i/image.related.StuffLandscapeSixteenByNine.1420x800.1x6jh5.png/1569818371468.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread"> View Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog View <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<br>

  <section class="ftco-section ftco-wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="img img-1 mr-md-2">
      {{-- <img style ="width: 100%" height ="100%" src="/storage/aboutUs/{{}}"></div> --}}
      <img style ="width: 100%" height ="100%" src="/storage/blogImages/{{$blog->blogImage}}"></div>



            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate fadeInUp ftco-animated">
      <div class="heading-section mb-4 my-5 my-md-0">
      



      <h2 class="mb-4">{{$blog->blogTitle}}</h2>



      <p style="text-align:justify">
        {{$blog->blogDesc}}
      </p>

      <p style="text-align:justify">
        {{$blog->blogStory}}
      </p>
    </div>
  {{-- <p style="text-align:justify">
    djlfjad;fja;djfadf
  
  </p> --}}


 




                </div>
        </div>
    </div>
</section>




@endsection