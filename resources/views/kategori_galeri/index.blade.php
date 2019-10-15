@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Kategori Galeri</div>
                <div class="card-body">
                <a href="{!! route('kategori_galeri.create')!!}" class="btn btn-sn btn-primary">{{ __('Tambah Data')}}</a>
                
                <div class="col text-center ">
                <br>
                <table class="table table-bordered bg-white">
                <thead class ="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $KategoriGaleri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                            
                            <a href="{!! route('kategori_galeri.show',[$item-> id]) !!}" button class="btn btn-sm btn-success">Lihat</a>
                            <a href="{!! route('kategori_galeri.edit',[$item-> id]) !!}" button class="btn btn-sm btn-warning" >Edit</a>

                            {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id],'method' => 'delete']) !!}

                            {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                            {!! Form::close() !!}
                        </td>
                        @endforeach
                        
                    </tbody>
                </table>
        @endsection