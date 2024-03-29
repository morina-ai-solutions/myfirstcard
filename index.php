<?php
require_once('phpab.php'); 
$test_A = new phpab('navigation'); // replace by (..,TRUE) to turn off GA tracking and actually SEE variation
$test_A->add_variation('betatest', 'Beta Tester werden');
$test_A->add_variation('herewego', 'Los geht\'s');


?><!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>myfirstcard | Das clevere Taschengeld</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- One CSS file that rules them all -->
        <link href="css/main.css" rel="stylesheet">

        <link rel="shortcut icon" href="images/favicon.ico">
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46920751-1', 'myfirstcard.de');
        ga('require', 'linkid', 'linkid.js');
        ga('send', 'pageview');
        </script>
        <!-- klappt noch nicht, glaub ich zumindest -->
        <script>
            $('#submit').on('click', function() {
                    ga('send', 'event', 'button', 'click');
            });
        </script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
  
    
    <!-- Scrollspy set in the body -->
    <body id="home" data-spy="scroll" data-target=".main-nav" data-offset="73">


    <!--///////////////////////////////////////// PARALLAX BACKGROUND ////////////////////////////////////////-->

    <!-- image is set in the CSS as a background image -->
    <div id="parallax"></div>

    <!--///////////////////////////////////////// end PARALLAX BACKGROUND ////////////////////////////////////////-->


    
    <!--/////////////////////////////////////// NAVIGATION BAR ////////////////////////////////////////-->

    <section id="header">

        <nav class="navbar navbar-fixed-top" role="navigation">

            <div class="navbar-inner">
                <div class="container">

                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#navigation"></button>

                    <!-- Logo goes here  -->
                    <a href="#home" class="navbar-brand"><img src="images/logo.png" alt="myfirstcard | Das clever Taschengeld" title="myfirstcard | Das clever Taschengeld"></a>


                    <div class="collapse navbar-collapse main-nav" id="navigation">


                        <ul class="nav pull-right">

                            <!-- Menu items go here -->
                            <li class="active hidden"><a href="#home">Home</a></li>
                            <li><a href="#whymfc">Warum myfirstcard?</a></li>
                            <li><a href="#newsletter">{phpab navigation}Los geht's!{/phpab navigation}</a></li>
                            <li><a href="#howitworks">Wie funktioniert es?</a></li>
                            <li><a href="#info">Wer wir sind</a></li>
                            <li><a href="#faq">FAQ/Kontakt</a></li>
                            <li><a href="#footer">Social Media</a></li>
        
                            <!-- If you want sub-menu items, do them like this
                            <li>
                                <ul>
                                  <li><a href="#">Item 1</a></li>
                                  <li><a href="#">Item 2</a></li>
                                </ul>
                            </li> 
                            You just need to delete these comment lines -->
                        </ul>

                    </div><!-- /nav-collapse -->
                </div><!-- /container -->
            </div><!-- /navbar-inner -->
        </nav>

    </section>

    <!--//////////////////////////////////////// end NAVIGATION BAR ////////////////////////////////////////-->

    

    <!--/////////////////////////////////////// HERO SECTION ////////////////////////////////////////-->

    <section id="hero">

        <div class="container">
            <div class="row">

                <div class="col-md-6 intro">
                    <img src="images/logo.png" alt="myfirstcard | Das clever Taschengeld" title="myfirstcard | Das clever Taschengeld">
                    <p class="lead">Kann Ihr Taschengeld Ihnen schon sagen, wo es ausgegeben wurde?</p>
                    <a href="#newsletter" class="btn btn-hg btn-primary">Seien Sie einer der ersten Tester</a>
                </div>

            </div><!-- /row -->
        </div><!-- /container -->

    </section>

    <!--///////////////////////////////////////////////// end HERO SECTION ////////////////////////////////////////-->



    <!--/////////////////////////////////////// WHYMFC SECTION ////////////////////////////////////////-->

    <section id="whymfc">

        <div class="container">

            <header>
                <h1>Warum myfirstcard?</h1>
                <p class="lead">myfirstcard ist die clevere Bezahlkarte mit der Kinder und Jugendliche unter Ihrer Anleitung den bewussten Umgang mit Geld lernen.</p>
            </header>

            <div class="row">
                
                <!-- Feature Item 1 -->
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <img src="images/icons/key.svg" alt="" title="" />
                    </div>
                    <h4>Sicherheit an erster Stelle</h4>
                    <p>Wir setzen unser Vertrauen voll und ganz auf die jahrelange Erfahrung von VISA® und etablierten Produktpartnern wie der Wirecard Bank AG©</p>
                </div>

                <!-- Feature Item 2 -->
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <img src="images/icons/magic.svg" alt="" title="" />
                    </div>
                    <h4>Kinderleichte Einrichtung</h4>
                    <p>Treten Sie myfirstcard bei, setzen ein paar Grundeinstellungen und schon sind Sie fertig. Sie werden staunen, wie schnell Ihre Kinder ein tolles Spar- und Ausgabeverhalten erlernen.</p>
                </div>

                <!-- Feature Item 3 -->
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <img src="images/icons/card.svg" alt="" title="" />
                    </div>
                    <h4>Weltweit einsetzbar</h4>
                    <p>Online unabdingbar und auch lokal immer verbreiteter. Ihre Kinder können die myfirstcard an allen Stellen, an denen das VISA® Logo zu sehen ist, nutzen. </p>
                </div>

            </div><!-- /row -->
                <header>
                        Tragen Sie sich schon heute in die kostenlose <a href=#newsletter>Voranmeldung</a> ein. Wir informieren Sie, sobald unsere Testphase beginnt und Sie zu den ersten Testern gehören dürfen.
                </header>
        </div><!-- /container -->

    </section>

    <!--/////////////////////////////////////// end WHYMFC SECTION ////////////////////////////////////////-->

    <!--//////////////////////////////////////// NEWSLETTER SECTION ////////////////////////////////////////-->

    <section id="newsletter">

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <p class="lead">Wir sind fast soweit, sind Sie es auch?*</p>
                </div>
                
                <div class="col-md-6">

                    <!--////////// Newsletter Form //////////-->
                    <form id="newsletter-signup">
                        <div class="input-group">
                          <input type="text" name="e-mail" id="e-mail" class="form-control input-hg">
                          <span class="input-group-btn">
                            <button class="btn btn-inverse btn-hg" type="submit" name="submit">Kostenlos voranmelden</button>
                          </span>
                        </div><!-- /input-group -->
                    </form>
                    <!--////////// end of Newsletter Form ///////////-->

                     <div id="error-info"></div><!-- Error notification for newsletter signup form -->

                </div>

            </div><!-- /row -->
                <div class="col-md-12">
                    <p class="sub">*Wir hassen Spam. Ihre E-Mail Adresse ist bei uns sicher aufgehoben, versprochen. </p>
                </div>
                
        </div><!-- /container -->
    
    </section>
    <!--//////////////////////////////////////// end NEWSLETTER SECTION ////////////////////////////////////////-->

    <!--/////////////////////////////////////// HOWITWORKS SECTION ////////////////////////////////////////-->
    <section id="howitworks">
        <!--/////////// And here's the gray background section! //////////-->
        <div class="howitworks-section-white"> 
            <div class="container">

            <header>
                <h1>Wie funktioniert die myfirstcard?</h1>
                <p class="lead"> Die myfirstcard ist eine VISA Prepaid Karte, deren Ausgaberegeln und Grenzen Sie bestimmen. Da nur aufgeladenes Geld ausgegeben werden kann, sind Sie sicher vor Überziehungen und Schulden.</p>
            </header>

            </div> 
        </div>



        <!-- /howitworks-section-gray -->
        </section>
    <!--/////////////////////////////////////// end HOWITWORKS SECTION ////////////////////////////////////////-->





    <!--/////////////////////////////////////// INFO SECTION ////////////////////////////////////////-->

    <section id="info">
        <div class="info-section-gray"> 
            <div class="container">

                <header>
                        <h1>Wer steckt hinter myfirstcard?</h1> 
                        <p class="lead">Wir sind eine engagierte Gruppe von Studenten der Universität zu Köln und Hamburg. myfirstcard ist aus einem Forschungsprojekt des Masters Information Sciences unter der fachkundigen Leitung von <a href="http://www.wim.uni-koeln.de/schoder.html?&L=0" target="_blank">Prof. Dr. Detlef Schoder</a> und dessen Team entstanden.</p>
                </header>

            </div><!-- /container --> 
        </div><!-- /info-section-gray -->
        
    </section>

    <!--/////////////////////////////////////// end INFO SECTION ////////////////////////////////////////-->




    <!--/////////////////////////////////////// FAQ SECTION ////////////////////////////////////////-->

    <section id="faq">

        <div class="container">

            <header>
                <h1>F.A.Q.</h1>
                <p class="lead">Sie haben noch Fragen? Vielleicht finden Sie etwas in den bisher am häufigsten gestellten Fragen.</p>
            </header>

            <div class="row">

                <div class="col-md-6">

                    <!--////////// Accordion Toggle //////////-->
                    <div class="panel-group" id="accordion">
                     
                        <!-- PANEL 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Welche Funktionalitäten sind noch geplant? 
                                    </a>
                                </h4>
                            </div>
                            
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Push Nachrichten auf Ihr Handy beim Bezahlvorgang, Verwandte einladen um zur myfirstcard Ihres Kindes beizutragen, und vieles mehr...</p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- PANEL 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Kreditkarten an Kinder, können die sich nicht verschulden? 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Natürlich nicht. Die myfirstcard ist eine Prepaid Kreditkarte. Nur das vorhandene Guthaben kann ausgegeben werden. </p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Warum kann ich die myfirstcard noch nicht bestellen? 
                                    </a>
                                </h4>
                            </div>
                            
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Wir befinden uns bisher in der Entwicklungsphase und müssen noch einige Vorkehrungen treffen, damit Sie ein voll funktionsfähiges, sicheres Produkt in den Händen halten können. Da machen wir keine Kompromisse.</p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            Ist mein Kind nicht noch zu jung für eine Kreditkarte?
                                    </a>
                                </h4>
                            </div>
                            
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sobald Sie Ihrem Kind Taschengeld geben, lohnt es sich über die myfirstcard nachzudenken. Sie ist wie Bargeld, nur sicherer. Die Karte kann bei Verlust in Sekundeseile gesperrt werden. Es kann auch nicht mehr ausgegeben werden, als auf der Karte verfügbar ist. Teure Verluste bleiben so erspart.</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!--////////// end of Accordion Toggle //////////-->              

                    <div class="alert">
                        
                        <p class="lead">Unsere Kontaktdaten</p>
                        <div class="row">
                          
                          <div class="col-md-4 col-xs-6 text-left">
                            <strong>Addresse</strong>
                          </div>
                          
                          <div class="col-md-8 col-xs-6">
                            <address>
                                    Pohligstraße 1<br>
                                    50969 Köln<br> 
                            </address>
                          </div>

                        </div><!-- /row -->

                        <div class="row">

                          <div class="col-md-4 col-xs-6 text-left">
                                <strong>E-Mail</strong>
                          </div>

                          <div class="col-md-8 col-xs-6">
                                <address><a href="mailto:info@myfirstcard.de">info@myfirstcard.de</a></address>
                          </div>

                        </div><!-- /row -->

                    </div><!-- /alert -->

                </div><!-- /col-md-6 -->

                <div class="col-md-6">

                    <div class="row contact-intro">
                        <div class="col-md-3 text-right"><img src="images/icons/support.svg" alt="" title="" /></div>
                        <div class="col-md-9"><p class="lead">Sie haben nicht gefunden was Sie brauchen? Lassen Sie uns einen Einzeiler zukommen.</p></div>                        
                    </div>

                    <!--////////// CONTACT FORM //////////-->
                    <form id="contact-form">
                        <input type="text" id="name" name="name" class="form-control input-hg" placeholder="Ihr Name..." />
                        <input type="text" id="email" name="email" class="form-control input-hg" placeholder="Ihre E-Mail Adresse..." />
                        <textarea class="form-control input-hg" rows="4" id="message" name="message" placeholder="Ihre Nachricht..."></textarea>
                        <button type="submit" class="btn btn-inverse btn-hg btn-block" name="submit">Abschicken</button>
                    </form>

                     <div id="contact-error"></div>
                    <!--////////// end CONTACT FORM ///////////-->

                </div><!-- /col-md-6-->
                
            </div>
        </div>

    </section>

    <!--/////////////////////////////////////// end FAQ SECTION ////////////////////////////////////////-->



    <!--//////////////////////////////////////// TWITTER SECTION ////////////////////////////////////////-->

    <section id="twitter">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <img src="images/icons/chat.svg" alt="" title="" />
                    <p class="lead"><span id="tweets-feed" class="lead"></span></p>
                </div>
            </div>
        </div>
    </section>

    <!--//////////////////////////////////////// TWITTER SECTION ////////////////////////////////////////-->



    <!--//////////////////////////////////////// FOOTER SECTION ////////////////////////////////////////-->
    <section id="footer">
        <div class="bottom-menu-inverse">

            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                            <p>Copyright © 2014 <a href="http://www.myfirstcard.de">www.myfirstcard.de</a> <br>
                            <a href="impressum.html">Impressum</a>
                            <a href="disclaimer.html">Disclaimer</a>
                            <a href="datenschutz.html">Datenschutz</a>
                            </p>
                        
                    </div>

                    <div class="col-md-6 social">
                        <ul class="bottom-icons">
                            <li>
                              <a href="https://www.facebook.com/myfirstcard" target="_blank" class="fui-facebook"></a>
                            </li>
                             <li>
                              <a href="http://twitter.com/MyfirstcardDe" class="fui-twitter" target="_blank"></a>
                            </li>
                            <!--<li> <a href="#" class="fui-pinterest"></a> </li>-->
                             <li>
                              <a href="https://plus.google.com/+MyfirstcardDe" class="fui-googleplus" target="_blank"></a>
                            </li>
                             <!--<li> <a href="#" class="fui-dribbble"></a> </li>
                             <li> <a href="#" class="fui-vimeo"></a> </li> -->
                          </ul>                      
                    </div>
                </div>
            
            </div><!-- /row -->
        </div><!-- /container -->

    </section>

    <!--//////////////////////////////////////// end FOOTER SECTION ////////////////////////////////////////-->



    <!--//////////////////////////////////////// JAVASCRIPT LOAD ////////////////////////////////////////-->

    <!-- Feel free to remove the scripts you are not going to use -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.fitvids.min.js"></script>
    <script src="assets/twitter/jquery.tweet.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/custom.js"></script>

    <!--//////////////////////////////////////// end JAVASCRIPT LOAD ////////////////////////////////////////-->

  </body>
</html>
