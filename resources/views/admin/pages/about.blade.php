@extends('/admin/layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        
        
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">

                           


                        <h2>
                           About Us
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                            <a href="#"><i class="material-icons">arrow_back</i></a>
                                </li>
                       
                    </ul>
                    </div>
                    @include('inc.messages')

                    @if(count($abouts) > 0 )
                        @foreach ($abouts as $about)


                    <div class="body">

                        <div class="row">
                            <div class="col-md-4 col sm-4">
                                <img style ="width: 80%" height="50%" src="/storage/aboutUs/{{$about->aboutImage}}">

                            </div>
                            
                            
                            <div class="col-md-8 col sm-8">
                    
                 {{Form::label('mission', 'Mission')}}

                   <small>
                    <br>

                        {{$about -> mission}}
                        
                   </small>
                   <br>
                   <br>
                   {{Form::label('vision', 'Vision')}}
                   <br>
                   <small>
                    {{$about -> vision}}
                    
               </small>
               <br>
               <br>
               {{Form::label('desc1', 'Description 1')}}
               <br>

               <small>
                {{$about -> desc1}}
                
           </small>
           <br>
           <br>
           {{Form::label('desc2', 'Description 2')}}
           <br>

           <small>
            {{$about -> desc2}}
            
       </small>
               
       <br>
       <br>

                    <small>Updated at: {{$about->updated_at}}</small>

                    
                    <br>
                   <br>
                   <br>
                   
                            </div>


<div class="col-md-4 col sm-4">

                                <a href="/about/{{$about->id}}/edit" class="btn btn-success waves-effect"> 
                                    <i class="material-icons">mode_edit</i>
                                    <span>Edit this Item</span>
                                </a>



                            </div>
                    </div>
                    
                    </div>
                    
                    <hr>
                        @endforeach

                    @else

                        <p> No Photos Available. Please Try adding pictures.</p>
                    @endif
                    
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection