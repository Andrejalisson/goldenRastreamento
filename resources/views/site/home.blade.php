@extends('site.templates.site')

@section('css')
@endsection

@section('corpo')
        <div class="main-banner-wrapper">
            <section class="banner-style-one owl-theme owl-carousel no-dots">
                <div class="slide slide-one" style="background-image: url(images/slider/slider-1-1.jpg);"></div>
                <div class="slide slide-two" style="background-image: url(images/slider/slider-1-2.jpg);"></div>
                <div class="slide slide-three" style="background-image: url(images/slider/slider-1-3.jpg);"></div>
                <div class="slide slide-four" style="background-image: url(images/slider/slider-1-4.jpg);"></div>
            </section>
        </div>

        <section class="offer-style-one">
            <div class="container">
                <div class="title-block">
                    <span class="tag-line">POR QUE A GOLDEN SERVICE?</span>
                    <h2>MOTIVOS PARA  ESCOLHER A GENTE</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="0ms">
                            <div class="icon-block">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <h3><a href="#">Atendimento<br>Diferenciado</a></h3>
                            <p>Buscamos sempre adaptar nosso atendimento de acordo com as necessidades dos nossos clientes, com objetivo de entregar soluções ainda mais adequadas e pontuais.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="500ms">
                            <div class="icon-block">
                                <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            </div>
                            <h3><a href="#">Soluções<br>Inteligentes</a></h3>
                            <p>Sempre pensando em tornar sua vida mais tranquila, oferecemos rastreamento, assistência veicular 24h, seguro veicular, e a  bateria Moura com as melhores condições de compra!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="1000ms">
                            <div class="icon-block">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <h3><a href="#">Empresa de<br>Propósito</a></h3>
                            <p>Há mais de 10 anos nosso propósito é ajudar você a ter uma vida com mais segurança e tranquilidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="content-block my-auto">
                            <div class="title-block">
                                <span class="tag-line">Sobre a Golden Service</span><!-- /.tag-line -->
                                <h2>Desde 2008</h2>
                            </div><!-- /.title-block -->
                            <p>Com mais de 10 anos de existência, a Golden Service vem garantindo segurança, com confiabilidade para os seus clientes. Com foco na qualidade do atendimento, contribuímos para o aumento da segurança daquilo que é importante para você.</p><br>

                            <a href="#" class="more-btn">Entrar em contato</a>
                        </div><!-- /.content-block -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="image-block">
                            <img src="images/resources/story-1-1.png" alt="Awesome Image" />
                        </div><!-- /.image-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-style-one -->
        <section class="mission-style-one wow fadeInUp" data-wow-duration="1300ms">
            <div class="container">
                <div class="inner-container">
                    <div class="single-mission-one">
                        <div class="count-block">
                            01
                        </div><!-- /.count-block -->
                        <h3>Missão</h3>
                        <p>Melhorar a qualidade de vida dos nossos <br>clientes com soluções customizadas em segurança.</p>
                    </div><!-- /.single-mission-one -->
                    <div class="single-mission-one">
                        <div class="count-block">
                            02
                        </div><!-- /.count-block -->
                        <h3>Visão</h3>
                        <p>Crescer de forma responsável, buscando a <br> melhoria continua atendendo diversos setores do mercado.</p>
                    </div><!-- /.single-mission-one -->
                    <div class="single-mission-one">
                        <div class="count-block">
                            03
                        </div><!-- /.count-block -->
                        <h3>Valores</h3>
                        <p><strong>Sinceridade e Confiança</strong> <br> Somos transparentes, trabalhamos com a verdade; <br>
                        <strong>Meritocracia e autorresponsabilidade</strong> <br> Você é os seus resultados <br>
                        <strong>Gratidão e Felicidade</strong> <br> Ser grato por tudo e felizes na jornada, sempre. <br>
                        <strong>Garra e Consistência</strong> <br> O que precisa ser feito, será feito. <br>
                        </p>
                    </div><!-- /.single-mission-one -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.mission-style-one -->
        <section class="cta-style-one text-center">
            <div class="container">
                <div class="title-block">
                    <span class="tag-line">Golden Service</span><!-- /.tag-line -->
                    <h2>Sua Vida Mais Segura</h2>
                </div><!-- /.title-block -->
                <p>Com a Golden Service você vive com mais tranquilidade <br>e a certeza de que está protegido</p>
                <a href="https://wa.me/5585985214611" target="_blank" class="cta-btn">Solicite um orçamento</a>
            </div><!-- /.container -->
        </section><!-- /.cta-style-one -->
        <section class="service-style-one">
            <div class="container">
                <div class="upper-block">
                    <div class="title-block">
                        <span class="tag-line">Serviços</span><!-- /.tag-line -->
                        <h2>O que oferecemos?</h2>
                    </div><!-- /.title-block -->
                    <div class="carousel-btn-block service-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="cameron-icon-left-arrow"></i></span>
                        <span class="carousel-btn right-btn"><i class="cameron-icon-right-arrow"></i></span>
                    </div><!-- /.carousel-btn-block service-carousel-btn -->
                </div><!-- /.upper-block -->
                <div class="services-carousel-one">
                    <div class="item">
                        <div class="single-service-one">
                            <div class="image-block">
                                <img src="images/services/service-1-1.jpg" alt="Imagem de rastreamento" />
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <h3><a href="/Servico/RastreamentoVeicular">Rastreamento Veicular</a></h3>
                                <p>Com nossa tecnologia de rastreamento para veículos, você pode saber a localização, bloquear/desbloquear, e contar com alertas antifurto, que podem ser ativados no app baixado no seu celular.   Receba uma notificação quando seu veículo tiver a ignição ligada ou quando ultrapassar uma distância de 100 m. Em caso de roubo ou furto, o rastreamento facilita a localização e a recuperação. Garantimos a você menos preocupação e mais segurança com seu bem.</p>
                                <a href="/Servico/RastreamentoVeicular" class="more-btn">Ver mais.</a><!-- /.more-btn -->
                            </div><!-- /.text-block -->
                        </div><!-- /.single-service-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="item">
                        <div class="single-service-one">
                            <div class="image-block">
                                <img src="images/services/service-1-2.jpg" alt="Imagem de Seguro veicular" />
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <h3><a href="/Servico/Seguro">Seguro</a></h3>
                                <p>Somos franqueado da Bidon Corretora de Seguros autorizada pela SUSEP, e por meio dela, temos parceria com mais de 30 seguradoras do país! Permitindo encontrarmos um seguro para seu veículo que atenda as suas necessidades e ao seu bolso!</p>
                                <a href="/Servico/Seguro" class="more-btn">Ver mais.</a><!-- /.more-btn -->
                            </div><!-- /.text-block -->
                        </div><!-- /.single-service-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="item">
                        <div class="single-service-one">
                            <div class="image-block">
                                <img src="images/services/service-1-3.jpg" alt="Awesome Image" />
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <h3><a href="/Servico/AssistenciaVeicular">Assistência Veicular 24h</a></h3>
                                <p>Por todo o Brasil e com funcionamento 24 horas por dia, você pode contar com soluções para imprevistos com seu veículo, como: Reboque, Chaveiro, Mecânico, Troca de Pneu Furado e muito mais! Além disso, conte com uma central 0800 de atendimento 24h/7dias.</p>
                                <a href="/Servico/AssistenciaVeicular" class="more-btn">Ver mais.</a><!-- /.more-btn -->
                            </div><!-- /.text-block -->
                        </div><!-- /.single-service-one -->
                    </div><!-- /.col-lg-4 -->
                    <div class="item">
                        <div class="single-service-one">
                            <div class="image-block">
                                <img src="images/services/service-1-4.jpg" alt="Awesome Image" />
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <h3><a href="/Servico/BateriaMoura">Bateria Moura</a></h3>
                                <p>Precisando trocar a bateria do seu veículo? Oferecemos a melhor bateria do mercado, e a mais vendida do país! Adquira Bateria Moura  com as melhores condições de pagamento, e se preferir, instalamos em sua residência!</p>
                                <a href="/Servico/BateriaMoura" class="more-btn">Ver mais.</a><!-- /.more-btn -->
                            </div><!-- /.text-block -->
                        </div><!-- /.single-service-one -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-style-one -->

        <section class="testimonials-style-one">
            <div class="container">
                <div class="title-block text-center">
                    <span class="tag-line">Reconhecimento</span><!-- /.tag-line -->
                    <h2>O que falam da Golden Service?</h2>
                </div><!-- /.title-block -->
                <div class="owl-carousel owl-theme testi-carousel-one">
                    <div class="item">
                        <div class="single-testimonials-one">
                            <div class="image-block">
                                <img src="images/resources/testi1-1.jpg" alt="awesome image">
                            </div><!-- /.image-block -->
                            <p>Sou Cilene Novais e eu sou cliente da Golden Service. Aproveite a oportunidade para colocar seu rastreamento! Eu acabei de colocar na minha moto, mas eu já tinha no meu carro e tem um excelente atendimento, além das pessoas que te recebem bem aqui, eu não tenho do que reclamar, super indico a Golden Service!</p>
                            <h3>Cilene Novais</h3>
                        </div><!-- /.single-testimonials-one -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="single-testimonials-one">
                            <div class="image-block">
                                <img src="images/resources/testi1-2.jpg" alt="awesome image">
                            </div><!-- /.image-block -->
                            <p>Desde 2019 eu estou aqui com a Golden, estou aqui pela excelência do atendimento e gosto bastante! Eu já indiquei várias pessoas! Gosto da Golden porquê me sinto bem acolhido pelos profissionais e pelo atendimento no momento que a gente precisa.</p>
                            <h3>Danilo de Almeida </h3>
                        </div><!-- /.single-testimonials-one -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="single-testimonials-one">
                            <div class="image-block">
                                <img src="images/resources/testi1-3.jpg" alt="awesome image">
                            </div><!-- /.image-block -->
                            <p>Eu me sinto mais segura, maravilhada, e só quero agradecer porquê é um serviço de qualidade! Eu já tenho 1 ano e eu desejo esse tipo de serviço para todo mundo que venha ter condições de ter! É muito seguro, muito bom, a gente fica mais despreocupada! Tem qualidade! Eu nunca tive nenhum tipo de problema. Sempre que alguém está no carro, eu sei onde e como está! É maravilhoso! Tem um atendimento excelente! A nota que dou para essa empresaé 10! Muito obrigada gente! Que vocês continuem com essa qualidade de serviço e esse atendimento maravilhoso!</p>
                            <h3>Amélia Santos</h3>
                        </div><!-- /.single-testimonials-one -->
                    </div><!-- /.item -->
                </div><!-- /.owl-carousel owl-theme testi-carousel-one -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-style-one -->
@endsection

@section('js')
@endsection

@section('script')
@endsection
