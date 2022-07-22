<?php $__env->startSection('content'); ?>

<section id="content">

      <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('users/images/parallax/home/1.jpg') center center no-repeat; background-size: cover;"></div>

        <div class="section nobg full-screen nopadding nomargin">
          <div class="container vertical-middle divcenter clearfix">

            <div class="row center">
              <a href="index.html"><img src="<?php echo e(asset('users/images/logo-dark.png')); ?>" alt="Canvas Logo"></a>
            </div>

            <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
              <div class="panel-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
                  <h3>Register</h3>

                  <div class="col_full">
                    <label for="login-form-username"><?php echo e(__('Name')); ?></label>

                    
                    <input type="text" id="name" name="login-form-username" value="<?php echo e(old('name')); ?>" class="form-control not-dark<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" required autofocus>

                    <?php if($errors->has('name')): ?>
                    <span class="invalid-feedback" role="alert">
                      <strong>
                        $errors->first('name') }}
                      </strong>
                      </span>
                      <?php endif; ?>
                    </div>
                

                  <div class="col_full">
                    <label for="email"><?php echo e(__('E-Mail Address')); ?></label>

          
                    <input type="email" id="email" name="login-form-username" value="<?php echo e(old('email')); ?>" class="form-control not-dark<?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" required>

                    <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" role="alert">
                      <strong>
                        $errors->first('email') }}
                      </strong>
                      </span>
                      <?php endif; ?>
                    </div>


                  <div class="col_full">
                    <label for="login-form-password"><?php echo e(__('Password')); ?></label>

                    <input type="password" id="login-form-password" name="login-form-password" value="<?php echo e(old('password')); ?>" class="form-control not-dark<?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" required>

                     <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                      <strong>
                        $errors->first('password') }}
                      </strong>
                      </span>
                      <?php endif; ?>
                    </div>

                  <div class="col_full">
                    <label for="login-form-password"><?php echo e(__('Confirm Password')); ?></label>
                    <input type="password" id="login-form-password" name="login-form-password" class="form-control not-dark" required>
                    </div>

                  <div class="col_full nobottommargin">
                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                    <a href="#" class="fright">Forgot Password?</a>
                  </div>
                </form>

                <div class="line line-sm"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chemistryclass\resources\views/register.blade.php ENDPATH**/ ?>