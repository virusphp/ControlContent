@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Ubah Profile</small>
        </h1>
        
        {{ Form::model($profilesbyid, array('method' => 'PUT','type' => 'hidden', 'route' => array('crud.update', $profilesbyid->id))) }}
            <div class="form-group">
                {{ Form::label('nama', 'Nama') }}
                {{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'masukkan nama')) }}
                {!! fieldError('nama') !!}
            </div>
 
             <div class="form-group">
                {{ Form::label('jeniskelamin', 'Jenis Kelamin') }}
                {{ Form::select('jeniskelamin', array('L' => 'Laki - Laki', 'P' => 'Perempuan'), null, array('class' => 'form-control','placeholder'=>'Pili Jenis Kelamin')) }}
                {!! fieldError('jeniskelamin') !!}
            </div>
 
            <div class="form-group">
                {{ Form::label('alamat', 'Alamat') }}
                {{ Form::textarea('alamat', null, array('class' => 'form-control','placeholder'=>'masukkan alamat')) }}  
                {!! fieldError('alamat') !!}
            </div>
            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
 
        {{ Form::close() }}
 
    </div>
</div>
@stop