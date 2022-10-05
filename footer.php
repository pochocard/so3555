        <!-- FOOTER -->
        <footer>
            <div class="datos_footer row">
                <ul class="hide-for-small">
                    <li><div class="iconos icon-bubble2"></div><a href="mailto:salaverry@inversionesaguila.com">Correo:<br>salaverry@inversionesaguila.com.pe</a></li>
                    <li><div class="iconos icon-phone-in-talk"></div><a href="tel:012642862">Teléfonos:<br>264 2862</a> / <a href="tel:01955111555">955 111 555</a></li>
                    <li><div class="iconos icon-location-on"></div><a href="so3555.php#ubicacion_ancla">Sala de ventas:<br>Av. Santiago Salaverry 3555 - San Isidro</a></li>
                    <li class="logo_footer"><a href="aguila_inmobiliaria.php"><img src="img/logotipo_footer.png"></a></li>
                </ul>
                <!-- MOBILE -->
                <ul class="footer_mobile hide-for-medium hide-for-large hide-for-xlarge">
                    <li><div class="iconos icon-bubble2"></div><a href="mailto:salaverry@inversionesaguila.com">Correo:<br>salaverry@inversionesaguila.com.pe</a></li>
                    <li><div class="iconos icon-phone-in-talk"></div><a href="tel:012642862">Teléfonos:<br>264 2862</a> / <a href="tel:01955111555">955 111 555</a></li>
                    <li><div class="iconos icon-location"></div><a href="so3555.php#ubicacion_ancla">Sala de ventas:<br>Av. Santiago Salaverry 3555 - San Isidro</a></li>
                    <li class="logo_footer"><a href="aguila_inmobiliaria.php"><img src="img/logotipo_footer.png"></a></li>
                </ul>
            </div>
        </footer>

        <!-- CODE -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
          $(document).foundation();
        </script>
        
        <script src="js/blur.js"></script>
        <script>
            $('.barras_fondo').blurjs({
                radius: 10
            }); 
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-61121077-1', 'auto');
            ga('send', 'pageview');
        </script>

        <!-- Google Tag Manager -->
        <noscript>
            <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NHWH46"
                height="0" width="0" style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NHWH46');
        </script>

        <!-- Google Code para etiquetas de remarketing -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 956878793;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/956878793/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>

        <!-- Facebook Conversion Code for Aguila -->
        <script>(function() {
          var _fbq = window._fbq || (window._fbq = []);
          if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
          }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6018845519659', {'value':'0.01','currency':'USD'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6018845519659&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

        <!-- RESPONSIVE SLIDER -->

        <script src="js/responsiveslides.min.js"></script>
        <script>
          $(function() {
            $(".rslides").responsiveSlides({
              auto: true,             // Boolean: Animate automatically, true or false
              speed: 500,             // Integer: Speed of the transition, in milliseconds
              timeout: 5800,          // Integer: Time between slide transitions, in milliseconds
              pager: false,           // Boolean: Show pager, true or false
              nav: false,             // Boolean: Show navigation, true or false
              random: false,          // Boolean: Randomize the order of the slides, true or false
              pause: false,           // Boolean: Pause on hover, true or false
              pauseControls: true,    // Boolean: Pause when hovering controls, true or false
              prevText: "Previous",   // String: Text for the "previous" button
              nextText: "Next",       // String: Text for the "next" button
              maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
              navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
              manualControls: "",     // Selector: Declare custom pager navigation
              namespace: "rslides",   // String: Change the default namespace used
              before: function(){},   // Function: Before callback
              after: function(){}     // Function: After callback
            });
          });
        </script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- FancyBox -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(".various").fancybox({
                    maxWidth    : 800,
                    maxHeight   : 600,
                    fitToView   : false,
                    width       : '70%',
                    height      : '70%',
                    autoSize    : false,
                    closeClick  : false,
                    openEffect  : 'none',
                    closeEffect : 'none'
                });
            });

            $(document).ready(function() {
                $("#single_1").fancybox({
                      helpers: {
                          title : {
                              type : 'float'
                          }
                      }
                  });

                $("#single_2").fancybox({
                    openEffect  : 'elastic',
                    closeEffect : 'elastic',

                    helpers : {
                        title : {
                            type : 'inside'
                        }
                    }
                });

                $("#single_3").fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    helpers : {
                        title : {
                            type : 'outside'
                        }
                    }
                });

                $("#single_4").fancybox({
                    helpers : {
                        title : {
                            type : 'over'
                        }
                    }
                });
            });

            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none'
                });
            });

            $(".fancybox").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',
                iframe : {
                    preload: false
                }
            });
        </script>

<!-- MAP -->

<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(-12.10259,-77.057257),
            zoom: 18,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: true,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var mapElement = document.getElementById('AguilaInmobiliaria');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['SO 3555', 'undefined', '2642862', 'salaverry@inversionesaguila.com.pe', 'http://www.aguilainmobiliaria.pe/so3555/', -12.1025958, -77.05796190000001, 'http://aguilainmobiliaria.pe/so3555/img/location.png']
        ];
        for (i = 0; i < locations.length; i++) {
if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
if (web.substring(0, 7) != "http://") {
link = "http://" + web;
} else {
link = web;
}
     }

}
</script>
<style>
    #AguilaInmobiliaria {
        height:380px;
        width:950px;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>

    </body>
</html>
