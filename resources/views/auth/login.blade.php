@extends('layout_login')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        @include('partials/errors')

                        <form class="form-horizontal" role="form" method="POST" action="{{url('auth/login')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input name="email" type="email" value="{{old('email')}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Contraseña</label>
                                <div class="col-md-6">
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                        Login
                                    </button>

                                    <a href="{{url('password/email')}}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
    <div class="row">
      <div class="col-md-offset-5 col-md-3">
        <div class="form-login">
          <h4>Login</h4>
          <div class="row">
            <div class="col-md-6">
              <input type="text" id="userName" class="form-control input-sm chat-input"
              placeholder="Ingrese su e-mail">
            </div>
          </div>
          <br>
          <div class="row">
            <input type="text" id="userPassword" class="form-control input-sm chat-input"
            placeholder="Ingrese su contraseña">
          </div>
          <br>
          <div class="wrapper">
            <span class="group-btn">
              <a href="#" class="btn btn-primary btn-md">Ingresar <i class="fa fa-sign-in"></i></a>
            </span>
          </div>
        </div>
      </div>
    </div>
    !-->

@endsection