@extends('layouts.base')


@section('title')
<title>REGISTRO </title>

@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-3 ">


         </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:  30px;text-align: center;padding-bottom: 15px;">REGISTRO</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombres</label>

                             <div class="col-md-6" style="max-width: 100%;">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Ingrese sus nombres" required style="background-color: #f0f0f0;">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                             <div class="col-md-6" style="max-width: 100%;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Ingrese su email" required style="background-color: #f0f0f0;">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                             <div class="col-md-6" style="max-width: 100%;">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese su password" required style="background-color: #f0f0f0;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label" style="max-width: 100%;">Confirmar Password</label>

                             <div class="col-md-6" style="max-width: 100%;">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme su password" required style="background-color: #f0f0f0;">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8" style="max-width: 100%;">
                                <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" style="font-weight: bold;">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class="col-md-3 ">


         </div>
         
    </div>

@endsection
