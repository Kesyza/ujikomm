@extends('adminlte::page')

@section('title', 'Data Sopir | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA SOPIR</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA SOPIR</h5></div>
                <div class="card-body">
                    <form action="{{route('sopir.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Foto</label>
                                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Tarif Perhari</label>
                                    <input type="text" name="tarif" class="form-control @error('tarif') is-invalid @enderror">
                                    @error('tarif')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama Sopir</label>
                                    <input type="text" name="nama_sopir" class="form-control @error('nama_sopir') is-invalid @enderror">
                                    @error('nama_sopir')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
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