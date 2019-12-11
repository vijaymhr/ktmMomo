<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="feedbackmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
            
        


          <div class="login-form">
              <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Have any questions?</h2>
              @include('inc.messages')

              <form action="{{action('FeedbackController@store')}}" method="POST">
                {{-- remove url from here, onsubmit""contact" --}}
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
        <input type="submit" value="Send Us" class="btn btn-primary py-3 px-5">

      </div>
    </form>
<hr>              
          </div>
             
          
      
      
      </div>
      
    </div>
  </div>
</div>