<footer id="footer" class="clearfix">
    <div class="container-fluid kontakti-wrapper no-padding">
        <div class="row">

            <div class="col-md-4 col-xs-12 hidden-xs hidden-sm ">
                <div class="" id="map">
                    <h4>POSJETITE NAS</h4>
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26811.59706507955!2d13.618519388855741!3d45.06100784992658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477cc0f0114319cb%3A0x36783d683a12953!2sWindsurf+and+stand+up+paddle+center+Rovinj!5e0!3m2!1sen!2shr!4v1560765731444!5m2!1sen!2shr"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 hidden-xs  ">
                <h4 class="text-center ">POŠALJITE NAM UPIT</h4>

                <form role="form" method="post" id="reused_form">
                    <div class="form-group">
                        <input placeholder="Name" type="text" class="form-control" id="name" name="name" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <input placeholder="Email" type="email" class="form-control" id="email" name="email" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message"
                            maxlength="6000" rows="5"></textarea>
                    </div>
                    <div class="row" style="margin-bottom:30px;">
                        <div class="col-sm-5">
                            <img src="captcha.php" id="captcha_image" />
                            <br />
                            <a id="captcha_reload" href="#">reload</a>
                        </div>
                        <div class="col-sm-6">
                            <input placeholder="Unesite kod s slike ovdje" type="text" class="form-control" required
                                id="captcha" name="captcha">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn  btn-default" id="btnContactUs">SEND</button>
                    </div>

                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h3 class="bg-success">Your message has been sent! <br> We will contact you shortly! </h3>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h3 class="bg-danger">Error</h3>Try again or refresh the page!
                </div>
            </div>
            <!-- map visible xs only -->
            <div class="col-md-4 col-xs-12 visible-xs visible-sm">
                <div class="" id="map">
                    <h4>VISIT US</h4>
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d37919.38365075517!2d13.676538514814762!3d45.05790240667062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36783d683a12953!2sWindsurf+and+stand+up+paddle+center+Rovinj!5e0!3m2!1sen!2shr!4v1563817874693!5m2!1sen!2shr"
                            width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 contact-info">
                <h4 class="text-center">
                    KONTAKT
                </h4>

                <ul class="list-unstyled contact-list">
                    <li>
                        <h5> <span class="fa fa-map-marker"></span> MJESTO PRISTANIŠTA BRODA </h5>
                    </li>
                    <li><a href="https://goo.gl/maps/BCngHH2HKN8RS5WS7" target="_blank"
                            class="btn btn-default btn-sm"><span class="fa fa-map-marker"></span> Delfin
                            Dock Station</a> <br>
                        <b class="text-muted">To Windsurf Centar - Red Island</b>
                    </li>
                    <br>
                    <li><a href="https://goo.gl/maps/iinY4j5iNL1tbNKc9" target="_blank"
                            class="btn btn-default btn-sm"><span class="fa fa-map-marker"></span> Mali
                            Mol
                            Trg
                            Maršala Tita</a> <br>
                        <b class="text-muted">To Windsurf Centar - Red Island</b>
                    </li>
                    <br>
                    <li class="">
                        <button id="brod" class="btn btn-default btn-sm" data-toggle="modal" type="button"
                            data-target="#boat"><span class="fa fa-clock-o"></span> BOAT SCHEDULE
                        </button>
                    </li>

                    <hr>

                    <li class="bot-contact">
                        <h5><span class="fa fa-phone"></span> TEL / <span class="fa fa-whatsapp"></span> WHATSAPP -
                            VIBER</h5>
                    </li>
                    <li class="bot-contact"> <a href="tel:+385 (0)922991550"> +385 (0)92 299 1550</a></li>
                    <hr>
                    <li class="bot-contact">
                        <h5><span class="fa fa-envelope-o"></span> EMAIL</h5>
                    </li>
                    <li class="bot-contact">
                        <script TYPE="text/javascript">
                        emailE = ('info@windsurfing-rovinj' + '.com')
                        document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')
                        </script>

                        <noscript>
                            <em>Email address protected by JavaScript.<BR>
                                Please enable JavaScript to contact me.</em>
                        </noscript>
                    </li>
                    <hr>
                    <li>
                        <h5>FOLLOW US</h5>
                    </li>
                    <li>
                        <a class="facebook-modal-link " href="https://www.facebook.com/wsurfrovinj/"
                            target="_blank"><span class="fa fa-facebook fa-2x"></span></a>
                        <a class="instagram-modal-link " href="https://www.instagram.com/windsurfingrovinj/"
                            target="_blank">
                            <span class="fa fa-instagram fa-2x"></span></a>
                    </li>

                </ul>
            </div>
            <div class="col-md-4 col-xs-12 visible-xs ">
                <h4 class="text-center ">Send us an Message!</h4>

                <form role="form" method="post" id="reused_form">
                    <div class="form-group">
                        <input placeholder="Name" type="text" class="form-control" id="name" name="name" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <input placeholder="Email" type="email" class="form-control" id="email" name="email" required
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message"
                            maxlength="6000" rows="5"></textarea>
                    </div>
                    <div class="row" style="margin-bottom:30px;">
                        <div class="col-sm-5">
                            <img src="captcha.php" id="captcha_image" />
                            <br />
                            <a id="captcha_reload" href="#">reload</a>
                        </div>
                        <div class="col-sm-6">
                            <input placeholder="Unesite kod s slike ovdje" type="text" class="form-control" required
                                id="captcha" name="captcha">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn  btn-default" id="btnContactUs">SEND</button>
                    </div>

                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; ">
                    <h3 class="bg-success">Your message has been sent! <br> We will contact you shortly! </h3>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; ">
                    <h3 class="bg-danger">Error</h3>Try again or refresh the page!
                </div>
            </div>
        </div>
    </div>


    <section class="container-fluid" id="partneri2">

        <!-- OWL CAROUSEL -->
        <div id="testimonial-slider-partneri2" class="owl-carousel">
            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.challengersails.com/en/" target="_blank"> <img
                            src="../img/partneri/logo-hot-maui-sails.jpg" alt="challenger sails"
                            class="img-responsive"></a>
                </div>
                <h3 class="testimonial-title">Challenger</h3>
            </div>

            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.flikkaboards.com/" target="_blank"> <img src="../img/partneri/logo-flikka.jpg"
                            alt="flikka" class="img-responsive"></a>
                </div>
                <h3 class="testimonial-title">Flikka Boards</h3>
            </div>
            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.ahd-boards.com/" target="_blank">
                        <img src="../img/partneri/logo-ahd.jpg" alt="ahd" class="img-responsive">
                    </a>
                </div>
                <h3 class="testimonial-title">Ahd Boards</h3>
            </div>
            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.nahskwell-sup.com/" target="_blank"> <img src="../img/partneri/logo-nah.jpg"
                            alt="SUP" class="img-responsive"></a>
                </div>
                <h3 class="testimonial-title">Nahskwell</h3>
            </div>

            <div class="testimonial">
                <div class="pic">
                    <a href="https://www.nautix.com/" target="_blank"> <img src="../img/partneri/logo-nautix.jpg"
                            alt="nautix" class="img-responsive"></a>
                </div>
                <h3 class="testimonial-title">Nautix</h3>
            </div>
            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.caas.si/" target="_blank">
                        <img src="../img/partneri/logo-caas.jpg" alt="Cass" class="img-responsive">
                    </a>
                </div>
                <h3 class="testimonial-title">Caas</h3>
            </div>
            <div class="testimonial">
                <div class="pic">
                    <a href="https://www.oceankayak.com/" target="_blank">
                        <img src="../img/partneri/logo-ocean.jpg" alt="exo" class="img-responsive">
                    </a>
                </div>
                <h3 class="testimonial-title">Ocean kayak</h3>
            </div>
            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.robertoriccidesigns.com/" target="_blank">
                        <img src="../img/partneri/rr-design.jpg" alt="exo" class="img-responsive">
                    </a>
                </div>
                <h3 class="testimonial-title">Roberto Ricci</h3>
            </div>
            <div class="testimonial">
                <div class="pic">
                    <a href="http://www.aquamarina.com/" target="_blank">
                        <img src="../img/partneri/aqua-marina.jpg" alt="exo" class="img-responsive">
                    </a>
                </div>
                <h3 class="testimonial-title">Aqua Marina</h3>
            </div>
        </div> <!-- END OF OWL CAROUSEL -->

    </section>

    <div class="container-fluid" id="footer-bottom">


        <div class="footer-bottom-left"><a href="index.php" target="_self">
                <img src="../img/logo-small-3.png" class="img-responsive" alt="Windsurfing Rovinj logo"></a>
        </div>
        <div class="footer-bottom-center">
            <p class="text-center"><?php echo "$the_sitetitle"; ?> &copy; <span class="hidden-sm">
                    <?php echo date("Y"); ?> </span> </p>
        </div>
        <div class="footer-bottom-right">
            <a href="https://www.cro-webdesign.com/" target="_blank">
                <p class="text-center hidden-xs izradio">POWERED BY:<br>
                    <span class="cw-logo"></span>
                </p>
            </a>
        </div>
    </div>
    </div> <!-- end of container -->
</footer>