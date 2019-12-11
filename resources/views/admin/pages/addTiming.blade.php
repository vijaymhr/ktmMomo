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
                            Add Timings 
                        </h2>
                        <ul class="header-dropdown m-r--5">
                                <li>
                                        <a href="/timings"><i class="material-icons">arrow_back</i></a>
                                    </li>
                           
                        </ul>
                    </div>

                    @include('inc.messages')

                            
                    <div class="body">

                            {!! Form::open(['action' => 'TimingController@store', 'method'=> 'POST']) !!}
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-line">
                            
                            {{Form::label('day', 'Day')}}
                            {{Form::text('day','',['class'=>'form-control', 'placeholder'=>'Day: e.g. Sunday'])}}

                        </div>
                    </div>
                                    </div>


                                    <div class="col-sm-4">
                                            <div class="form-group">
                        
                                                <div class="form-line">
                                                    
                                                    {{Form::label('time', 'Time')}}
                                                    {{Form::text('time','',['class'=>'form-control', 'placeholder'=>'Time: e.g. 9-17'])}}
                        
                                                </div>
                                            </div>
                                                            </div>

                            </div>

                                {{Form::button('<i class="material-icons">add</i> <span>Add Time</span>', ['type'=>'submit','class'=>'btn btn-success waves-effect'])}}

                                 {!! Form::close() !!}



                    </div>
                      
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection
