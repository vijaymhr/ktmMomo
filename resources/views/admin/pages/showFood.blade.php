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
                            {{$food->foodTitle}}
                                </h2>


                                <div class="header-dropdown -r">
                                                <a href="/foods" class="btn bg-indigo waves-effect btn-xs">Go Back</a>

                                           
                                </div>
                      
                    </div>

                  
                            
                    <div class="body">

                            {{$food->foodTitle}}
                            {{$food->foodDesc}}
                            {{$food->price}}


<br>
                        
                     
                <small>Written on: {{$food->created_at}}</small>
            </div>

                <hr>
                <div class="header">
                <a href="/foods/{{$food->id}}/edit" class="btn btn-success waves-effect"> 
    <i class="material-icons">mode_edit</i>
    <span>Edit Food Item</span></a>
                </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection