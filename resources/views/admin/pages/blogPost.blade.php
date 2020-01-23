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
                            Blog Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                               


                            <li class="dropdown">

                                   
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">

                                        
                                    <li><a href="/blogPost/create">Add New Blogs</a></li>
                                   
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    @include('inc.messages')

                    @if(count($blogs) > 0 )
                        @foreach ($blogs as $blog)


                    <div class="body">

                        <div class="row">
                            <div class="col-md-4 col sm-4">
                                <img style ="width: 80%" height="50%" src="/storage/blogImages/{{$blog->blogImage}}">

                            </div>
                            <div class="col-md-8 col sm-8">

                    <h3>
                        <a href="/blogPost/{{$blog->id}}">{{$blog -> blogTitle}}
                        </a>
                    </h3>
                    <small>{{$blog->blogDesc}}</small>
                    <br>
                   


                    <small>Added on: {{$blog->created_at}}</small>
                        

                            </div>


                            
<div class="col-md-4 col sm-4">

    <a href="/blogPost/{{$blog->id}}/edit" class="btn btn-success waves-effect"> 
        <i class="material-icons">mode_edit</i>
        <span>Edit this Blog</span>
    </a>




    {!!Form::open(['action'=>['BlogController@destroy', $blog->id],'method'=>'POST', 'class'=>'pull-right'])!!}

{{Form::hidden('_method', 'DELETE')}}
{{Form::button('<i class="material-icons">delete_forever</i> <span>Delete this Blog</span>', ['type'=>'submit','class'=>'btn btn-warning waves-effect', 'onclick'=>'return validateForm(this)'])}}

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
                        @endforeach

                        <div class="header">{{$blogs->links()}}</div>
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