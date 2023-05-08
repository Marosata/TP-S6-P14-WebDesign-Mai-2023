<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Site d'informations sur l'intelligence artificielle</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header id="masthead" class="site-header site-header-blue">
    <nav id="primary-navigation" class="site-navigation">
            <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="/home">Home</a></li>
                    <li><a href="/listeNonConfirm">Confirm</a></li>
                    <li><a href="/addInfoFO">Add</a></li>
                    <li><a href="/">Se deconnecter</a></li>

                </ul>

            </div>

        </div>
    </nav>
</header>
    <!-- CONTENU -->
    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($infos as $info)
                        <article class="blog-post">
                        <img src="{{ asset('imgs/' . $info->photo) }}" class="img-res" alt="">
                            <div class="post-content">
                                <h2 class="post-title">{{$info->titre}}</h2>
                                <p>{{$info->contenu}}</p>
                                <div class="post-meta">
                                    <span class="post-author">
                                        Author : <a href="#">John Smith</a>
                                    </span>
                                    <span class="post-date">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$info->dateajout}}</a>
                                    </span>
                                    <span>
                                        <a href="/publier/{{ $info->idinfo }}"><button class="btn btn-success">Publier</button></a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
    <!-- CONTENU -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
