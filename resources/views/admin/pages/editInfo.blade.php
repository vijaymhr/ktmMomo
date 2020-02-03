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
                            Edit Info
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/info"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['InfoController@update', $info->id], 'method'=> 'POST']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('adminAddress', 'Office Address')}}
                            {{Form::text('adminAddress',$info->adminAddress,['class'=>'form-control', 'placeholder'=>'Office Address'])}}

                        </div>
                    </div>
                                    </div>


                                    <div class="col-sm-4">
                                            <div class="form-group">
                        
                                                <div class="form-line">
                                                    
                                                    {{Form::label('shopAddress', 'Shop Address')}}
                                                    {{Form::text('shopAddress',$info->shopAddress,['class'=>'form-control', 'placeholder'=>'Shop Address'])}}
                        
                                                </div>
                                            </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                    <div class="form-group">
                                                
                                                                        <div class="form-line">
                                                                            
                                                                            {{Form::label('phone', 'Contact number')}}
                                                                            {{Form::text('phone',$info->phone,['class'=>'form-control', 'placeholder'=>'Contact number'])}}
                                                
                                                                        </div>
                                                                    </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                            <div class="form-group">
                                                                        
                                                                                                <div class="form-line">
                                                                                                    
                                                                                                    {{Form::label('email', 'Email Address')}}
                                                                                                    {{Form::text('email',$info->email,['class'=>'form-control', 'placeholder'=>'Email Address'])}}
                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                                            </div>
                            </div><!--clearfix close div for col-sm-4-->

                            

                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Update the Address</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
