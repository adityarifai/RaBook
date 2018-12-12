<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <!-- <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> <b>RaBook</b> Beranda. </h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
                    <div class="card-body">Selamat Datang <i>Admin</i> di halaman Administrator Aplikasi <b>Read a Book</b> E-Library. Online dimana saja dan kapan saja tetap membaca    .
                    </div>
                </div>  
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-book f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><?php echo e(count($buku)); ?></h2>
                            <p class="m-b-0">Books</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-copy f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><?php echo e(count($page)); ?></h2>
                            <p class="m-b-0">Pages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-user f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>1</h2>
                            <p class="m-b-0">Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><?php echo e(count($user)); ?></h2>
                            <p class="m-b-0">Members</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-dark">
                    <div class="testimonial-widget-one p-17">
                        <div class="testimonial-widget-one owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-content">
                                    <img class="testimonial-author-img" src="<?php echo e(asset('picture/adityarifai.png')); ?>" alt="" />
                                    <div class="testimonial-author">Aditya Rifa'I</div>
                                    <div class="testimonial-author-position">Founder-Ceo. CreativeCompany</div>

                                    <div class="testimonial-text">
                                        <i class="fa fa-quote-left"></i>  Berjalan sebagai Creator dan Desainer Web yang berjalan di Framework <i>Laravel</i> beserta <i>Bootstrap 4</i> yang terikat dengan suatu kaidah media berbasis daring.
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-title">
                        <h4>List Members</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($no+1); ?></td>
                                        <td><span><?php echo e($data->name); ?></span></td>
                                        <td><span><?php echo e($data->email); ?></span></td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <?php if($data->name == 'admin'): ?>
                                        <td>   
                                            <button type="button" class="btn btn-default disabled">Hapus</button>
                                        </td>
                                        <?php else: ?>
                                        <td>
                                            <form method="POST" action="<?php echo e(route('admin.destroy', $data->id)); ?>">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Hapus</button>
                                                    </form>
                                        </td>
                                        <?php endif; ?>
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