<?php $__env->startSection('content'); ?>
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Status Info</h5>

        <!-- Vertical Form -->
        <form method="POST" action="<?php echo e(route('status.update', $status->id)); ?>" class="row g-3" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="col-6 form-group">
                <label for="status_1">Status 1 <span class="required">*</span></label>
                <input type="text" name="status_1" id="status_1" class="form-control" value="<?php echo e($status->status_1); ?>" required>
            </div>
    
            <div class="col-6 form-group">
                <label for="status_2">Status 2</label>
                <input type="text" name="status_2" id="status_2" class="form-control" value="<?php echo e($status->status_1); ?>">
            </div>
    
            <div class="col-6 form-group">
                <label for="status_3">Status 3</label>
                <input type="text" name="status_3" id="status_3" class="form-control" value="<?php echo e($status->status_1); ?>">
            </div>
    
            <div class="col-6 form-group">
                <label for="status_4">Status 4</label>
                <input type="text" name="status_4" id="status_4" class="form-control" value="<?php echo e($status->status_1); ?>">
            </div>
    
            <div class="col-6 form-group">
                <label for="status_5">Status 5</label>
                <input type="text" name="status_5" id="status_5" class="form-control" value="<?php echo e($status->status_1); ?>">
            </div>
    
            <div class="col-6 form-group">
                <label for="status_6">Status 6</label>
                <input type="text" name="status_6" id="status_6" class="form-control" value="<?php echo e($status->status_1); ?>">
            </div>
    
            <div class="col-12 form-group">
                <label for="status_7">Status 7</label>
                <input type="text" name="status_7" id="status_7" class="form-control" value="<?php echo e($status->status_1); ?>">
            </div>
    
            
            <div class="col-6 float-right">
                <a href="<?php echo e(route('status.index')); ?>" class="btn btm-md btn-warning">Cancel</a>
                <button type="submit" class="btn btm-md btn-primary">Save</button>
            </div>
        </form>
        

      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/admin/status/edit.blade.php ENDPATH**/ ?>