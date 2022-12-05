<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Dashboard</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
<div
    class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue min-h-screen h-screen"
>
    <div class="p-5">
        
        <form action="<?php echo e(route('admin')); ?>" class="grid justify-center" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="username" class="text-slate-100">username</label>
            <?php $__errorArgs = ['username'];
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
                name="username"
            />
            <label for="password" class="text-slate-100">password</label>
            <?php $__errorArgs = ['password'];
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
                type="password"
                class="form-input rounded mb-2 max-w-sm"
                name="password"
            />
            <?php if(session('error')): ?>
            <p class="text-red-500"><?php echo e(session('error')); ?></p>        
            <?php endif; ?>

            <button
                type="submit"
                class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4"
            >
                login
            </button>
        </form>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\laragon\www\itfest\resources\views/admin/login.blade.php ENDPATH**/ ?>