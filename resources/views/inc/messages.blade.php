@if(count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

            {{$error}}

        </div>
    @endforeach

@endif


@if(session ('success'))
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{session('success')}}
        </div>

@endif


@if(session ('error'))
        <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{session('error')}}
        </div>

@endif