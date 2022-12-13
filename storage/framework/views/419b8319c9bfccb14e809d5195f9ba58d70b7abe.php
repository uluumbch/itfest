<?php $__env->startSection('container'); ?>
    <section class="text-white mx-auto w-full text-center">
        Tambah Peserta Kontes
        <ul class="text-white  ">
            <li class="text-xl mx-auto text-center border border-secondarydarker my-2 max-w-md">
                <a href="admin/pesertasing">Singing Contest</a>
            </li>
            <li class="text-xl mx-auto text-center border border-secondarydarker my-2 max-w-md">
                <a href="">Drawing
                    Contest</a>
            </li>
            <li class="text-xl mx-auto text-center border border-secondarydarker my-2 max-w-md"><a href="">Cosplay
                    Contest</a>
            </li>
        </ul>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/uluumbch/code/itfest/resources/views/admin/index.blade.php ENDPATH**/ ?>