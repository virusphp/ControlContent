@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Daftar Profile</small>
        </h1>

        {!! csrf_field() !!}
        @if (Session::has('flash_notification.message'))
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_notification.message') }}
            </div>
       @endif
        <p><a href="{{ URL::to('crud/create') }}" class="btn btn-primary" role="button">Tambah Profile Baru</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($profiles as $value)
                                    <tr>
                                        <td>{{{ $value->id }}}</td>
                                        <td>{{{ $value->nama }}}</td>
                                        <td>{{{ $value->jeniskelamin == 'L' ? 'Laki - laki' : 'Perempuan' }}}</td>

                                        <td>
								<div class="btn-group">
									<a href="{{ URL::to('crud/edit/'.$value->id) }}" class="btn btn-primary">Ubah</a>
									<a href="{{ URL::to('crud/hapus/'.$value->id) }}" class="btn btn-primary">Hapus</a>
								</div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$profiles->links()}}
 
    </div>
</div>
@stop