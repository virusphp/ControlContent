@extends('layouts.master') 
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Halaman Form Kritik dan Saran
		</h1>
		{{-- form sederhana --}}
	{{ Form::open(array('url'=> 'Profile.postformsederhana')) }}

		{{-- input nama --}}
		<div class="form-group">
		{{-- label('for', 'value') --}}
			{{ Form::label('nama', 'Nama') }}
			{{-- text('name','value', array('class' => 'bebas')) --}}
			{{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'masukkan nama')) }}
		</div>
		
		{{-- input jenis kelamin --}}
		<div class="form-group">
			{{ Form::label('jeniskelamin', 'Jenis Kelamin') }}
			{{ Form::select('jeniskelamin', array('L' => 'Laki-laki','P' => 'Perempuan'), null, array('class' => 'form-control','placeholder' => 'Pilih Jenis Kelamin')) }}
		</div>

		{{-- input alamat --}}
		<div class="form-group">
			{{ Form::label('alamat', 'Alamat') }}
			{{ Form::textarea('alamat',null, array('class' => 'form-control', 'placeholder' => 'Masukan Alamat')) }}
		</div>

		{{-- submit --}}
		{{ Form::submit('Kirim', array('class' => 'form-control')) }}
		<div class=""></div>

	{{ Form::close() }}

	</div>	

</div>

@stop