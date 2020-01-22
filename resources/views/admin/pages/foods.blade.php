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
                            Food Items Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                               


                            <li class="dropdown">

                                   
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">

                                        
                                    <li><a href="/foods/create">Add Food Items</a></li>
                                   
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    @include('inc.messages')

                    @if(count($foods) > 0 )
                        @foreach ($foods as $food)


                    <div class="body">

                        <div class="row">
                            <div class="col-md-4 col sm-4">
                                <img style ="width: 80%" height="50%" src="/storage/cover_images/{{$food->cover_image}}">

                            </div>
                            <div class="col-md-8 col sm-8">

                    <h3>
                        <a href="/foods/{{$food->id}}">{{$food -> foodTitle}}
                        </a>
                    </h3>
                    <small>{{$food->foodDesc}}</small>
                    <br>
                    <small>NZ$ {{$food->price}}</small>
                    <br>


                    <small>Added on: {{$food->created_at}}</small>
                        

                            </div>
                    </div>
                    </div>
                        @endforeach

                        <div class="header">{{$foods->links()}}</div>
                    @else

                        <p> No Food Items Available. Please Add Food Items.</p>
                    @endif
                    
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection