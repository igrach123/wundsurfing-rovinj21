<header class="" id="home">
    <div class="container-fluid hidden-xs" id="call">
        <div class="container">

            <a href="tel:+385 (0)92 299 1550"> <span class="fa fa-phone top-phone"></span>
                +385 (0)92 299 1550</a>
            <a href="#top-location" data-target="#top-location" data-toggle="modal" role="button"> <span
                    class="fa fa-map-marker top-map"></span> RED ISLAND
            </a>
            <a class="fb-top " href="https://www.facebook.com/wsurfrovinj/" target="_blank"><span
                    class="fa fa-facebook "></span></a>
            <a class="in-top" href="https://www.instagram.com/windsurfingrovinj/" target="_blank">
                <span class="fa fa-instagram "></span></a>
        </div>
    </div>
    <nav class="navbar navbar-default" data-nav-status="toggle" role="navigation" data-spy="affix" id="myNavbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo navbar-brand" href="index.php" id="logo1"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class=" nav navbar-nav navbar-right">
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#home"
                            class="scroll ">HOME</a></li>
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#services"
                            class="scroll">SERVICES</a></li>
                            <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#galery" class="scroll">GALLERY</a></li>
                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#onama"
                            class="scroll">ABOUT</a></li>
                    

                    <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#footer"
                            class="scroll">CONTACT</a></li>
                    <li class="visible-xs"><a href="tel:+385 (0)92 299 1550"> <span
                                class="fa fa-phone top-phone"></span>
                            +385 (0)92 299 1550</a> </li>
                    <li class="visible-xs"> <a href="#top-location" data-target="#top-location" data-toggle="modal"
                            role="button"> <span class="fa fa-map-marker top-map"></span> RED ISLAND
                        </a> </li>
                    <li class="visible-xs"><a class="fb-top " href="https://www.facebook.com/wsurfrovinj/"
                            target="_blank"><span class="fa fa-facebook "></span></a>
                        <a class="in-top" href="https://www.instagram.com/windsurfingrovinj/" target="_blank">
                            <span class="fa fa-instagram "></span></a></li>
                    <li id="lang-id">
                        <a href="index.php" class="active-lng"> <img src="img/eng-flag.png" alt="en"  ></a>
                        <a href="hr/index.php"> <img src="img/cro-flag.png" alt="hr" class="grayscale"></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-->
    </nav>
    <!-- h1 xs -->
    <h1 class="visible-xs text-uppercase"><?php echo "$the_sitetitle"; ?> <br>
        <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }' class="btn scroll a-down"
            data-animation="animated fadeInUp"> <i class="fa fa-angle-double-down fa-3x" aria-hidden="true"></i></a>
    </h1>
    <!-- touch slide -->
    <?php include "php/touch-slider.php" ?>
</header>