<footer class="ftco-footer ftco-bg-dark ftco-section" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">
                  Kathmandu Mo:Mo
                </h2>
                @foreach ($infos as $info)
                    
                 <p><span class="fa fa-location-arrow"></span>
                 <span class="text">Office | {{$info->adminAddress}}</span></p>
                 <p><span class="fa fa-map-marker"></span>
                  <span class="text">Shop | {{$info->shopAddress}}</span></p>
                <p><span class="fa fa-phone"></span>
                  <span class="text">  <a href="tel://{{$info->phone}}">{{$info->phone}}</a></span></p>
                <p><span class="fa fa-envelope"></span>
                  <span class="text"><a href="mailto:{{$info->email}}">{{$info->email}}</a></span></p>

                  @endforeach

              </div>
            </div>


            <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Instagram</h2>
     
                         <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                         <iframe src="//lightwidget.com/widgets/4059b251ff1c5ce1b588082670ce55e9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;">
                         </iframe>
     
                     </div>
                   </div>



            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Our Opening Hours</h2>
                <ul class="list-unstyled open-hours">
                  @foreach ($timings as $timing)
                      
                  <li class="d-flex"><span>{{$timing->day}}</span><span>{{$timing->time}}</span></li>
                 
                  @endforeach

                  
                </ul>
              </div>
            </div>
          



            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Like us on Facebook</h2>
          
                      <div class="fb-page"
               
                            data-href="https://www.facebook.com/kathmandumomonz/?__tn__=kC-R&eid=ARAy1G0lLo7iBtHmBCNdpz9hqkGhu9y2zkp4mAqqo_RlkpOSyshMwHVOtugAr-YrdLilksZvAiNgIAy0&hc_ref=ARQoc5cXlY2EtCMezMhn0pQj_IFvPdBqM4rrdpHh8cUh9teWSbrEvSMYFUJh3-SuPfc&fref=nf" 
                           >
                    
                      </div>
                    </div>            
                   </div>
   
                  </div>



                  <div class="row">
          <div class="col-md-12 text-center">

            <ul class="col-md-12 text-center ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
               <li class="ftco-animate"><a href="https://www.instagram.com/ktmmomonz/"><span class="icon-instagram"></span></a></li>
                </ul>


            <div class="col-md-12 text-center">
  
              <p>
                
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());
                    </script> All rights reserved |  
                    <a href="/" target="_blank">Kathmandu Mo:Mo House LTD.
                    </a>
    </p>
            </div>
          </div>
          </div></div></div>

</footer>
    
  
    