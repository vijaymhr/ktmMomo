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
                            Orders Details
                        </h2>
                        <ul class="header-dropdown m-r--5">
                               


                           
                            
                        </ul>
                    </div>
                    @include('inc.messages')

                    @if(count($orders) > 0 )
                        @foreach ($orders as $order)


                    <div class="body">

                        <div class="row">
                            {{-- <div class="col-md-4 col sm-4">
                                <img style ="width: 80%" height="50%" src="/storage/cover_images/{{$food->cover_image}}">

                            </div> --}}
                            <div class="col-md-8 col sm-8">

                    <h3>
                        <a href="/orders/{{$order->id}}">{{$order -> cMobile}}
                        </a>
                    </h3>
                    <small>Full Name: {{$order->cName}}</small>
                    <br>
                    <small>Email: {{$order->cEmail}}</small>
                    <br>
                    <small>Mobile: {{$order->cMobile}}</small>

                    <br>
                    <small>Quantity: {{$order->cQuantity}}</small>
                    <br>

<br>
                    <small>Added on: {{$order->created_at}}</small>
                        

                            </div>


                          


                    </div>
                    </div>
                        @endforeach

                        <div class="header">{{$orders->links()}}</div>
                    @else

                        <p> No Orders Available. Please Try Placing some Orders.</p>
                    @endif
                    
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        
    </div>
</section>

@endsection