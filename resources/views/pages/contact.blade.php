@extends('layout.base')
@section('content')
    <div class="container fullheight">
            <div class="row vcenter ">
                <div class="col-md-4 animated bounceInDown about">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ligula lacus, ultricies et velit a, iaculis elementum leo. Mauris tempor consectetur nunc sit amet eleifend. Proin ullamcorper nunc nulla, at varius justo rutrum a. Pellentesque ac mauris sit amet augue rhoncus congue et id mi. Phasellus sit amet ante sed mauris tristique dapibus. Vestibulum fermentum, orci eu vulputate blandit, leo dolor vestibulum quam, sed convallis eros lectus ut leo.
                </div>
                <div class="col-md-8 animated bounceInDown about">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    {!! Form::open(array('class' => 'form')) !!}

                    <div class="form-group">
                        {!! Form::label('Ваше имя') !!}
                        {!! Form::text('name', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Ваше имя')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Ваш E-mail') !!}
                        {!! Form::text('email', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Ваш e-mail')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Ваше сообщение') !!}
                        {!! Form::textarea('message', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Ваше сообщение')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Отправить сообщение!',
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
    </div>
@stop