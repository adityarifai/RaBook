@extends('template.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Read a Book</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item active">Libraries</li>
                <li class="breadcrumb-item active">List Book</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
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
                                                <th>Judul</th>
                                                <th>Karya</th>
                                                <th>Penerbit</th>
                                                <th>Waktu Data Masuk</th>
                                                <th>Cover</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Karya</th>
                                                <th>Penerbit</th>
                                                <th>Waktu Data Masuk</th>
                                                <th>Cover</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($libraries as $no => $data)
                                            <tr> 
                                                <td>{{ $no+1 }}</td>
                                                <td>{{ $data->judul }}</td>
                                                <td>{{ $data->karya }}</td>
                                                <td>{{ $data->penerbit }}</td>
                                                <td>{{ $data->created_at->format('d F Y H:i') }}</td>
                                                <td><img style="width: 100px; height: 135px;" src='{{asset('cover/'.$data->cover)}}'>
                                                </td>
                                                <td>
                                                    <a href="{{ route('libraries.edit',$data->id) }}" class="btn btn-info">Ubah</a>
                                                    <!-- <a href="{{route('libraries.show', $data->id)}}" class="btn btn-info" style="margin-right: 10px">Edit</a> -->
                                                    <form method="POST" action="{{ route('libraries.destroy', $data->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
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