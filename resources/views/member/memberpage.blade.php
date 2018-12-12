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
                    <section class="gallery-block compact-gallery">
                        <div class="container">
                            <div class="heading">
                                <h2>{{ $page->judul }}</h2>
                                <small><b>Karya :</b> {{ $page->karya }} - <b>Penerbit :</b> {{ $page->penerbit }}</small>
                            </div>
                            <div class="row no-gutters">
                                @foreach($pg as $no => $data)
                                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                                    <a class="lightbox" href='{{ asset('picture_page/'.$data->picture) }}'>
                                        <img class="img-fluid image" src='{{asset('picture_page/'.$data->picture)}}'>
                                        <span class="description">
                                            <span class="description-heading">{{ $data->no_page }}</span>
                                            <span class="description-body">{{ $data->id_libraries }}</span>
                                        </span>
                                    </a>
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