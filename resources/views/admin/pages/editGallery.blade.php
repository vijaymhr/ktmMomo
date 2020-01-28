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
                            Edit Photo Gallery
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/foodGallery"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['GalleryController@update', $gallery->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('imageTitle', 'Image Title')}}
                            {{Form::text('imageTitle',$gallery->imageTitle,['class'=>'form-control', 'placeholder'=>'Image Title'])}}

                        </div>
                    </div>
                                    </div>





                                                            

                            </div><!--clearfix close div for col-sm-4-->



                                <div class="form-group">

                                    {{Form::label('photo', 'Browse Pictures')}}

                                    {{Form::file(('photo'))}}
                                </div>


                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Update Image</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
