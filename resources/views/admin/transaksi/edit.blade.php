@extends('adminlte::page')

@section('title', 'Data Transaksi | Edit')

@section('content_header')

<center><h3>EDIT DATA TRANSAKSI</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA TRANSAKSI</h5></div>
                    <div class="card-body">
                        <form action="{{route('transaksi.update',$transaksi->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Nota</label>
                                        <input type="text" name="nota" value="{{$transaksi->nota}}" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Masukan Tanggal Dikembalikan</label>
                                        <input type="date" name="tanggal_dikembalikan" class="form-control @error('tanggal_dikembalikan') is-invalid @enderror">
                                        @error('tanggal_dikembalikan')
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