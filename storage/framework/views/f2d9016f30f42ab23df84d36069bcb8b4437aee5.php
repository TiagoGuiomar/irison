<?php $__env->startSection('title', 'Registar'); ?>

<?php $__env->startSection('content'); ?>
	<!-- begin register -->
	<div class="register register-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(../assets/img/login-bg/login-bg-9.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title">IRIS <b>ON</b></h4>
				<p>
					As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="login login-with-news-feed">

		<div class="right-content">
			<!-- begin register-header -->
			<div class="login-header">
			<div class="brand">
                    <span class="logo"></span> IRIS <b>ON</b>
                    <small>responsive bootstrap 3 admin template</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
			<h1 class="register-header">Criar Conta</h1>
			<!-- end register-header -->
			<!-- begin register-content -->
			<div class="register-content">

				<form class="margin-bottom-0" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

					
					<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
						<label for="name" class="control-label">Nome<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input id="name" type="text" class="form-control form-control-lg" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nome " required autofocus>

								<?php if($errors->has('name')): ?>
	                                    <span class="help-block">
	                                        <strong><?php echo e($errors->first('name')); ?></strong>
	                                    </span>
	                                <?php endif; ?>

							</div>
						</div>
					</div>

					<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						<label for="email" class="control-label">E-mail <span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input placeholder="Email" id="email" type="email" class="form-control form-control-lg" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

							</div>
						</div>
					</div>

					<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
						<label for="password" class="control-label">Palavra-Passe <span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
							<input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Palavra-Passe" required>

								<?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>

							</div>
						</div>
					</div>

					<label for="password-confirm" class="control-label">Confirmar Palavra-Passe <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirmar Palavra-Passe" required>
						</div>
					</div>
					
					<div class="checkbox checkbox-css m-b-30">
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="agreement_checkbox" value="">
							<label for="agreement_checkbox">
								Li e aceito os  <a href="javascript:;" class="text-success">Termos de Utilização</a>.
							</label>
						</div>
					</div>
					<div class="register-buttons">
						<button type="submit" class="btn btn-success btn-block btn-lg">Criar Conta</button>
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Já é membro? Clique <a href="/login" class="text-success">aqui</a> para fazer login.
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>