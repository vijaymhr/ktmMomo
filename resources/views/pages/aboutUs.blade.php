@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('https://resources.stuff.co.nz/content/dam/images/1/x/6/t/2/i/image.related.StuffLandscapeSixteenByNine.1420x800.1x6jh5.png/1569818371468.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
              <h2 class="mb-4"> Authentic Nepalese Dumpling </h2>
            </div>
          </div>
          @foreach ($abouts as $about)

          <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center fadeInUp ftco-animated">
              <div class="media block-6 services d-block">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-cake"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Our Mission </h3>
                <p style="text-align:justify"> {{$about->mission}}</p>
                </div>
              </div>      
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center fadeInUp ftco-animated">
              <div class="media block-6 services d-block">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-meeting"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Our Vision </h3>
                  <p style="text-align:justify">
                    {{$about->vision}}
                  </p>
                </div>
              </div>    
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center fadeInUp ftco-animated">
              <div class="media block-6 services d-block">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-tray"></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">We love our momo</h3>
                <p style="text-align:justify">{{$about->desc1}}</p>
                </div>
              </div>      
            </div>
          </div>
          @endforeach

        </div>
      </section>
    

      <section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2">
              <img style ="width: 100%" height ="100%" src="/storage/aboutUs/{{$about->aboutImage}}"></div>
            


					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate fadeInUp ftco-animated">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          
	            <h2 class="mb-4">Kathmandu MO:MO</h2>
            </div>
          <p style="text-align:justify">{{$about->desc2}}
          
          </p>
						</div>
				</div>
			</div>
		</section>





@endsection