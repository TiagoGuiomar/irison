
@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])
@section('title', 'Recuperar')

@section('content')
    <!-- begin login -->
    <div class="login login-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-11.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title">IRIS<b> ON</b></h4>
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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

               
                    <form class="margin-bottom-0" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group m-b-30{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control form-control-lg" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>
                            
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block btn-lg">
                                    Recuperar
                            </button>
                        </div>
                         <hr />
                    <p class="text-center text-grey-darker">
                    &copy; IRIS ON - All Rights Reserved  <?php echo date("Y"); ?>

                    </p>
                        </form>
                </div>
                    
        </div>
    
            
            <!-- end login-content -->
        </div>
        <!-- end right-container -->
    <!-- end login -->
@endsection

