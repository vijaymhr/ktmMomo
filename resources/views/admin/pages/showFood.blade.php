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


                                                <ul class="header-dropdown m-r--5">
                                                        <li>
                                                        <a href="/foods"><i class="material-icons">arrow_back</i></a>
                                                            </li>
                                                   
                                                </ul>
                                           
                      
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
                    <span>Edit Food Item</span>
                </a>

                {!!Form::open(['action'=>['FoodsController@destroy', $food->id],'method'=>'POST', 'class'=>'pull-right'])!!}

                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::button('<i class="material-icons">delete_forever</i> <span>Delete This Item</span>', ['type'=>'submit','class'=>'btn btn-warning waves-effect', 'onclick'=>'return validateForm()'])}}

                    {!! Form::close() !!}

                    <script>
                                  
                                   function validateForm() {
                                    event.preventDefault(); // prevent form submit
                                    var form = event.target.form; // storing the form
                                            swal({
                                                    title: "Are you sure?",
                                                    text: "You cannot recover the data once you deleted !",
                                                    type: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonColor: "#DD6B55",
                                                    confirmButtonText: "Yes, Delete the Item!",
                                                    cancelButtonText: "No, cancel please!",
                                                    closeOnConfirm: false,
                                                    closeOnCancel: true
                                                 },
                                   
                                    function(isConfirm){
                                    if (isConfirm) {
                                        form.submit();          // submitting the form when user press yes
                                    } else {
                                        swal("Cancelled", "Your data is safe", "error");
                                    }
                                    });
                                    }
                           </script>

                </div>
                
                
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection