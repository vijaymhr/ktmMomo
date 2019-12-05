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
                                    <li><a href="#">Add Food Items</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>

                    @if(count($foods) >1 )
                        @foreach ($foods as $food)
                            
                    <div class="body">
                    <h3>{{$food -> foodTitle}}</h3>
                    <small>Added on: {{$food->created_at}}</small>
                        

                        
                    </div>
                        @endforeach
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