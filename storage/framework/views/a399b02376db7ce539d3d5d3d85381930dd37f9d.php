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
    /* display: none; */
  }
</style>
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="hgt">
                <h5 class="card-title">Basic Information List</h5>
              
              <div class="bt mt-2"><a href="<?php echo e(route('information.create')); ?>" class="btn btn-sm btn-primary">Create</a></div>
            </div>

            
            <hr>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Passport </th>
                    <th scope="col">Passport Expiry Date </th>
                    <th scope="col">LMIA</th>
                    <th scope="col">LMIA Active</th>
                    <th scope="col">Document ID</th>
                    <th scope="col">Document Validity</th>
                    <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$key); ?></td>
                        <td><?php echo e($info->last_name); ?></td>
                        <td><?php echo e($info->first_name); ?></td>
                        <td><?php echo e($info->passport); ?></td>
                        <td><?php echo e($info->pass_exp_date); ?></td>
                        <td><?php echo e($info->lmia); ?></td>
                        <td><?php echo e($info->lmia_active); ?></td>
                        <td><?php echo e($info->document_id); ?></td>
                        <td><?php echo e($info->document_valid); ?></td>
                        <td>
                            <a href="<?php echo e(route('information.show', $info->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="<?php echo e(route('information.edit', $info->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                            <form action="<?php echo e(route('information.destroy', $info->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this center?')"><i class="bi bi-trash"></i></button>
                            </form>
                            <a href="<?php echo e(route('infostatus.edit', $info->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Status</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
</section>

<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">

        function filter(){
            setTimeout(function() { 
                $('#search-form').submit();
            }, 100);
            
        }
    </script>
<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wamp64\www\personal\canada_visa_search\resources\views/admin/info/index.blade.php ENDPATH**/ ?>