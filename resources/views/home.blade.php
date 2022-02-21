@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<center><h1>SELAMAT DATANG DI HALAMAN ADMIN SEWA MOBIL K.15.A</h1></center>

@stop

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Merek</b>
            <h1>{{ DB::table('mereks')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-life-ring fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/merek" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Pelanggan</b>
            <h1>{{ DB::table('pelanggans')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/pelanggan" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Sopir</b>
            <h1>{{ DB::table('sopirs')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-tachometer-alt fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/sopir" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-gradient-success">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Mobil</b>
            <h1>{{ DB::table('mobils')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-car fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/mobil" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-dark">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data List Sewa</b>
            <h1>{{ DB::table('transaksis')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-edit fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/transaksi/index" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Riwayat Sewa</b>
            <h1>{{ DB::table('transaksis')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-book fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/transaksi/histori" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop