@extends('adminlte::page')

@section('title', 'Data Mobil | Detail')

@section('content_header')

<center><h3>DETAIL DATA MOBIL</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA MOBIL</h5></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <img src="{{ $mobil->image() }}" height="100" style="padding:10px;" />
                                {{-- <input type="text" name="gambar" value="{{$mobil->gambar}}" class="form-control" readonly> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nama Mobil</label>
                                <input type="text" name="nama_mobil" value="{{$mobil->nama_mobil}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Merek Mobil</label>
                                <input type="text" name="id_merek" value="{{$mobil->merek->nama_merek}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nomor Polisi</label>
                                <input type="text" name="nomor_polisi" value="{{$mobil->nomor_polisi}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Tahun Pembuatan</label>
                                <input type="text" name="tahun_pembuatan" value="{{$mobil->tahun_pembuatan}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Sewa Perhari</label>
                                <input type="text" name="harga_sewa" value="{{$mobil->harga_sewa}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Denda Perhari</label>
                                <input type="text" name="denda" value="{{$mobil->denda}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Status Mobil</label>
                                <input type="text" name="status" value="{{$mobil->status}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Warna Mobil</label>
                                <input type="text" name="warna_mobil" value="{{$mobil->warna_mobil}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/mobil')}}" class="btn btn-block btn-outline-primary">Kembali</a>
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