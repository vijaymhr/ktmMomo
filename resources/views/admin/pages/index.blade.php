@extends('/admin/layouts.app')

@section('content')


<div class="login-page bk-img" >
    <div class="form-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="text-center text-bold text-dark mt-4x">Admin Login 
                        <br> Kathmandu Mo:Mo House Ltd.</h1>
                    <div class="well row pt-2x pb-3x bk-light">
                        <div class="col-md-8 col-md-offset-2">
                            <form method="post">

                                <label for="" class="text-uppercase text-sm">Your Username </label>
                                <input type="text" placeholder="Username" name="username" class="form-control mb">

                                <label for="" class="text-uppercase text-sm">Password</label>
                                <input type="password" placeholder="Password" name="password" class="form-control mb">

                            

                                <button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection