@extends('templatemember.layouts.app')

@section('content')
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
                    <div class="card-body">Selamat Datang<!--  <i>Admin</i> --> di halaman Beranda Aplikasi <b>Read a Book</b> E-Library. Online dimana saja dan kapan saja tetap membaca    .
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-book f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>{{ count($buku) }}</h2>
                            <p class="m-b-0">Books</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-copy f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>{{ count($page) }}</h2>
                            <p class="m-b-0">Pages</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                        <div class="card">
                            <div class="card-body p-b-0">
                                <h4 class="card-title">RaBook E-Library</h4>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Visi</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Misi</span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home2" role="tabpanel">
                                        <div class="p-20">
                                            <h5>Read a Book</h5>
                                            <h6>Aplikasi baca buku online yang bisa dibaca dimana saja dan kapan saja seluruh Indonesia. Dikembangkan oleh Aditya Rifa'i dan dibantu dengan Team Work Technosoft. Berbasis Web dengan framework Laravel dan Style ala Bootstrap 4 yang dikemas dengan template Ela-Admin.</h6>
                                            <p>© 2018 All rights reserved. Creative Company.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="profile2" role="tabpanel">
                                        Budayakan membaca terlebih dahulu.<br>
                                        <p>© 2018 All rights reserved. Inzomnia Compage.</p>
                                    </div>
                                    <div class="tab-pane p-20" id="messages2" role="tabpanel">
                                        Baca buku dimana saja dan kapan saja.<br>
                                        <p>© 2018 All rights reserved. Technosoft'7.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- End PAge Content -->
    </div>

</div>
@endsection