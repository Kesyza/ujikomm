@extends('adminlte::page')

@section('title', 'Data Pelanggan | Detail')

@section('content_header')

<center><h3>DETAIL DATA PELANGGAN</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA PELANGGAN</h5></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" name="nik" value="{{$pelanggan->nik}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nama Pelanggan</label>
                                <input type="text" name="nama_pelanggan" value="{{$pelanggan->nama_pelanggan}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" value="{{$pelanggan->jenis_kelamin}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Alamat Lemgkap</label>
                                <input type="text" name="alamat" value="{{$pelanggan->alamat}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nomor Telepon</label>
                                <input type="text" name="nomor_hp" value="{{$pelanggan->nomor_hp}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{$pelanggan->email}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/pelanggan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
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