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
                            Edit Food Items
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/foods/{{$food->id}}"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['FoodsController@update', $food->id], 'method'=> 'POST']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('foodTitle', 'Food Name')}}
                            {{Form::text('foodTitle',$food->foodTitle,['class'=>'form-control', 'placeholder'=>'Food Name'])}}

                        </div>
                    </div>
                                    </div>


                                    <div class="col-sm-4">
                                            <div class="form-group">
                        
                                                <div class="form-line">
                                                    
                                                    {{Form::label('price', 'Price')}}
                                                    {{Form::text('price',$food->price,['class'=>'form-control', 'placeholder'=>'Price - Eg.10.0'])}}
                        
                                                </div>
                                            </div>
                                                            </div>

                            </div><!--clearfix close div for col-sm-4-->

                            <div class="form-group">
                        
                                    <div class="form-line">
                                        
                                        {{Form::label('foodDesc', 'Food Description')}}
                                        {{Form::textarea('foodDesc',$food->foodDesc,['class'=>'form-control', 'placeholder'=>'Food Description'])}}
            
                                    </div>
                                </div>

                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Add Food</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
