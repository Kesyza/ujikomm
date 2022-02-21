@extends('adminlte::page')

@section('title', 'Data Transaksi')

@section('content_header')

Manajemen Data Transaksi

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Transaksi
                    {{-- <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Transaksi"><i class="fas fa-plus"></i></a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nota</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Kembali</th>
                                <th>Nama Pelanggan</th>
                                <th>Nama Mobil</th>
                                <th>Nama Sopir</th>
                                <th>Total Bayar</th>
                                <th>Status Sewa</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($transaksi as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nota}}</td>
                                    <td>{{$data->tanggal_sewa}}</td>
                                    <td>{{$data->tanggal_kembali}}</td>
                                    <td>{{$data->pelanggan->nama_pelanggan}}</td>
                                    <td>{{$data->mobil->nama_mobil}}</td>
                                    <td>{{$data->sopir->nama_sopir}}</td>
                                    <td>Rp. {{ number_format($data->total_bayar, 0, ',', '.') }}</td>
                                    <td>{{$data->status_sewa}}</td>
                                    <td>
                                        <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        {{-- <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a> --}}
                                        <button type="submit" class="btn btn-outline-danger" data-toggle="tooltip" title="Hapus" onclick="return confirm('Apakah anda yakin menghapus')"><i class="fas fa-window-close">
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

@stop

@section('css')

@stop

@section('js')

@stop