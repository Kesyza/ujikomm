@extends('adminlte::page')

@section('title', 'Data Mobil | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA MOBIL</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA MOBIL</h5></div>
                <div class="card-body">
                    <form action="{{route('mobil.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Gambar</label>
                                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Status Mobil</label>
                                    <input type="text" name="status" class="form-control @error('status') is-invalid @enderror">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama Mobil</label>
                                    <input type="text" name="nama_mobil" class="form-control @error('nama_mobil') is-invalid @enderror">
                                    @error('nama_mobil')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                  <label>Masukan Merek Mobil</label>
                                    <select name="id_merek" class="form-control @error('id_merek') is-invalid @enderror">
                                        @foreach($merek as $data)
                                            <option value="{{$data->id}}">{{$data->nama_merek}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_merek')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nomor Polisi</label>
                                    <input type="text" name="nomor_polisi" class="form-control @error('nomor_polisi') is-invalid @enderror">
                                    @error('nomor_polisi')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Tahun Pembuatan</label>
                                    <input type="text" name="tahun_pembuatan" class="form-control @error('tahun_pembuatan') is-invalid @enderror">
                                    @error('tahun_pembuatan')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Sewa Perhari</label>
                                    <input type="text" name="harga_sewa" class="form-control @error('harga_sewa') is-invalid @enderror">
                                    @error('harga_sewa')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Denda Perhari</label>
                                    <input type="text" name="denda" class="form-control @error('denda') is-invalid @enderror">
                                    @error('denda')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Warna Mobil</label>
                                    <input type="text" name="warna_mobil" class="form-control @error('warna_mobil') is-invalid @enderror">
                                    @error('warna_mobil')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
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