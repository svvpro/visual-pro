@extends('layout.base')
@section('content')
    <div class="container fullheight">
        <div class="row vcenter">
            <div class="col-md-12 about animated bounceInDown ">
                {!! $service->content !!}
            </div>
        </div>
    </div>
@stop