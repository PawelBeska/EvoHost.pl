@extends('master')
@section('header')
    @include('layouts.global.header.header')
@stop
@section('body')
    <div class="page-top" style=' background-image:url("{{URL::asset('assets/home/images/header_bg_2.jpg')}}")'>
        <!--  MESSAGES ABOVE HEADER IMAGE -->
        <div class="message">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 columns">
                        <div class="message-intro">
                            <span class="message-line"></span>
                            <p>Logowanie</p>
                            <span class="message-line"></span>
                        </div>
                        <h1 style="">Zaloguj się</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--  END OF MESSAGES ABOVE HEADER IMAGE -->
    </div>

    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="bs-component">
                <div class="jumbotron ">
                    <div class="panel-body ">
                        {!! Form::open(['class'=>'form-horizontal','url'=>route('login')]) !!}

                        <div class="form-group ">
                            {!! Form::label('email','Email',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email',old('email'),['class'=>'form-control'. $errors->has('email') ? 'form-control is-invalid' : '' ]) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password','Hasło',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password',['class'=>'form-control'. $errors->has('password') ? 'form-control is-invalid' : '']) !!}
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                      <a href="{{ route('password.request') }}"> Zapomniałeś  hasła?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Zaloguj',['class'=>'btn btn-primary']) !!}
 </div>
                        </div>
                        {!! Form::close() !!}

                    </div>

                </div>

            </div>
        </div>
    </div>


</div>
@endsection
@section('footer')
    @include('layouts.global.footer.footer')
@stop
