@extends('adminlte::page')

@section('title', 'Data Transaksi | Tambah')

@section('content_header')

Tambah Data Transaksi

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Transaksi</div>
                <div class="card-body">
                    <form action="{{route('transaksi.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama Pelanggan</label>
                                    <select name="id_pelanggan" class="form-control @error('id_pelanggan') is-invalid @enderror">
                                        @foreach ($pelanggan as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_pelanggan }} - ({{ $data->nik }})</option>
                                        @endforeach
                                    </select>
                                    @error('id_pelanggan')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama Sopir</label>
                                    <select name="id_sopir" class="form-control @error('id_sopir') is-invalid @enderror">
                                        @foreach ($sopir as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_sopir }} - ({{ $data->nomor_hp }})</option>
                                        @endforeach
                                    </select>
                                    @error('id_sopir')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col">
                                <div class="form-group">
                                    <label>Status Pelanggan</label>
                                    <select name="pelanggan" class="form-control">
                                        <option value="Lama">Lama</option>
                                        <option value="Baru">Baru</option>
                                    </select>
                                    @error('pelanggan')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama Mobil</label>
                                    <select name="id_mobil" class="form-control @error('id_mobil') is-invalid @enderror">
                                        @foreach ($mobil as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_mobil }} - ({{ $data->warna_mobil }})</option>
                                        @endforeach
                                    </select>
                                    @error('id_mobil')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Status</label>
                                    <input type="text" name="status_sewa" class="form-control @error('status_sewa') is-invalid @enderror">
                                    @error('status_sewa')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Total Bayar</label>
                                    <input type="number" name="total_bayar" class="form-control @error('total_bayar') is-invalid @enderror">
                                    @error('total_bayar')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Tanggal Sewa</label>
                                    <input type="date" name="tanggal_sewa" class="form-control @error('tanggal_sewa') is-invalid @enderror">
                                    @error('tanggal_sewa')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Tanggal Kembali</label>
                                    <input type="date" name="tanggal_kembali" class="form-control @error('tanggal_kembali') is-invalid @enderror">
                                    @error('tanggal_kembali')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{-- <button type="reset" class="btn btn-outline-warning">Batal</button> --}}
                            <a class="btn btn-outline-warning" href="{{route('transaksi.index')}}">Reset</a>
                            <button type="submit" class="btn btn-outline-info">Simpan</button>
                        </div>
                    </form>
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