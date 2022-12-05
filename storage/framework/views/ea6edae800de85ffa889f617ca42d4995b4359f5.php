<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo $__env->yieldPushContent('meta'); ?>
</head>
<body>
<div
    class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue min-h-screen h-screen"
>
    <nav
        class="flex justify-between flex-row px-12 h-16 items-center bg-secondary"
    >
        <div class="logo ">
            <a href="/">
                <img src="<?php echo e(asset('/assets/LogoWhite.png')); ?> " alt="Logo ITFEST 2022" />
            </a>
        </div>
        <div class="flex flex-row">
            <a href="<?php echo e(route('halamanAdmin')); ?>" class="text-darkblue mx-2 px-2 border-x-2">upload drawing</a>
            <a href="<?php echo e(route('admintiket')); ?>" class="text-darkblue mx-2 ">tiket</a>
            <form action="<?php echo e(route('adminlogout')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <button type="submit" class="text-darkblue mx-2 px-2 border-x-2">Logout</button>
            </form>
        </div>
    </nav>
    <div class="p-5">
       <?php echo $__env->yieldContent('container'); ?>

    </div>
</div>
</body>
<?php echo $__env->yieldPushContent('scripts'); ?>
</html>
<?php /**PATH C:\laragon\www\itfest\resources\views/admin/template.blade.php ENDPATH**/ ?>