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
                            Edit Blog Post
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/blogPost/"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['BlogController@update', $blog->id], 'method'=> 'POST', 'enctype'=>'multipart/form-data']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('blogTItle', 'Blog Title')}}
                            {{Form::text('blogTitle',$blog->blogTitle,['class'=>'form-control', 'placeholder'=>'Blog Title'])}}

                        </div>
                    </div>
                                    </div>


                                    



                                                            

                            </div><!--clearfix close div for col-sm-4-->

                            <div class="form-group">
                        
                                    <div class="form-line">
                                        
                                        {{Form::label('blogDesc', 'Blog Description')}}
                                        {{Form::textarea('blogDesc',$blog->blogDesc,['class'=>'form-control', 'placeholder'=>'blog Description'])}}
            
                                    </div>
                                </div>


                                <div class="form-group">

                                    {{Form::label('blogImage', 'Blog Image')}}

                                    {{Form::file(('blogImage'))}}
                                </div>


                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Update the Blog</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
