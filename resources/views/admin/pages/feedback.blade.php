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
                                Feedbacks
                            </h2>
    
    
                                                    <ul class="header-dropdown m-r--5">
                                                            <li>
                                                            <a href="#"><i class="material-icons">arrow_back</i></a>
                                                                </li>
                                                       
                                                    </ul>
                                               
                          
                        </div>
    
                      
                                
                        <div class="body">
    
                                <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col">Contact Number</th>
                                            <th scope="col">Message</th>

    
                                          </tr>
                                        </thead>
                                        <tbody>
    
                                            @foreach ($feedbacks as $feedback)
                                                
                                          <tr>
                                          <td>{{$feedback->fname}}</td>
                                            <td>2</td>
                                             <td>3</td>
                                             <td>3</td>
                                          </tr>
                                          @endforeach

                                        </tbody>
                                      </table>
    
    
    <br>
                            
                         
                </div>
    
                    <hr>
                    <div class="header">
    
                    {{-- <a href="/foods/{{$food->id}}/edit" class="btn btn-success waves-effect"> 
                        <i class="material-icons">mode_edit</i>
                        <span>Edit Food Item</span>
                    </a> --}}
    
                   
                       
                    </div>
                    
                    
                    </div>
                </div>
            </div>
            <!-- #END# Headings -->
            
        </div>
    </section>

@endsection