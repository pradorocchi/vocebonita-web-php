<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="beleza">
    <meta name="description" content="Serviços de beleza na sua casa">
    <title>VocêBonita</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/component.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- Preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>

<!-- Navigation section  -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="/promocoes">Promoções</a></li>
                <li><a href="/profissionais">Nossa Equipe</a></li>
                <li><a href="/dicas">Dicas</a></li>
                <li><a href="/login">Entrar</a></li>
            </ul>
        </div>
    </div>
</div>

@yield('content')

<!-- Footer section -->
<footer>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <ul class="social-icon">
                    <li>
                        <a href="https://www.facebook.com/vocebonitapoa" class="fa fa-facebook wow fadeInUp"
                           data-wow-delay="0.2s"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a>
                    </li>
                </ul>
                <p class="wow fadeInUp" data-wow-delay="1s">Copyright &copy; 2017 | VocêBonita </p>
            </div>
        </div>
    </div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/vegas.min.js') }}"></script>
<script src="{{ URL::asset('js/modernizr.custom.js') }}"></script>
<script src="{{ URL::asset('js/toucheffects.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/smoothscroll.js') }}"></script>
<script src="{{ URL::asset('js/wow.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>

<script>
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-102299471-1', 'auto');
    ga('send', 'pageview');
</script>

</body>

</html>
