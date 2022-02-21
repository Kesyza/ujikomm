@extends('adminlte::page')

@section('title', 'Data Mobil')

@section('content_header')

Data Mobil

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mobil
                    <a href="{{route('mobil.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Mobil"><i class="fas fa-plus"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Mobil</th>
                                <th>Merek Mobil</th>
                                <th>Tahun Pembuatan</th>
                                <th>Harga Sewa</th>
                                <th>Status Mobil</th>
                                {{-- <th>Gambar</th> --}}
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($mobil as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_mobil}}</td>
                                    <td>{{$data->merek->nama_merek}}</td>
                                    <td>{{$data->tahun_pembuatan}}</td>
                                    <td>Rp. {{ number_format($data->harga_sewa, 0, ',', '.') }}</td>
                                    <td>{{$data->status}}</td>
                                    {{-- <td><img src="{{$data->image()}}" alt="" style="width:160px; height:100px;" alt="Gambar"></td> --}}
                                    <td>
                                        <form action="{{route('mobil.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('mobil.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('mobil.show',$data->id)}}" class="btn btn-outline-warning" data-toggle="tooltip" title="Detail"><i class="fa fa-search"></i></a>
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