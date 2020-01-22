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
                            Photo Gallery
                        </h2>
                        <ul class="header-dropdown m-r--5">
                               


                            <li class="dropdown">

                                   
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">

                                        
                                    <li><a href="/foodGallery/create">Add Photos</a></li>
                                   
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    @include('inc.messages')

                    @if(count($gallerys) > 0 )
                        @foreach ($gallerys as $gallery)


                    <div class="body">

                        <div class="row">
                            <div class="col-md-4 col sm-4">
                                <img style ="width: 80%" height="50%" src="/storage/photoGallery/{{$gallery->photo}}">



                                


                            </div>
                            
                            
                            <div class="col-md-8 col sm-8">

                    <h3>
                        {{$gallery -> imageTitle}}
                        
                    </h3>
                    <small>Added on: {{$gallery->created_at}}</small>

                    
                    <br>
                   <br>
                   <br>
                   
                            </div>


<div class="col-md-4 col sm-4">

                                <a href="/foodGallery/{{$gallery->id}}/edit" class="btn btn-success waves-effect"> 
                                    <i class="material-icons">mode_edit</i>
                                    <span>Edit this Item</span>
                                </a>




                                {!!Form::open(['action'=>['GalleryController@destroy', $gallery->id],'method'=>'POST', 'class'=>'pull-right'])!!}
        
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button('<i class="material-icons">delete_forever</i> <span>Delete This Item</span>', ['type'=>'submit','class'=>'btn btn-warning waves-effect', 'onclick'=>'return validateForm(this)'])}}
        
                            {!! Form::close() !!}
        
                            <script>
                                       
        
                                         function validateForm() {
                                           
                                            if ( confirm("Are you sure you wish to delete?") == false ) {
                                                return false ;
                                            } else {
                                                return true ;
                                            }                                }
        
                                   </script>
                            </div>
                    </div>
                    
                    </div>
                    
                    <hr>
                        @endforeach

                        <div class="header">{{$gallerys->links()}}</div>
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