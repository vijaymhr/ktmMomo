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



                        
                    </div>
                     
                    <hr>
                <small>Written on: {{$food->created_at}}</small>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection