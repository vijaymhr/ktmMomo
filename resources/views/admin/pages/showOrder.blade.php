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
                            {{$order->cName}} / {{$order->foodName}}
                                </h2>


                                                <ul class="header-dropdown m-r--5">
                                                        <li>
                                                        <a href="/orders"><i class="material-icons">arrow_back</i></a>
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
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Food Item</th>

                                        <th scope="col">Message</th>

                                      </tr>
                                    </thead>
                                    <tbody>

                                      <tr>
                                        <td>{{$order->cName}}</td>
                                        <td>{{$order->cEmail}}</td>
                                         <td>{{$order->cMobile}}</td>
                                         <td>{{$order->cQuantity}}</td>

                                         <td>{{$order->foodName}}</td>

                                         <td>{{$order->cMessage}}</td>
                                         
                                      </tr>

                                    </tbody>
                                  </table>


<br>
                        
                     
                

                <br>

            </div>
            <div class="col-md-3 col sm-3">

            <small >Updated on: {{$order->updated_at}}</small>
            </div>
                <hr>
                <div class="header">
                {{-- <a href="/foods/{{$food->id}}/edit" class="btn btn-success waves-effect">  --}}

                <a href="#" class="btn btn-success waves-effect"> 
                    <i class="material-icons">mode_edit</i>
                    <span>Confirm Order</span>
                </a>

                {!!Form::open(['action'=>['OrderAdminController@destroy', $order->id],'method'=>'POST', 'class'=>'pull-right'])!!}

                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::button('<i class="material-icons">delete_forever</i> <span>Delete This Item</span>', ['type'=>'submit','class'=>'btn btn-warning waves-effect', 'onclick'=>'return validateForm(this)'])}}

                    {!! Form::close() !!}

                    <script>
                                  
                                //    function validateForm() {
                                //     event.preventDefault(); // prevent form submit
                                //     var form = event.target.form; // storing the form
                                //     if (confirm("Are you sure want to delete this item?")) {
                                //         form.submit();          // submitting the form when user press yes
                                //     } else {
                                //         swal("Cancelled", "Your data is safe", "error");
                                //     }
                                    

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
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection