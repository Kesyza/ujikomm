@extends('adminlte::page')

@section('title', 'Data Transaksi')

@section('content_header')

<center><h3>MANAJEMEN DATA TRANSAKSI</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA TRANSAKSI
                    {{-- <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Transaksi"><i class="fas fa-plus"></i></a> --}}
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="transaksi">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nota</th>
                                <th>Tanggal Dikembalikan</th>
                                <td>Total Bayar</td>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($transaksi as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nota}}</td>
                                    <td>{{$data->tanggal_dikembalikan}}</td>
                                    <td>Rp. {{ number_format($data->total_bayar, 0, ',', '.') }}</td>
                                    <td>
                                        <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        {{-- <a href="#" class="btn btn-outline-info" data-toggle="tooltip" title="Selesai Sewa"><i class="fa fa-check"></i></a> --}}
                                        {{-- <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a> --}}
                                        <button type="submit" class="btn btn-outline-danger" data-toggle="tooltip" title="Hapus"><i class="fas fa-window-close">
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
            $('#transaksi').DataTable();
        });
    </script>

@endsection