<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Read a Book</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">Libraries</li>
                <li class="breadcrumb-item active">Edit Book</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Book</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('libraries.update', $edit->id)); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Judul</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="" name="judul" value="<?php echo e($edit->judul); ?>">
                                        <small class="form-control-feedback"> Nama atau Judul Buku. </small> </div>
                                </div>
                                            <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Karya</label>
                                                <input type="text" id="lastName" class="form-control form-control-danger" placeholder="" name="karya" value="<?php echo e($edit->karya); ?>">
                                            <small class="form-control-feedback"> Nama Pengarang. </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Penerbit</label>
                                        <input type="text" id="lastName" class="form-control form-control-danger" placeholder="" name="penerbit" value="<?php echo e($edit->penerbit); ?>">
                                        <small class="form-control-feedback"> Nama Penerbit. </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Cover</label><br>
                                        <input name="cover" type="file"><br>
                                        <small class="form-control-feedback"> Gambar Cover Buku.</small> </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="reset" class="btn btn-inverse">Reset</button>
                        </form>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>