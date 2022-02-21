@extends('adminlte::page')

@section('title', 'Data Merek | Tambah')

@section('content_header')

Tambah Data Merek

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Merek</div>
                <div class="card-body">
                    <form action="{{route('merek.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Merek Mobil</label>
                            <input type="text" name="nama_merek" class="form-control @error('nama_merek') is-invalid @enderror">
                            @error('nama_merek')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
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