
<?php $__env->startSection('container'); ?>
<form action="<?php echo e(route('adminubahstatus')); ?>" class="grid justify-center" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="nama_tiket" class="text-slate-100">Nama Tiket</label>
    <?php $__errorArgs = ['nama_tiket'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p class="text-red-500"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <input
        type="text"
        class="form-input rounded mb-2 max-w-sm"
        name="status"
    />
    <input
        type="text"
        class="form-input rounded mb-2 max-w-sm"
        name="id"
        value="1"
    />
    

    <button
        type="submit"
        class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4"
    >
        Upload
    </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/admin/tambahtiket.blade.php ENDPATH**/ ?>