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
    <div class="container" style='margin-top:50px;'>

        <!-- Page Heading/Breadcrumbs -->
        <!-- /.row -->

        <div class="row">
            <div class='col-xs-12'>
                <!-- Blog Entries Column -->
                <div class="col-md-8">
                    @yield('content')
                </div>
                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">
                    <div class="row-fluid">
                        <div class="submit well" style="margin-top: -30px; margin-left: -10px;">
                            @section('sidebar')
                                @include('layouts.sidebar')
                            @show
                        </div>
                    </div>
                </div>

                <hr/>
            </div>
            @include('layouts.footer')

        </div>

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    @section('script')
    <?=HTML::script("js/jquery.js");?>
    <?=HTML::script("js/bootstrap.min.js");?>
    <?=HTML::script("js/price-range.js");?>
    <?=HTML::script("js/jquery.prettyPhoto.js");?>
    <?=HTML::script("js/main.js");?>

    <!-- Bootstrap Core JavaScript -->
    <?=HTML::script("js/bootstrap.min.js");?>
    @show
    @if (Session::has('notification'))
    <!--modal-->
    <div class="modal fade" id='notification'>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Notifikasi</h4>
          </div>
          <div class="modal-body">
            <p>{{Session::pull('notification')}}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="sub btn btn-success" data-dismiss="modal">OK</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
    <script type="text/javascript">
        $('#notification').modal();
    </script>
    @endif
    <!--end of modal-->
</body>

</html>
