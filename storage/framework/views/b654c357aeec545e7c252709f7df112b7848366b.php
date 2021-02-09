

<?php $__env->startSection('title', 'AdminLTE'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark">Data User</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
<div class="row">
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Hover Data Table</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php 
        foreach ($data as $user) {?>
        <tr>
          <td><?= $user->name; ?></td>
          <td><?= $user->email; ?></td>
          <td>
            <button class="btn-primary">edit</button>
            <button class="btn-warning">delete</button>
          </td>
        </tr>
      <?php    
        }
      ?>
      
      </tbody>
      <!-- <tfoot>
      <tr>
        <th>Rendering engine</th>
        <th>Browser</th>
        <th>Platform(s)</th>
        <th>Engine version</th>
        <th>CSS grade</th>
      </tr>
      </tfoot> -->
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel tes\blog\resources\views/user/index.blade.php ENDPATH**/ ?>