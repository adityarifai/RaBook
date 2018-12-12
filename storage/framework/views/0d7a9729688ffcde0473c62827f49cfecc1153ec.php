<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <!-- <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Selamat Datang Member</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Beranda</li>
            </ol>
        </div>
    </div> -->
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <section class="gallery-block compact-gallery">
                        <div class="container">
                            <div class="heading">
                                <h2><?php echo e($page->judul); ?></h2>
                                <small><b>Karya :</b> <?php echo e($page->karya); ?> - <b>Penerbit :</b> <?php echo e($page->penerbit); ?></small>
                            </div>
                            <div class="row no-gutters">
                                <?php $__currentLoopData = $pg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href='<?php echo e(asset('picture_page/'.$data->picture)); ?>'>
                                        <img class="img-fluid image" src='<?php echo e(asset('picture_page/'.$data->picture)); ?>'>
                                        <span class="description">
                                            <span class="description-heading"><?php echo e($data->no_page); ?></span>
                                            <span class="description-body"><?php echo e($data->id_libraries); ?></span>
                                        </span>
                                    </a>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templatemember.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>