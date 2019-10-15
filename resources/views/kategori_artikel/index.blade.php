@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center bg-text-center">Kategori Artikel</div>
                <div class="card-body">
                <a href="{!! route('kategori_artikel.create')!!}" class="btn btn-sn btn-primary">{{ __('Tambah Data')}}</a>
                
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
                        @foreach( $KategoriArtikel as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                            
                            <a href="{!! route('kategori_artikel.show',[$item-> id]) !!}" button class="btn btn-sm btn-success">Lihat</a>
                            <a href="{!! route('kategori_artikel.edit',[$item-> id]) !!}" button class="btn btn-sm btn-warning" >Edit</a>

                            {!! Form::open(['route' => ['kategori_artikel.destroy', $item->id],'method' => 'delete']) !!}

                            {!! Form::submit('Hapus', ['class'=>'btn  btn-sm btn-danger','onclick'=>"return confirm('Apakah Anda yakin menghapus data ini ?')"]); !!}
                            {!! Form::close() !!}
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        @endsection 