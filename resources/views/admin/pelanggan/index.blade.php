@extends('adminlte::page')

@section('title', 'Data Pelanggan')

@section('content_header')

<center><h3>MANAJEMEN DATA PELANGGAN</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA PELANGGAN
                    <a href="{{route('pelanggan.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Pelanggan"><i class="fas fa-plus"></i></a>
                    </h5>                
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="pelanggan">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Pelanggan</th>
                                <th>Nomor Telepon</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($pelanggan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nik}}</td>
                                    <td>{{$data->nama_pelanggan}}</td>
                                    <td>{{$data->nomor_hp}}</td>
                                    <td>
                                        <form action="{{route('pelanggan.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('pelanggan.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('pelanggan.show',$data->id)}}" class="btn btn-outline-warning" data-toggle="tooltip" title="Detail"><i class="fa fa-search"></i></a>
                                        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus"><i class="fas fa-window-close">
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
</div>

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('dataTables/datatables.min.css') }}">

@endsection

@section('js')

    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    <script src="{{ asset('dataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#pelanggan').DataTable();
        });
    </script>

@endsection