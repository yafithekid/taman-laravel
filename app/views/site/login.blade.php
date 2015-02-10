<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website Resmi Pemantauan Taman Kota Bandung</title>

    <!-- Bootstrap Core CSS -->
    <?= HTML::style("css/bootstrap.min.css"); ?>
    <?= HTML::style("css/font-awesome.min.css"); ?>
    <?= HTML::style("css/prettyPhoto.css"); ?>
    <?= HTML::style("css/price-range.css"); ?>
    <?= HTML::style("css/animate.css"); ?>
    <?= HTML::style("css/main.css"); ?>
    <?= HTML::style("css/responsive.css"); ?>

    <!-- Custom Fonts -->
    <?=HTML::style("font-awesome-4.1.0/css/font-awesome.min.css"); ?>
    <?=HTML::style("http://fonts.googleapis.com/css?family=Montserrat"); ?>
    <?=HTML::style("http://fonts.googleapis.com/css?family=Open+Sans"); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @include('layouts.header')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <!-- /.row -->

            <div class="row-fluid">
                <div class="col-md-offset-3 col-md-6">
                <div class="login well">
                    <h6>Login Admin</h6>
                    @if (Session::has('login.error'))
                        <span style='color:red'>{{Session::get('login.error')}}</span>
                    @endif
                    <form action='{{URL::route('login.submit');}}' method='POST'> 
                    <div class="form-group">
                            <input name='username' type="text" class="form-control" placeholder="Username" value='{{$model->username}}'>
                            <input name='password' type="password" class="form-control" placeholder="Password" value='{{$model->password}}'>
                            <button type="submit" class="col-lg-offset-5 sub btn btn-default">Login</button>
                    </div>
                </div>
            </div>

            @include('layouts.footer')


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <?=HTML::script("js/jquery.js");?>
    <?=HTML::script("js/bootstrap.min.js");?>
    <?=HTML::script("js/price-range.js");?>
    <?=HTML::script("js/jquery.prettyPhoto.js");?>
    <?=HTML::script("js/main.js");?>

    <!-- Bootstrap Core JavaScript -->
    <?=HTML::script("js/bootstrap.min.js");?>

</body>

</html>
