@extends('template.layouts.app')

@section('content')
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
                            <h2>{{ count($buku) }}</h2>
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
                            <h2>{{ count($page) }}</h2>
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
                            <h2>{{ count($user) }}</h2>
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
                                    <img class="testimonial-author-img" src="{{ asset('picture/adityarifai.png') }}" alt="" />
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
                                    @foreach($user as $no => $data)
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td><span>{{ $data->name }}</span></td>
                                        <td><span>{{ $data->email }}</span></td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        @if($data->name == 'admin')
                                        <td>   
                                            <button type="button" class="btn btn-default disabled">Hapus</button>
                                        </td>
                                        @else
                                        <td>
                                            <form method="POST" action="{{ route('admin.destroy', $data->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Hapus</button>
                                                    </form>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
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
@endsection
