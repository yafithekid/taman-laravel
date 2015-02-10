<!--
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=URL::route('home');?>">
                <div class="logo"><?=HTML::image("img/logo.png");?></div>
                <div class="navhead col-md-offset-2">
                <h4>DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG</h4>
                <h5>Website Resmi Pemantauan Taman Kota Bandung</h5></a>
                </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(Auth::guest())
                    <a href="<?=URL::route('login');?>">Halaman Admin</a>
                    @else
                    <a href='<?=URL::route('logout');?>'>Selamat datang, {{Auth::user()->username}} (Logout)</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>-->
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col-md-12">
                <a class="navbar-brand" href="<?=URL::route('home');?>">
                    <div class="row navnav">
                        <div class="col-md-2">
                            <div class="logo"><?=HTML::image("img/logo.png");?></div>
                        </div>
                        <div class="col-md-10">
                    <div class="navhead">
                    <h4>DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG</h4>
                    <h5>Website Resmi Pemantauan Taman Kota Bandung</h5>
                    </div>
                </div>
                </div>
                </a>
            </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        @if(Auth::guest())
                        <a href="<?=URL::route('login');?>">Halaman Admin</a>
                        @else
                        <a href='<?=URL::route('logout');?>'>Selamat datang, {{Auth::user()->username}} (Logout)</a>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

