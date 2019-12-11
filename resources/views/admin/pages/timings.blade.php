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
                                Opening Hours Detais
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                   
    
    
                                <li class="dropdown">
    
                                       
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
    
                                            
                                        <li><a href="#">Add Timings</a></li>
                                       
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                        @include('inc.messages')
    
                        @if(count($timings) > 0 )
                            @foreach ($timings as $timing)
    
    
                        <div class="body">
    
                        <h3>
                            <a href="/timings/{{$timing->id}}">{{$timing -> day}}
                            </a>
                        </h3>
                        <small>Time: {{$timing->time}}</small>
                        <br>

                        <small>Modified on: {{$timing->updated_at}}</small>

                            
    
                            
                        </div>
                            @endforeach
    
                        @else
    
                            <p> No Data Available. Please Add.</p>
                        @endif
                        
                    </div>
                </div>
            </div>
            <!-- #END# Headings -->
            
        </div>
    </section>
    

@endsection