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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    @yield('css')
</head>

<body>


    <div class="page-wrapper">
        <header class="main-header header-style-one">
            <div class="top-header">
                <div class="container">
                    <div class="left-info">
                        <p><i class="cameron-icon-email"></i><a href="mailto:contato@grupogoldenservice.com.br">contato@grupogoldenservice.com.br</a></p>
                    </div><!-- /.left-info -->
                    <div class="right-info">
                        <ul class="info-block">
                            <li><i class="cameron-icon-support"></i><a href="tel:+558530650917">(85) 3065-0917</a></li>
                        </ul>
                    </div><!-- /.right-info -->
                </div><!-- /.container -->
            </div><!-- /.top-header -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="/images/resources/logo-1-1.png" class="main-logo" alt="Fortech GPS LOGO"/>
                            <img src="/images/resources/logo-1-2.png" class="stricky-logo" alt="Fortech GPS LOGO"/>
                        </a>
                        <button class="menu-toggler" data-target=".header-style-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">

                            <li class="{{ $title == "Home" ? "current" : "" }}"><a href="/">Home</a></li>
                            <li class="{{ $title == "Sobre" ? "current" : "" }}"><a href="/Sobre">Sobre</a></li>
                            @switch($title)
                                @case("Rastreamento Veicular")
                                    @php
                                        $servico = true
                                    @endphp
                                    @break
                                @case("Seguro")
                                    @php
                                        $servico = true
                                    @endphp
                                    @break
                                @case("Bateria Moura")
                                    @php
                                        $servico = true
                                    @endphp
                                    @break
                                @case("Assist??ncia Veicular")
                                    @php
                                        $servico = true
                                    @endphp
                                    @break
                                @default
                                    @php
                                        $servico = false
                                    @endphp
                            @endswitch
                            <li class="{{ $servico == true ? "current" : "" }}"><a href="#">Servi??os</a>
                                <ul class="sub-menu">
                                    <li><a href="/Servico/RastreamentoVeicular">Rastreamento Veicular</a></li>
                                    <li><a href="/Servico/Seguro">Seguro</a></li>
                                    <li><a href="/Servico/BateriaMoura">Bateria Moura</a></li>
                                    <li><a href="/Servico/AssistenciaVeicular">Assist??ncia Veicular</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li class="{{ $title == "contato" ? "current" : "" }}"><a href="/Contato">Contato</a></li>
                            <li class="{{ $title == "FAQ - D??vidas Frequentes" ? "current" : "" }}"><a href="#">??rea do Cliente</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Rastreamento</a>
                                        <ul class="sub-menu">
                                            <li><a target="_blank" href="https://sistema.getrak.com.br/goldenservice/">PLANO TOP</a></li>
                                            <li><a target="_blank" href="http://ap3.stc.srv.br/webcliente/goldenservice/login">PLANO ECON??MICO</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                    <li><a href="/FAQ">FAQ - D??vidas Frequentes</a></li>
                                    <li><a target="_blank" href="http://golden.fortechgps.com.br/webmail">WEBMAIL</a></li>
                                    <li><a target="_blank" href="/Login">ADMINISTRATIVO</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <div class="social">
                            <a href="https://pt-br.facebook.com/GrupoGoldenService/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/golden_service/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://youtube.com/channel/UCFJ-1FYY252OQTUdqcHOvew" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.main-header header-style-one -->

        @yield('corpo')

        <footer class="site-footer">
            <div class="main-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget about-widget">
                                <a href="/" class="footer-logo">
                                    <img src="/images/resources/footer-logo-1-1.png" alt="awesome image">
                                </a>
                                <p>H?? mais de uma d??cada ajudamos pessoas a viverem tranquilamente. Garantimos seguran??a com confiabilidade. Mantemos o foco na qualidade do atendimento e contribu??mos para um mundo mais seguro.</p>
                                <div class="social-block">
                                    <a href="https://pt-br.facebook.com/GrupoGoldenService/" target="_blank"><i class="fa fa-facebook"></i></a>
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
                                    <li class="current"><a href="/">Home</a></li>
                                    <li><a href="/Sobre">Sobre</a></li>
                                    <li><a href="#">Servi??os</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Rastreamento Veicular</a></li>
                                            <li><a href="#">Seguro</a></li>
                                            <li><a href="#">Bateria Moura</a></li>
                                            <li><a href="#">Assist??ncia Veicular</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                    <li><a href="/Contato">Contato</a></li>
                                    <li><a href="#">??rea do Cliente</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Rastreamento</a>
                                                <ul class="sub-menu">
                                                    <li><a target="_blank" href="https://sistema.getrak.com.br/goldenservice/">PLANO TOP</a></li>
                                                    <li><a target="_blank" href="http://ap3.stc.srv.br/webcliente/goldenservice/login">PLANO ECON??MICO</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li><a href="/FAQ">FAQ - D??vidas Frequentes</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                </ul><!-- /.links-lists -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget works-widget">
                                <div class="footer-widget-title">
                                    <h3>Facebook </h3>
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGrupoGoldenService%2F&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=348801248988519" width="340" height="331" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>                                </div><!-- /.footer-widget-title -->
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

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/theme.js"></script>
</body>

<script type="text/javascript">(function(n,r,l,d){try{var h=r.head||r.getElementsByTagName("head")[0],s=r.createElement("script");s.defer=true;s.setAttribute("type","text/javascript");s.setAttribute("src",l);n.neuroleadId=d;h.appendChild(s);}catch(e){}})(window,document,"https://cdn.leadster.com.br/neurolead/neurolead.min.js", 62155);</script>

</html>
