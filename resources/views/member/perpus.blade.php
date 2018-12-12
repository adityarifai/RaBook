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
                    <section class="gallery-block cards-gallery">
                        <div class="container">
                            <div class="heading">
                              <h2>Perpustakaan</h2>
                              <small>Daftar Buku atau Novel yang tersedia.</small>
                            </div>
                            <div class="row">
                                @foreach($buku as $no => $data)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border-0 transform-on-hover">
                                        <a class="lightbox" href="{{ route('member.page',$data->id) }}">
                                            <img src='{{asset('cover/'.$data->cover)}}' style="width: 265px; height: 300px;" alt="Card Image" class="card-img-top">
                                        </a><br>
                                        <div class="card-body">
                                            <h6><a href="#">{{ $data->judul }}</a></h6>
                                            <p class="text-muted card-text"><b>Karya :</b> {{ $data->karya }} - <b>Penerbit :</b> {{ $data->penerbit }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>

</div>
@endsection