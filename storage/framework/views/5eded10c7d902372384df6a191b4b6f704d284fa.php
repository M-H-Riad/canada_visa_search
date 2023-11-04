<?php $__env->startSection('content'); ?>
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create Basic Information</h5>

        <!-- Vertical Form -->
        <form method="POST" action="<?php echo e(route('information.store')); ?>" class="row g-3" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="col-6 form-group">
                <label for="first_name">First Name <span class="required">*</span></label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="last_name">Last Name <span class="required">*</span></label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="passport">Passport <span class="required">*</span></label>
                <input type="text" name="passport" id="passport" class="form-control" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="pass_exp_date">Passport Expiry Date</label>
                <input type="date" name="pass_exp_date" id="pass_exp_date" class="form-control">
            </div>
    
            <div class="col-6 form-group">
                <label for="lmia">LMIA</label>
                <input type="text" name="lmia" id="lmia" class="form-control">
            </div>
    
            <div class="col-6 form-group">
                <label for="lmia_active">LMIA Active</label>
                <input type="date" name="lmia_active" id="lmia_active" class="form-control">
            </div>
    
            <div class="col-6 form-group">
                <label for="document_id">Document ID</label>
                <input type="text" name="document_id" id="document_id" class="form-control">
            </div>
    
            <div class="col-6 form-group">
                <label for="document_valid">Document Valid</label>
                <input type="date" name="document_valid" id="document_valid" class="form-control">
            </div>
            
            <div class="col-6 float-right">
                <a href="<?php echo e(route('information.index')); ?>" class="btn btm-md btn-warning">Cancel</a>
                <button type="submit" class="btn btm-md btn-primary">Save</button>
            </div>
        </form>
        

      </div>
    </div>
</div>

<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/admin/info/create.blade.php ENDPATH**/ ?>