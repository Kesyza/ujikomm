@extends('adminlte::page')

@section('title', 'Data Pelanggan | Edit')

@section('content_header')

<center><h3>EDIT DATA PELANGGAN</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA PELANGGAN</h5></div>
                    <div class="card-body">
                        <form action="{{route('pelanggan.update',$pelanggan->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit NIK</label>
                                        <input type="text" name="nik" value="{{$pelanggan->nik}}" class="form-control @error('nik') is-invalid @enderror">
                                        @error('nik')
                                            <span class="invalid-feedback" role="alert"></span>
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit Nama Pelanggan</label>
                                        <input type="text" name="nama_pelanggan" value="{{$pelanggan->nama_pelanggan}}" class="form-control @error('nama_pelanggan') is-invalid @enderror">
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
                                        <label for="">Edit Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="Laki-Laki" {{$pelanggan->jenis_kelamin == 'Laki-Laki' ? 'selected':''}}>Laki-Laki</option>
                                            <option value="Perempuan" {{$pelanggan->jenis_kelamin == 'Perempuan' ? 'selected':''}}>Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert"></span>
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit Alamat Lengkap</label>
                                        <textarea type="text" name="alamat" value="{{$pelanggan->alamat}}" class="form-control @error('alamat') is-invalid @enderror">{{$pelanggan->alamat}}</textarea>
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
                                        <label for="">Edit Nomor Telepon</label>
                                        <input type="text" name="nomor_hp" value="{{$pelanggan->nomor_hp}}" class="form-control @error('nomor_hp') is-invalid @enderror">
                                        @error('nomor_hp')
                                            <span class="invalid-feedback" role="alert"></span>
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit Email</label>
                                        <input type="text" name="email" value="{{$pelanggan->email}}" class="form-control @error('email') is-invalid @enderror">
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
                                {{-- <a href="{{url('/admin/pelanggan')}}" class="btn btn-outline-primary">Kembali</a> --}}
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