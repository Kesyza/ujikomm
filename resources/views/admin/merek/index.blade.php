@extends('adminlte::page')

@section('title', 'Data Merek')

@section('content_header')

Manajemen Data Merek

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Merek
                    <a href="{{route('merek.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Merek"><i class="fas fa-plus"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Merek Mobil</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($merek as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_merek}}</td>
                                    <td>
                                        <form action="{{route('merek.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('merek.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus"><i class="fas fa-window-close"></i></button>
                                            {{-- <button type="submit" class="btn btn-danger delete-confirm"><i class="fas fa-window-close"></i></button><br> --}}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

@endsection

@section('js')

    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>

@endsection