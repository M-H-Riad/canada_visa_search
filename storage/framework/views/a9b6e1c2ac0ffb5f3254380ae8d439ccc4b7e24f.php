

<?php $__env->startSection('content'); ?>
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Update Status</h5>

        <!-- Vertical Form -->
        <form method="POST" action="<?php echo e(route('infostatus.update', $info->id)); ?>" class="row g-3" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="col-6 form-group">
                <label for="status1_date">Status 1 Date</label>
                <input type="date" name="status1_date" id="status1_date" class="form-control" value="<?php echo e($info->status1_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status1_note">Status 1 Note</label>
                <textarea name="status1_note" id="status1_note" class="form-control"><?php echo e($info->status1_note); ?></textarea>
            </div>
    
            <div class="col-6 form-group">
                <label for="status2_date">Status 2 Date</label>
                <input type="date" name="status2_date" id="status2_date" class="form-control" value="<?php echo e($info->status2_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status2_note">Status 2 Note</label>
                <textarea name="status2_note" id="status2_note" class="form-control"><?php echo e($info->status2_note); ?></textarea>
            </div>
    
            <div class="col-6 form-group">
                <label for="status3_date">Status 3 Date</label>
                <input type="date" name="status3_date" id="status3_date" class="form-control" value="<?php echo e($info->status3_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status3_note">Status 3 Note</label>
                <textarea name="status3_note" id="status3_note" class="form-control"><?php echo e($info->status3_note); ?></textarea>
            </div>
    
            <div class="col-6 form-group">
                <label for="status4_date">Status 4 Date</label>
                <input type="date" name="status4_date" id="status4_date" class="form-control" value="<?php echo e($info->status4_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status4_note">Status 4 Note</label>
                <textarea name="status4_note" id="status4_note" class="form-control"><?php echo e($info->status4_note); ?></textarea>
            </div>
    
            <div class="col-6 form-group">
                <label for="status5_date">Status 5 Date</label>
                <input type="date" name="status5_date" id="status5_date" class="form-control" value="<?php echo e($info->status5_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status5_note">Status 5 Note</label>
                <textarea name="status5_note" id="status5_note" class="form-control"><?php echo e($info->status5_note); ?></textarea>
            </div>
    
            <div class="col-6 form-group">
                <label for="status6_date">Status 6 Date</label>
                <input type="date" name="status6_date" id="status6_date" class="form-control" value="<?php echo e($info->status6_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status6_note">Status 6 Note</label>
                <textarea name="status6_note" id="status6_note" class="form-control"><?php echo e($info->status6_note); ?></textarea>
            </div>
    
            <div class="col-6 form-group">
                <label for="status7_date">Status 7 Date</label>
                <input type="date" name="status7_date" id="status7_date" class="form-control" value="<?php echo e($info->status7_date); ?>">
            </div>
            <div class="col-6 form-group">
                <label for="status7_note">Status 7 Note</label>
                <textarea name="status7_note" id="status7_note" class="form-control"><?php echo e($info->status7_note); ?></textarea>
            </div>
    
            
            
            <div class="col-6 float-right">
                <a href="<?php echo e(route('information.index')); ?>" class="btn btm-md btn-warning">Cancel</a>
                <button type="submit" class="btn btm-md btn-primary">Save</button>
            </div>
        </form>
        

      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/admin/info/status.blade.php ENDPATH**/ ?>