
<?php $__env->startSection('container'); ?>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    
    <div class="flex justify-end">
        <a href="<?php echo e(route('admintambahtiket')); ?>" class="bg-accent py-4 px-2 my-1 rounded-tr-lg">
            Tambah
        </a>
    </div>
    <table class="w-full text-sm text-left text-slate-50">
        <thead class="text-xs text-darkblue uppercase bg-accent">
            <tr>
                <th scope="col" class="py-3 px-6">
                    id
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Tiket
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Deskripsi
                </th>
                <th scope="col" class="py-3 px-6">
                    Harga
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class=" border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 id_tiket">
                    <?php echo e($item->id); ?>

                </th>
                <td scope="row" class="py-4 px-6">
                    <?php echo e($item->nama_tiket); ?>

                </td>
                <td class="py-4 px-6">
                    <?php if($item->status_tiket): ?>
                        Aktif
                    <?php else: ?>
                        Sold
                    <?php endif; ?>

                </td>
                <td class="py-4 px-6">
                    <?php echo e($item->desc_tiket); ?>

                </td>
                <td class="py-4 px-6">
                    Rp<?php echo e(number_format($item->harga_tiket, 0, ',', '.')); ?>

                </td>
                <td class="py-4 px-6 text-right">
                    <label class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" <?php if($item->status_tiket): ?> checked <?php endif; ?>>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">ubah status</span>
                      </label>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
</div>
<?php $__env->startPush('meta'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.35/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
   $('input[type="checkbox"]').change(function(){
    let datastatus = $(this).prop('checked') == true ? 1 : 0;
    swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda tidak akan dapat mengembalikan ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, ubah status!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "<?php echo e(route('adminubahstatus')); ?>",
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                type: "POST",
                data: {
                    id: $(this).parent().parent().parent().find('th').text().trim(),
                    status: datastatus 
                },
                success: function (response) {
                    console.log(response);
                }
                })
           
        }
        else{
            $(this).prop('checked', !$(this).prop('checked'));
        }
    })
    
    
   });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/admin/tiket.blade.php ENDPATH**/ ?>