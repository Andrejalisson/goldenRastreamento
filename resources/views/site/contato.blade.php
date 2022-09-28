@extends('site.templates.site')

@section('css')
@endsection

@section('corpo')
<section class="page-title-block text-center">
    <div class="container">
        <h2>Contato</h2>
    </div>
</section>
<section class="contact-info-style-one">
    <div class="container">
        <div class="title-block text-center">
            <span class="tag-line">Contact</span>
            <h2>Contact Info</h2>
        </div>
        <div class="row high-gutter">
            <div class="col-lg-4">
                <div class="single-contact-info-one text-center">
                    <div class="inner-block">
                        <i class="cameron-icon-placeholder"></i>
                        <h3>Onde estamos?</h3>
                        <p>Av. Perímetral, 10 - Parque São José, <br> Fortaleza - CE, 60730-220</p>
                    </div><!-- /.inner-block -->
                </div><!-- /.single-contact-info-one -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="single-contact-info-one text-center">
                    <div class="inner-block">
                        <i class="cameron-icon-smartphone"></i>
                        <h3>Call Us Now</h3>
                        <p>(+48) 564-334-21-22-34 <br> (+48) 564-334-21-25</p>
                    </div><!-- /.inner-block -->
                </div><!-- /.single-contact-info-one -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="single-contact-info-one text-center">
                    <div class="inner-block">
                        <i class="cameron-icon-opened-email-outlined-interface-symbol"></i>
                        <h3>Write Us Now</h3>
                        <p>info@Cameron.com <br> info@example.com</p>
                    </div><!-- /.inner-block -->
                </div><!-- /.single-contact-info-one -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-info-style-one -->
<section class="contact-form-wrapper">
    <div class="container">
        <div class="inner-container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="image-block" style="margin-top: 50px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3382.602168490343!2d-38.58654534876906!3d-3.7969224460883253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74dcb6058d581%3A0xb71b5d416677c03!2sR.%20Raimundo%20Neri%2C%2010%20-%20Parque%20S%C3%A3o%20Jos%C3%A9%2C%20Fortaleza%20-%20CE%2C%2060730-220!5e0!3m2!1spt-BR!2sbr!4v1664317255757!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="contact-form-block my-auto">
                        <div class="title-block">
                            <span class="tag-line">Write Message</span><!-- /.tag-line -->
                            <h2>Get In Touch</h2>
                        </div><!-- /.title-block -->
                        <form action="inc/sendemail.php" class="contact-form-one contact-form-validated">
                            <input type="text" name="name" placeholder="Your Name">
                            <input type="text" name="email" placeholder="Your Email">
                            <textarea placeholder="Your Message" name="message"></textarea>
                            <button type="submit">Submit Now</button>
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
