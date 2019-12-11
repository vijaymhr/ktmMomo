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
                            Edit Opening Hours
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                <a href="/timings/{{$timing->id}}"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => ['TimingController@update', $timing->id], 'method'=> 'POST']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('day', 'Day')}}
                            {{Form::text('day',$timing->day,['class'=>'form-control', 'placeholder'=>'Day: e.g. Sunday'])}}

                        </div>
                    </div>
                                    </div>


                                    <div class="col-sm-4">
                                            <div class="form-group">
                        
                                                <div class="form-line">
                                                    
                                                    {{Form::label('time', 'Time')}}
                                                    {{Form::text('time',$timing->time,['class'=>'form-control', 'placeholder'=>'Time: 9:00 - 17:00'])}}
                        
                                                </div>
                                            </div>
                                                            </div>

                            </div><!--clearfix close div for col-sm-4-->

                            

                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::button('<i class="material-icons">save</i> <span>Update Opening Hours</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                        {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
