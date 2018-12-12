<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Read a Book</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">Books</li>
                <li class="breadcrumb-item active">List Page</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List Book</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-0">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Buku</th>
                                                <th>No Halaman</th>
                                                <th>Gambar Per Halaman</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Buku</th>
                                                <th>No Halaman</th>
                                                <th>Gambar Per Halaman</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $__currentLoopData = $page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no+1); ?></td>
                                                <td><?php echo e($data->id_libraries); ?></td>
                                                <td><?php echo e($data->no_page); ?></td>
                                                <td><img style="width: 100px; height: 135
                                                px;" src='<?php echo e(asset('picture_page/'.$data->picture)); ?>'></td>
                                                <td>
                                                    <form method="POST" action="<?php echo e(route('books.destroy', $data->id)); ?>">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>