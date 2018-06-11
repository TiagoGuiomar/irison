<?php $__env->startSection('title', 'Recuperar'); ?>

<?php $__env->startSection('content'); ?>
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
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

               
                    <form class="margin-bottom-0" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group m-b-30<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <input id="email" type="email" class="form-control form-control-lg" placeholder="E-mail" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                            
                            <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>