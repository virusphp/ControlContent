<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Login</title>
{{ Html::style('asset/css/bootstrap.min.css') }}
{{ Html::style('asset/css/sb-admin.css') }}
{{ Html::style('asset/font-awesome-4.1.0/css/font-awesome.min.css') }}
</head>
<body>
    <div class="row">
        <div class="col-lg-4 text-center">
        </div>
        <div class="col-lg-4 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(array('url' => 'login')) }}
                    <h1>Login</h1>
                    <p>
                                    {!! csrf_field() !!}

                                    {!! fieldError('email') !!}
                                    {!! fieldError('password') !!}
                    </p>
                    <p>
                                    {{ Form::label('email', 'Email') }}
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Masukan Email">
                    </p>
                    <p>
                                    {{ Form::label('password', 'Password') }}
                                    {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Masukkan Password')) }}
                    </p>
                    <p>{{ Form::submit('Login', array('class' => 'form-control')) }}</p>
                {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
</div>
</body>
</html>