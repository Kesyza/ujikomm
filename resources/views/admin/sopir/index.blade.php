@extends('adminlte::page')

@section('title', 'Data Sopir')

@section('content_header')

Manajemen Data Sopir

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Sopir
                    <a href="{{route('sopir.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Merek"><i class="fas fa-plus"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Sopir</th>
                                <th>Nomor Telepon</th>
                                <th>Foto</th>
                                <th>Tarif Sopir</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($sopir as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_sopir}}</td>
                                    <td>{{$data->nomor_hp}}</td>
                                    <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;" alt=""></td>
                                    <td>Rp. {{ number_format($data->tarif, 0, ',', '.') }}</td>
                                    <td>
                                        <form action="{{route('sopir.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('sopir.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus"><i class="fas fa-window-close">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

@endsection

@section('js')

    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>

@endsection