<?php $__env->startSection('content'); ?>
<style>
  .hgt{
    display: flex;
    justify-content: space-between;
  }
  .input{
    display: flex;
    justify-content: space-between;
  }
  .datatable-top {
    display: none;
  }
</style>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="hgt">
              <h5 class="card-title">Status List</h5>
              <div class="bt mt-2"><a href="<?php echo e(route('status.edit', $status->id)); ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</a></div>
            </div>

            <div class="col-12 row">
            <!-- Table with stripped rows -->
            <table class="table">
                <tbody>
                    <tr>
                        <th>Status 1:</th>
                        <td><?php echo e($status->status_1); ?></td>
                    </tr>
                    <tr>
                        <th>Status 2:</th>
                        <td><?php echo e($status->status_2); ?></td>
                    </tr>
                    <tr>
                        <th>Status 3:</th>
                        <td><?php echo e($status->status_3); ?></td>
                    </tr>
                    <tr>
                        <th>Status 4:</th>
                        <td><?php echo e($status->status_4); ?></td>
                    </tr>
                    <tr>
                        <th>Status 5:</th>
                        <td><?php echo e($status->status_5); ?></td>
                    </tr>
                    <tr>
                        <th>Status 6:</th>
                        <td><?php echo e($status->status_6); ?></td>
                    </tr>
                    <tr>
                        <th>Status 7:</th>
                        <td><?php echo e($status->status_7); ?></td>
                    </tr>
                    
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/admin/status/show.blade.php ENDPATH**/ ?>