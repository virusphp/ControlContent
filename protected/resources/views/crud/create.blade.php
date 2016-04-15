@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Tambah Profile</small>
        </h1>
 
        {{ Form::open(array('url' => 'crud/create', 'method' => 'PUT', 'class' => 'forms')) }}
             {{-- harus berada di midwr --}}
             {!! csrf_field() !!}

            <div class="form-group {{ fieldStyle('nama') }}">
                {{ Form::label('nama', 'Nama') }}
                {{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'masukkan nama')) }}
                  {!! fieldError('nama') !!}
            </div>
 
             <div class="form-group {{ fieldStyle('jeniskelamin') }}">
                {{ Form::label('jeniskelamin', 'Jenis Kelamin') }}
                {{ Form::select('jeniskelamin', array('L' => 'Laki - Laki', 'P' => 'Perempuan'), null, array('class' => 'form-control','placeholder'=>'Pili Jenis Kelamin')) }}
               {!! fieldError('jeniskelamin') !!}
            </div>
 
            <div class="form-group {{ fieldStyle('alamat') }}">
                {{ Form::label('alamat', 'Alamat') }}
                {{ Form::textarea('alamat', null, array('class' => 'form-control','placeholder'=>'masukkan alamat')) }}  
                {!! fieldError('alamat') !!}
            </div>
            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
 
        {{ Form::close() }}
 
    </div>
</div>
@stop