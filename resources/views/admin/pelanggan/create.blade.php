@extends('adminlte::page')

@section('title', 'Data Pelanggan | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA PELANGGAN</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA PELANGGAN</h5></div>
                <div class="card-body">
                    <form action="{{route('pelanggan.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan NIK</label>
                                    <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control @error('nama_pelanggan') is-invalid @enderror">
                                    @error('nama_pelanggan')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Alamat Lengkap</label>
                                    <textarea type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nomor Telepon</label>
                                    <input type="text" name="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror">
                                    @error('nomor_hp')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Email</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
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