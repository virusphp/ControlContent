<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admins</title>

    <!-- Bootstrap Core CSS -->
    {{ Html::style('asset/css/bootstrap.min.css') }}

    <!-- Custom CSS -->
    {{ Html::style('asset/css/sb-admin.css') }}

    <!-- Custom Fonts -->
    {{ Html::style('asset/font-awesome/css/font-awesome.min.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- ini header -->
             @include('includes.header')
            
            <!-- ini sidebar -->
            @include('includes.sidebar')
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                   @yield('content')
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {{ Html::script('asset/js/jquery.js') }} 

    <!-- Bootstrap Core JavaScript -->
    {{ Html::script('asset/js/bootstrap.min.js') }} 


</body>

</html>