@extends('layout.parent')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid" style="margin-top: 22px;">
            <section class="p-t-20">
                @foreach($announcement['admin'] as $admins)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><small><b>{{$admins->first_name}}</b></small></h4>
                                <h5 class="card-subtitle mb-2 text-muted"><small>{{$admins->first_name}}</small></h5>
                                <h5 class="card-subtitle mb-2 text-muted"><small>{{$admins->post_date}}</small></h5>
                                <hr>
                                <h4 class="card-title"><small>{{$admins->title}}</small></h4>
                                <br>
                                <p class="card-text" style="text-align: justify;">
                                    {{$admins->body}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
                @endforeach
                @foreach($announcement['principal'] as $principals)
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><small><b>{{$principals->first_name}}</b></small></h4>
                                <h5 class="card-subtitle mb-2 text-muted"><small>{{$principals->first_name}}</small></h5>
                                <h5 class="card-subtitle mb-2 text-muted"><small>{{$principals->post_date}}</small></h5>
                                <hr>
                                <h4 class="card-title"><small>{{$principals->title}}</small></h4>
                                <br>
                                <p class="card-text" style="text-align: justify;">
                                    {{$principals->body}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>  
                @endforeach
            </section>
        </div>
    </div>
</div>

</div>
@endsection
