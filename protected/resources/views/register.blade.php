<!DOCTYPE html>
<html>
<head>
    <title>Latihan</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/kube.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.min.css') ?>" />

</head>
<body style="width:80%;margin:40px auto">

    <div class="units-container">
		
        <form method="post" action="{{ route('register.store') }}" class="forms">
        	{!! csrf_field() !!}
        	<!-- untuk menampilkan pesan sukses setelah di input -->
				@if (Session::has('flash_notification.message'))
				    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				        {{ Session::get('flash_notification.message') }}
				    </div>
				@endif
            <h3>Form Registrasi</h3>
            <div class="form-group {{ fieldStyle('email') }}">
	            <label>Email</label>
	                 <!-- <span class="error"></span> -->
	                <input type="text" name="email" class="form-control" value="{{ old('email') }}" >
	               {!! fieldError('email') !!}
            </div>
            <div class="form-group {{ fieldStyle('password') }}">
	            <label>
	                Password <span class="error"></span>
	                <input type="password" name="password" value="{{ old('password') }}" class="form-control" >
	                {!! fieldError('password') !!}
	            </label>
            </div>
            <div class="form-group {{ fieldStyle('password_confirmation') }}">
            <label>
                Password Confirmation <span class="error"></span>
                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" >
                {!! fieldError('password_confirmation') !!}
            </label>
            </div>
            <input type="submit" class="btn" value="Submit">
            
        </form>

    </div>
</body>
</html>
