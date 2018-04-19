<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Con nustros servicios podras compartir la personalidad de tu negocio, a través de una página que te represente de manera única." />
        <meta name="keywords" content="Soluciones en TI" />
        <meta name="author" content="Brandon Axell Ruiz" />

        <title>Seguimiento de geolocalizacion | Soluciones en TI</title>

        <!--  favicon -->
        <link rel="shortcut icon" href="">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
        <link rel="apple-touch-icon-precomposed" href="">


        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        
        <link href="../../assets/css/skins/event.css" rel="stylesheet">

        <!-- Material Icons CSS -->
        <link href="../../assets/fonts/iconfont/material-icons.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="../../assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="../../assets/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="../../assets/owl.carousel/../assets/owl.carousel.css" rel="stylesheet">
        <link href="../../assets/owl.carousel/../assets/owl.theme.default.min.css" rel="stylesheet">
        <!-- flexslider -->
        <link href="../../assets/flexSlider/flexslider.css" rel="stylesheet">
        <!-- materialize -->
        <link href="../../assets/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- shortcodes -->

        <link href="../../assets/css/shortcodes/shortcodes.css" rel="stylesheet">
        <link href="../../assets/css/skins/creative.css" rel="stylesheet">
        
        <!-- Style CSS -->
        <link href="../../assets/css/style.css" rel="stylesheet">


        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../../assets/revolution/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="../../assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="../../assets/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="../js/stylo.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="top" >
    
    <div class="top-bar light-blue visible-md visible-lg">
        <div class="container">
            <div class="row">
                <!-- Social Icon -->
                <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                </div>

                <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                    <li class="mr-20">
                    <a href="mailto:desarrollo@solti.com.mx">
                        <i class="material-icons mr-10"></i>desarrollo@solti.com.mx
                    </a>
                    </li>
                    <li>
                    <a href="tel:(+521)8787902540"><i class="material-icons mr-10"></i>(+521) 878 - 790 - 2540</a>
                    </li>
                </ul>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

<div id="googleMap" >
    <div style="align:center !important; text-align:center !important;">
        <br>
        <b>
        <h2 style="text-align:center !important; font-weight:bold"> Mapa de seguimiento </h2>
        </b>
        <br>
    <img src="images/local-seo-icon.png" style=" width:30%; heigth:auto!important">
    </div>
</div> 
<br>  
<div class="col-md-6 col-md-offset-3">
            <div class="booking-form-wrapper">
        
                <h3 id="namet">Iniciar seguimiento de geolocalizacion</h3>
                <p id="status_a"></p>
                <p id="fallos"></p>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="input-field">
                        <input type="text" name="name" class="validate" id="name" required="">
                        <label for="name" class=""><b>Nombre</b></label>
                        </div>

                    </div><!-- /.col-md-6 -->

                    <button onclick="detener()"  id="fin" disabled=""  class="waves-effect waves-light btn red mt-30">
                       Finalizar localizacion
                    </button> 
                    <button onclick="locations()" id="iniciar"  class="waves-effect waves-light btn green mt-30">
                        Iniciar localizacion
                    </button>   
                    
            </div>
        </div>

<a href="https://solti.com.mx" target="_blank"><p>Visita nuestra pagina principal | Solti 2018 | power by: Brandon Axell Ruiz</p></a>


        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="../../images/soltilgb.png" alt="logo" style="width:30%; height:auto;">
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader --> 


        <!-- jQuery -->
        <script src="../../assets/js/jquery-2.1.3.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/materialize/js/materialize.min.js"></script>
        <script src="../../assets/js/menuzord.js"></script>
        <script src="../../assets/js/bootstrap-tabcollapse.min.js"></script>
        <script src="../../assets/js/jquery.easing.min.js"></script>
        <script src="../../assets/js/jquery.sticky.min.js"></script>
        <script src="../../assets/js/smoothscroll.min.js"></script>
        <script src="../../assets/js/imagesloaded.js"></script>
        <script src="../../assets/js/jquery.stellar.min.js"></script>
        <script src="../../assets/js/jquery.inview.min.js"></script>
        <script src="../../assets/js/jquery.shuffle.min.js"></script>
        <script src="../../assets/owl.carousel/owl.carousel.min.js"></script>
        <script src="../../assets/flexSlider/jquery.flexslider-min.js"></script>
        <script src="../../assets/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="../../assets/js/scripts.js"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="../../assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../../assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery(".materialize-slider").revolution({
                    sliderType:"standard",
                    sliderLayout:"fullscreen",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"off",
                        arrows: {
                            style:"erinyen",
                            enable:true,
                            hide_onmobile:true,
                            hide_under:600,
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder">{{title}}</span> </div>',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:30,
                                v_offset:0
                            }
                        }
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[700,600,500,500],
                    parallax: {
                        type:"mouse",
                        origo:"slidercenter",
                        speed:2000,
                        levels:[2,3,4,5,6,7,12,16,10,50],
                    },

                });
            });
        </script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
         
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="../../assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
   
        
        
    </body>
  
</html>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxdeJGWxHFFwqX5ECjDEL5XOuUjnuYq00&callback=mostrarPosicion">
        </script>
        


     
