

<?php $__env->startSection('title', 'AdminLTE'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="m-0 text-dark">Create User Account</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">User's Data</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo Form::open(array('route' => 'users.store','method'=>'POST')); ?>

                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">Name</label>

                          <div class="col-sm-10">
                          <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'InputName')); ?>

                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                          <div class="col-sm-10">
                          <?php echo Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'id' => 'InputEmail')); ?>

                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                          <div class="col-sm-10">
                          <?php echo Form::Password('password', array('placeholder' => 'Password','class' => 'form-control', 'id' => 'InputPassword')); ?>

                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputConfirmPassword3" class="col-sm-2 control-label">Confirm Password</label>

                          <div class="col-sm-10">
                          <?php echo Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'id' => 'InputConfirm')); ?>

                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputRole" class="col-sm-2 control-label">Role</label>

                          <div class="col-sm-10">
                            <?php echo Form::select('role', ['admin' => 'Admin', 'user' => 'User'], 'user', array('class' => 'form-control', 'id' => 'InputRole'));; ?>

                          </div>
                        </div>
                        <!-- <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember me
                              </label>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Create</button>
                      </div>
                      <!-- /.box-footer -->
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel tes\blog\resources\views/user/create.blade.php ENDPATH**/ ?>