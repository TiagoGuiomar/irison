@section('title', 'Registar')

@section('content')
    <!-- begin register -->
    <div class="register register-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-9.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>Color</b> Admin App</h4>
                <p>
                    As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
                </p>
            </div>
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">
            <!-- begin register-header -->
            <h1 class="register-header">
                Criar Conta
                <small>Create your Color Admin Account. It’s free and always will be.</small>
            </h1>
            <!-- end register-header -->
            <!-- begin register-content -->
            <div class="register-content">

                <form class="margin-bottom-0" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                    
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Nome<span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome " required autofocus>

                                @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-mail <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Palavra-Passe <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Palavra-Passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                    </div>

                    <label for="password-confirm" class="control-label">Confirmar Palavra-Passe <span class="text-danger">*</span></label>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Palavra-Passe" required>
                        </div>
                    </div>
                    
                    <div class="checkbox checkbox-css m-b-30">
                        <div class="checkbox checkbox-css m-b-30">
                            <input type="checkbox" id="agreement_checkbox" value="">
                            <label for="agreement_checkbox">
                                Li e aceito os  <a href="javascript:;">Termos de Utilização</a>.
                            </label>
                        </div>
                    </div>
                    <div class="register-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Criar Conta</button>
                    </div>
                    <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                        Já é membro? Clique <a href="/login">aqui</a> para fazer login.
                    </div>
                    <hr />
                    <p class="text-center text-grey-darker">
                        &copy; IRIS ON - All Rights Reserved  <?php echo date("Y"); ?>
                    </p>
                </form>
            </div>
            <!-- end register-content -->
        </div>
        <!-- end right-content -->
    </div>
    <!-- end register -->
@endsection
