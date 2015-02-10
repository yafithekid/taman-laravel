<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Tamanku</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="URL::route('home')">Beranda</a>
                </li>
                <li>
                    <a href="#">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" title="Contact the Start Bootstrap Team">Kontak</a>
                </li>
                <li>
                    @if (Auth::guest())
                        <a href='{{URL::route('login')}}'>Login</a>
                    @else
                        <a href='{{URL::route('logout')}}'>Logout</a>
                    @endif
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>