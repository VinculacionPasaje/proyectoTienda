@extends('layouts.base')

@section('title')
<title>LOGIN </title>

@endsection

@section('contenido')

    <div class="row">
         <div class="col-md-3 ">


         </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size:  30px;text-align: center;padding-bottom: 15px;">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

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
                                <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese contraseña" required style="background-color: #f0f0f0;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6" style="max-width: 100%;text-align: right;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8" style="max-width: 100%;">
                                <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" style="font-weight: bold;">
                                    LOGIN
                                </button>

                               
                            </div>
                            <div class="col-md-6" style="max-width: 100%;text-align: center; padding-top: 15px;">
                             <span>¿Eres nuevo? </span><span style="font-weight:bold;color:#e65540;"> Registrate</span>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <div class="col-md-3">


         </div>


    </div>

@endsection
