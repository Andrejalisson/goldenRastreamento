<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} || Golden Service</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="/plugins/fontawesome/css/all.css">
    @yield('css')
</head>

<body>
    <div class="preloader"></div>

    <div class="page-wrapper">
        <header class="main-header header-style-one">
            <div class="top-header">
                <div class="container">
                    <div class="left-info">
                        <p><i class="cameron-icon-email"></i><a href="mailto:contato@grupogoldenservice.com.br">contato@grupogoldenservice.com.br</a></p>
                    </div>
                    <div class="right-info" style="margin-top: 12px;">
                        <ul class="info-block">
                            <li><i class="cameron-icon-support"></i><a href="tel:+558530650917">(85) 3065-0917</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="images/resources/logo-1-1.png" class="main-logo" alt="Golden Service"/>
                            <img src="images/resources/logo-1-2.png" class="stricky-logo" alt="Golden Service"/>
                        </a>
                        <button class="menu-toggler" data-target=".header-style-two .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>

                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current"><a href="/">Home</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Rastreamento</a></li>
                            <li><a href="#">Seguro</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Área do Cliente</a></li>
                        </ul>
                    </div>
                    <div class="right-side-box">
                        <div class="social">
                            <a href="https://pt-br.facebook.com/GrupoGoldenService/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/golden_service/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://youtube.com/channel/UCFJ-1FYY252OQTUdqcHOvew" target="_blank"><i class="fa fa-youtube"></i></a>   
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @yield('corpo')
        <footer class="site-footer">
            <div class="main-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget about-widget">
                                <a href="index.html" class="footer-logo">
                                    <img src="images/resources/footer-logo-1-1.png" alt="awesome image">
                                </a>
                                <p>Golden Service Tem o Rastreador Ideal para o Seu Veículo. Empresa Especializada no Monitoramento e Rastreamento de Veículos Via Satélite.</p>
                                <div class="social-block">
                                    <a href="https://pt-br.facebook.com/GrupoGoldenService/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/golden_service/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://youtube.com/channel/UCFJ-1FYY252OQTUdqcHOvew" target="_blank"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget links-widget">
                                <div class="footer-widget-title">
                                    <h3>SiteMap</h3>
                                </div><!-- /.footer-widget-title -->
                                <ul class="links-lists">
                                    <li><a href="/">HOME </a></li>
                                    <li><a href="/Sobre">SOBRE </a></li>
                                    <li><a href="/Planos">PLANOS </a></li>
                                    <li><a href="/Assistencia">ASSISTÊNCIA 24H</a></li>
                                    <li><a href="https://fortechgps.softruck.com/access/login" target="_blank">ÁREA DO CLIENTE</a></li>
                                    <li><a href="#">ÁREA ADMINISTRATIVA</a></li>
                                </ul><!-- /.links-lists -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget works-widget">
                                <div class="footer-widget-title">
                                    <h3>Facebook </h3>
                                </div><!-- /.footer-widget-title -->
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffortechgps%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=348801248988519" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer -->
            <div class="bottom-footer text-center">
                <div class="container">
                    <p>Golden Service &copy; {{date('Y')}} Todos direitos reservados.</p>
                </div><!-- /.container -->
            </div><!-- /.bottom-footer -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>