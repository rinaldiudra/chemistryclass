<?php $__env->startSection('content'); ?>

      <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('users/images/parallax/home/chemistry.jpg') center center no-repeat; background-size: cover;"></div>

        <div class="section nobg full-screen nopadding nomargin">
          <div class="container vertical-middle divcenter clearfix">

            <div class="row center">
             <!--  <a href="index.html"><img src="<?php echo e(asset('users/images/logo-dark.png')); ?>" alt="Canvas Logo"></a> -->
            </div>

            <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
              <div class="panel-body" style="padding: 40px;">
                <form class="nobottommargin" method="POST" action="<?php echo e(route('register')); ?>" >
                  <h3><?php echo e(__('Register')); ?></h3>
                  <?php echo csrf_field(); ?>

                  <div class="col_full">
                    <label for="name"><?php echo e(__('Name')); ?></label>

                    
                    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" class="form-control not-dark<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" required autofocus>

                    <?php if($errors->has('name')): ?>
                    <span class="invalid-feedback" role="alert">
                      <strong>
                      <?php echo e($errors->first('name')); ?>

                      </strong>
                      </span>
                      <?php endif; ?>
                    </div>
                

                  <div class="col_full">
                    <label for="email"><?php echo e(__('E-Mail Address')); ?></label>

          
                    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control not-dark<?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" required>

                    <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" role="alert">
                      <strong>
                       <?php echo e($errors->first('email')); ?>

                      </strong>
                      </span>
                      <?php endif; ?>
                    </div>


                  <div class="col_full">
                    <label for="password"><?php echo e(__('Password')); ?></label>

                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                     <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                      <strong>
                        <?php echo e($errors->first('password')); ?>

                      </strong>
                      </span>
                      <?php endif; ?>
                    </div>

                  <div class="col_full">
                    <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>

                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                  <div class="col_full nobottommargin">
                    <button type="submit" class="button button-3d button-black nomargin"><?php echo e(__('Register')); ?>

                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chemistryclass\resources\views/auth/register.blade.php ENDPATH**/ ?>