<?php $__env->startSection('content'); ?>
 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Pengguna</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Data Pengguna</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Daftar</th>
                  </tr>
                </thead>
                <tbody>
             <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                    <td><?php echo e($users->id); ?></td>
                    <td><?php echo e($users->name); ?></td>
                    <td><?php echo e($users->email); ?></td>
                    <td><?php echo e($users->created_ad); ?></td>
                 </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\chemistryclass\resources\views/admin/user.blade.php ENDPATH**/ ?>