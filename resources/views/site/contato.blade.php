@extends('site.templates.site')

@section('css')
@endsection

@section('corpo')
<section class="page-title-block text-center" style="background: #222222 url(../images/background/page-title-contato.jpg) center center no-repeat fixed">
    <div class="container">
        <h2>Contato</h2>
    </div>
</section>
<section class="about-style-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex">
                <div class="content-block my-auto">
                    <div class="title-block">
                        <h3>Fale conosco através dos nossos canais de atendimento</h3>
                    </div><!-- /.title-block -->
                    <p>Fale conosco através dos nossos canais de atendimento
                        Se preferir utilize o formulário de contato e envie suas dúvidas, sugestões, elogios, depoimentos e feedbacks para que possamos melhorar cada vez mais.</p>
                        <br>
                    <h5><i class="fa fa-location-arrow" aria-hidden="true"></i> Onde estamos?</h5>
                        <p>Av. Perímetral, 10 - Parque São José, Fortaleza - CE, 60730-220</p>
                    <h5><i class="fa fa-phone" aria-hidden="true"></i> Nosso comercial</h5>
                        <p>85 3065-0917</p>
                    <h5><i class="fa fa-comments-o" aria-hidden="true"></i> Mande uma mensagem para nosso whatsapp</h5>
                        <p>85 98521-4611</p>
                        <p><small>*somente mensagem</small></p>
                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Horário de funcionamento:</h5>
                        <p>seg a sex 8h00 - 17h00</p>
                        <p>aos sábados 8h00 - 12h00</p><br>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Em caso de roubo ou furto e solicitar serviços de assistência veicular 24h (reboque, chaveiro, troca de pneu furado, pane seca), entre em contato com a nossa central 0800 de atendimento 24h
                        <br> 0800 883 6228</p><br>
                    <h5><i class="fa fa-envelope-o" aria-hidden="true"></i> Email de contato</h5>
                        <p>contato@grupogoldenservice.com.br</p>





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
<section class="contact-form-wrapper">
    <div class="container">
        <div class="inner-container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="image-block" style="margin-top: 90px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3382.602168490343!2d-38.58654534876906!3d-3.7969224460883253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74dcb6058d581%3A0xb71b5d416677c03!2sR.%20Raimundo%20Neri%2C%2010%20-%20Parque%20S%C3%A3o%20Jos%C3%A9%2C%20Fortaleza%20-%20CE%2C%2060730-220!5e0!3m2!1spt-BR!2sbr!4v1664317255757!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="contact-form-block my-auto">
                        <div class="title-block">
                            <span class="tag-line">Escreva sua mensagem.</span><!-- /.tag-line -->
                        </div><!-- /.title-block -->
                        <form action="inc/sendemail.php" class="contact-form-one contact-form-validated">
                            <input type="text" name="nome" placeholder="Nome">
                            <input type="text" name="email" placeholder="E-Mail">
                            <input type="text" name="telefone" placeholder="Telefone">
                            <input type="text" name="assunto" placeholder="Assunto">
                            <textarea placeholder="Mensagem" name="mensagem"></textarea>
                            <button type="submit">Enviar</button>
                        </form>
                    </div><!-- /.contact-form-block -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section>
@endsection


@section('js')
@endsection

@section('script')
@endsection
