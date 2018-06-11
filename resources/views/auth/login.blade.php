@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login')

@section('content')
    <!-- begin login -->
    <div class="login login-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-11.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title">IRIS <b>ON</b></h4>
                <p>
                    Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">
            <!-- begin login-header -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> IRIS <b>ON</b>
                    <small>responsive bootstrap 3 admin template</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end login-header -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="{{route('login')}}" method="post" class="margin-bottom-0">
                    {{ csrf_field() }}

                    <div class="form-group m-b-15 {{ $errors->has('email') ? ' has-error' : ''  }}">
                        <input id="email" type="email" class="form-control form-control-lg" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group m-b-15 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control form-control-lg" placeholder="Palavra-Passe" name="password" required />

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="checkbox checkbox-css m-b-30">
                        <input type="checkbox" id="remember_me_checkbox" {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember_me_checkbox">
                            Manter a sessão iniciada
                        </label>
                    </div>

                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Iniciar Sessão</button>
                    </div>
                    <div class="m-t-20 m-b-10 p-b-10 text-inverse">
                        Não tem conta?  <a href="/registar" class="text-success">Crie uma!</a>
                    </div>

                    <div class="m-t-10 m-b-40 p-b-40 text-inverse">
                                    
                    <a class="text-success" href="{{ route('password.request') }}">
                    Esqueci-me da palavra-passe
                                </a>
                    </div>
                    <hr />
                    <p class="text-center text-grey-darker">
                    &copy; IRIS ON - All Rights Reserved  <?php echo date("Y"); ?>

                    </p>

                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end right-container -->
    </div>
    <!-- end login -->
@endsection
