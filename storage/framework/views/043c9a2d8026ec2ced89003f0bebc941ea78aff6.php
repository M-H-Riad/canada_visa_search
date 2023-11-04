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
              <h5 class="card-title">Center List</h5>
              <div class="bt mt-2"><a href="<?php echo e(route('information.edit', $info->id)); ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</a></div>
            </div>

            <div class="col-12 row">
            <!-- Table with stripped rows -->
            <table class="table">
                <tbody>
                    <tr>
                        <th>First Name:</th>
                        <td><?php echo e($info->first_name); ?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?php echo e($info->last_name); ?></td>
                    </tr>
                    <tr>
                        <th>Passport:</th>
                        <td><?php echo e($info->passport); ?></td>
                    </tr>
                    <tr>
                        <th>Passport Expiry Date:</th>
                        <td><?php echo e($info->pass_exp_date ?? 'N/A'); ?></td>
                    </tr>
                    <tr>
                        <th>LMIA:</th>
                        <td><?php echo e($info->lmia ?? 'N/A'); ?></td>
                    </tr>
                    <tr>
                        <th>LMIA Active:</th>
                        <td><?php echo e($info->lmia_active ?? 'N/A'); ?></td>
                    </tr>
                    <tr>
                        <th>Document ID:</th>
                        <td><?php echo e($info->document_id ?? 'N/A'); ?></td>
                    </tr>
                    <tr>
                        <th>Document Valid:</th>
                        <td><?php echo e($info->document_valid ?? 'N/A'); ?></td>
                    </tr>
                    <tr>
                        <th class="text-center"><h3>Status Details</h3></th>
                        <td><div class="bt mt-2"><a href="<?php echo e(route('infostatus.edit', $info->id)); ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit Status</a></div></td>
                    </tr>
                    <tr>
                        <th colspan="2">
                          <div class="container">                        
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Status 1: <?php echo e($status->status_1); ?></h5>
                                    <p>Date: <?php echo e($info->status1_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status1_note ?? 'N/A'); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <h5>Status 2: <?php echo e($status->status_2); ?></h5>
                                    <p>Date: <?php echo e($info->status2_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status2_note ?? 'N/A'); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Status 3: <?php echo e($status->status_3); ?></h5>
                                    <p>Date: <?php echo e($info->status3_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status3_note ?? 'N/A'); ?></p>
                                </div>
                        
                                <div class="col-md-6">
                                    <h5>Status 4: <?php echo e($status->status_4); ?></h5>
                                    <p>Date: <?php echo e($info->status4_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status4_note ?? 'N/A'); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Status 5: <?php echo e($status->status_5); ?></h5>
                                    <p>Date: <?php echo e($info->status5_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status5_note ?? 'N/A'); ?></p>
                                </div>
                        
                                <div class="col-md-6">
                                    <h5>Status 6: <?php echo e($status->status_6); ?></h5>
                                    <p>Date: <?php echo e($info->status6_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status6_note ?? 'N/A'); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Status 7: <?php echo e($status->status_7); ?></h5>
                                    <p>Date: <?php echo e($info->status7_date ?? 'N/A'); ?></p>
                                    <p>Note: <?php echo e($info->status7_note ?? 'N/A'); ?></p>
                                </div>
                            </div>
                            <hr>
                        </th>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/admin/info/show.blade.php ENDPATH**/ ?>