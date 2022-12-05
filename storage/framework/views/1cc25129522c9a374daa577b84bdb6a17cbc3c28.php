
<?php $__env->startSection('container'); ?>
<form action="<?php echo e(route('uptiket')); ?>" class="grid justify-center" method="POST" enctype="multipart/form-data">
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
        name="nama_tiket"
    />
    <label for="desc" class="text-slate-100">Deskripsi</label>
    <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p class="text-red-500"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <textarea class="form-input rounded mb-2 max-w-sm" name="desc"></textarea>

    <label for="harga_tiket" class="text-slate-100">Harga Tiket</label>
    <?php $__errorArgs = ['harga_tiket'];
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
        type="number"
        class="form-input rounded mb-2 max-w-sm"
        name="harga_tiket"
    />

    <label class="text-slate-100" for="gambar">Gambar</label>
    <?php $__errorArgs = ['gambar'];
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
        class="block w-full text-lg text-gray-500 bg-gray-300 rounded cursor-pointer focus:outline-none"
        aria-describedby="file_input_help"
        name="gambar"
        accept="image/*"
        type="file"
    />
    <p
        class="mt-1 text-sm text-gray-500 dark:text-gray-300"
        id="file_input_help"
    >
        PNG atau JPG.
    </p>

    <button
        type="submit"
        class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4"
    >
        Tambah
    </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\itfest\resources\views/admin/tambahtiket.blade.php ENDPATH**/ ?>