<? require_once 'php/contact.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jar Up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

    <style>
        h1, h2, h3, h4 {
            font-family: 'Courier New', serif
        }
    </style>
    <style id="jarItemStyle">
        #jarItems.wrapper-half-right::before {
            background-image: url(img/Jars/MasonJar1.jpg);
            background-size: cover;
        }
    </style>
</head>

<body id="skrollr-body" data-spy="scroll" data-target=".navbar">
<div class="wrapper wrapper-super">
    <!-- ********************************************************** -->
    <!-- ********************* NAVBAR WRAPPER ********************* -->
    <!-- Wrapper with top-fixed Navbar and navbar-brand for your website name/logo etc -->

    <section class="wrapper wrapper-navbar">
        <nav class="navbar navbar-fixed-top" data-0="background-color:rgba(34,34,34,0);"
             data-100="background-color:rgba(34,34,34,1);">
            <div class="container" data-0="padding-top:20px;padding-bottom:20px;"
                 data-100="padding-top:0px;padding-bottom:0px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#skrollr-body" data-0="font-size:1.5em;" data-100="font-size:1em;">Jar
                        Up</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav" style="font-family: 'Courier New',serif">
                        <li><a href="#bck-img1">Wat doen we?</a></li>
                        <li><a href="#bck-img3">Mason Jars</a></li>
                        <li><a href="#TruckerCaps">Trucker Caps</a></li>
                        <li><a href="#contactCustom">Waar vind je ons?</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- ********************* NAVBAR WRAPPER END ********************* -->
    <!-- ************************************************************** -->


    <!-- ******************************************************** -->
    <!-- ********************* HERO WRAPPER ********************* -->
    <!-- A large Wrapper with background image and the extra wrapper-hero class. Use this class to add unique "hero-only" styles. The background image uses the skrollr script for parallax effect -->

    <div class="owl-carousel">
        <? $count = 0;
        if ($handle = opendir('./img/Jars')): ?>
            <? while (false !== ($entry = readdir($handle))): if (strpos($entry, '.') <> 0): $count++; ?>
                <section class="wrapper wrapper-hero wrapper-lg wrapper-bck-image-full"
                         style="background-image: url(<?= "img/Jars/$entry" ?>);"
                         data-start="background-position:0% 50%;" data-end="background-position:0% 0%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Jar Up</h2>
                                <? if ($_POST): ?>
                                    <div class="bg bg-success">
                                        <p style="color: #000; font-family: 'Courier New', serif;">Uw bericht is
                                            verzonden</p>
                                    </div>
                                <? endif; ?>
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-2 text-center">
                                <!--<img src="img/JarUp.png" style="height: 100px; width: auto;" alt="Jar Up Logo">-->
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </section>
            <? endif; endwhile; ?>
        <? else: ?>
        <section class="wrapper wrapper-hero wrapper-lg wrapper-bck-image-full"
                 style="background-image: url(img/Jars/MasonJar1.jpg);"
                 data-start="background-position:0% 100%;" data-end="background-position:0% 0%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Jar Up</h2>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-2 text-center">
                        <!--<img src="img/JarUp.png" style="height: 100px; width: auto;" alt="Jar Up Logo">-->
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </section>
        <section class="wrapper wrapper-hero wrapper-lg wrapper-bck-image-full"
                 style="background-image: url(img/Jars/MasonJar4.jpg);"
                 data-start="background-position:0% 100%;" data-end="background-position:0% 0%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Jar Up</h2>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-2 text-center">
                        <!--<img src="img/JarUp.png" style="height: 100px; width: auto;" alt="Jar Up Logo">-->
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </section>
        <? endif; ?>
    </div>
    <!-- ********************* HERO WRAPPER END ********************* -->
    <!-- ************************************************************ -->


    <!-- ******************************************************** -->
    <!-- ********************* DARK WRAPPER ********************* -->
    <!-- Half colored wrapper with background image on the left - Check the SCSS/CSS file for the section id to change the background image path -->

    <section id="bck-img1" class="wrapper wrapper-primary wrapper-half-left">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                    <h4>Wat doen we?</h4>

                    <p><i>Wij zijn de mini onderneming van 2015-2016 van het Paridaensinstituut te Leuven en we stellen
                            met trots onze mini onderneming Jar Up voor.</i></p>

                    <p>
                        Ook dit jaar gaf Vlajo weer de kans aan de schoolgaande jeugd over heel België om volledig op
                        eigen kracht een bloeiende minionderneming op te starten. Binnen het Paridaensinstituut Leuven
                        werd deze kans toegewezen aan dertien geëngageerde leerlingen uit het zesde jaar die na de
                        intakegesprekken geselecteerd werden. Deze groep bruisende jongeren, onder begeleiding van de al
                        even enthousiaste leerkracht Els Van Meerbeek, creëerden het concept ‘Jar up’.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* DARK WRAPPER END ********************* -->
    <!-- ************************************************************ -->


    <!-- ******************************************************** -->
    <!-- ********************* DARK WRAPPER ********************* -->
    <!-- Half colored wrapper with background image on the right - Check the SCSS/CSS file for the section id to change the background image path -->

    <section id="bck-img2" class="wrapper wrapper-primary wrapper-half-right">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 text-right">
                    <p>
                        Het principe ‘minionderneming’ houdt in dat de leerlingen op het einde van het jaar een volledig
                        en geslaagd project hebben gerealiseerd. Hierbij zijn ze zelf verantwoordelijk voor het concept,
                        het businessplan, de aandeelhoudersvergaderingen, de verkoopmomenten, de boekhouding en al de
                        rest dat bij een serieus bedrijf komt kijken. Consequente inzet en interesse zijn dus zeker en
                        vast vereisten. In ruil voor hun doorzettingsvermogen gedurende het hele jaar krijgen zijn een
                        hoop ervaring mee die zeker zijn nut zal aantonen in hun verdere carrière.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* DARK WRAPPER END ********************* -->
    <!-- ************************************************************ -->


    <!-- ******************************************************** -->
    <!-- ********************* DARK WRAPPER ********************* -->
    <!-- Half colored wrapper with background image on the left - Check the SCSS/CSS file for the section id to change the background image path -->

    <section id="bck-img3" class="wrapper wrapper-dark wrapper-half-left">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                    <h4>Zo veel mogelijkheden</h4>

                    <p>
                        De Jar Up Mason Jars zijn erg veelzijdig. Jar Up probeert steeds nieuwe gevarieerde Mason Jars
                        te creëren want er zijn zoveel mogelijkheden. Jar Up speelt in op verschillende thema's (bv.
                        limited edition kerst jars)
                    </p>
                    <button class="btn btn-sm btn-default" onclick="$('#jarItems').toggle();">Bekijk de Jars</button>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* DARK WRAPPER END ************************ -->
    <!-- *************************************************************** -->

    <!-- ******************************************************** -->
    <!-- ********************* WHITE WRAPPER ********************* -->
    <!-- Half colored wrapper with background image on the left - Check the SCSS/CSS file for the section id to change the background image path -->

    <section id="jarItems" class="wrapper wrapper-primary wrapper-half-right" style="display: none;">
        <div class="container" style="padding-top: 0;">
            <div class="row">
                <div class="col-xs-6" style="margin-top: 50px;">
                    <ul class="list-inline" id="navInJars">
                        <li rel="drinkjar"><a>Drink</a></li>
                        <li rel="moneyjar"><a>Money</a></li>
                        <li rel="zoutjar"><a>Bath salts</a></li>
                        <li rel="badjar"><a>Bath & Shower</a></li>
                        <li rel="tissuejar"><a>Tissues</a></li>
                        <li rel="cactusjar"><a>Cactus</a></li>
                    </ul>
                    <p id="jarOmschrijving"></p>
                    <p><b id="jarPrijs"></b></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* LIGHT WRAPPER END ************************ -->
    <!-- *************************************************************** -->


    <!-- ******************************************************************* -->
    <!-- ********************* CONTRAST WRAPPER BEGINN ********************* -->
    <!-- Fully colored wrapper with brand-primary background color -->

    <section id="TruckerCaps" class="wrapper wrapper-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/TruckerCap2.jpg" alt="Trucker Caps in Parijs" class="img-circle"
                         style="max-height: 300px; width: auto;">

                    <h3>Gepersonaliseerde petten</h3>
                    <h5>(Bij)namen, foto's, quotes, ...</h5>

                    <p>
                        We verkopen gepersonaliseerde petten en dit in drie verschillende kleuren. Jullie kunnen kiezen
                        uit donker blauw, roos en zwart.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/TruckerCap1.jpg" alt="Trucker Caps in Parijs"
                         class="img-circle" style="max-height: 300px; width: auto;">

                    <h3>De zesdejaarspetten</h3>
                    <h5>@Parijs</h5>

                    <p>
                        De zesdejaars van het Paridaensinstituut te Leuven kregen alreeds de kans om onze
                        gepersonaliseerde petten te dragen op hun Parijsreis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* CONTRAST WRAPPER END ********************* -->
    <!-- **************************************************************** -->

    <!-- *********************************************************** -->
    <!-- ********************* PRIMARY WRAPPER ********************* -->
    <!-- Sample content wrapper using some Font Awesome icons -->

    <section id="contactCustom" class="wrapper wrapper-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h4>Contact</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    Lara Boelen, Martijn Geusens, Chloé Humblet, Maarten De Winter, Katrien Huybrecht, Coraline Kusters,
                    Roksolana Mendela, Andreas Meurs, Belma Ozdemir, Lukas Schouteden,
                    Mara Socquet, Linde Tobback en Elise Schrevens
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4><a target="_blank" href="https://www.facebook.com/Jar-Up-1514938125487450/">Facebook</a></h4>
                    <img src="img/facebook_filled.png" alt="Facebook">
                </div>
                <div class="col-md-4">
                    <h4><a target="_blank" href="https://www.instagram.com/jar.up/">Instagram</a></h4>
                    <img src="img/instagram.png" alt="Instagram">
                </div>
                <div class="col-md-4">
                    <h4>Message</h4>
                    <img src="img/message.png" alt="Mail">

                    <p><a href="mailto:Jarup.mini@gmail.com">Jarup.mini@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ********************* PRIMARY WRAPPER END ********************* -->
    <!-- *************************************************************** -->

    <!-- *********************************************************-->
    <!-- ********************* DARK WRAPPER ********************* -->
    <!-- A small and dark content wrapper for some kind of footer content -->

    <section id="contact" class="wrapper wrapper-dark wrapper-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>Contact us</h5>

                    <form method="post" role="form" data-toggle="validator">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName" class="control-label">Naam</label>
                                <input type="text" id="inputName" name="name" class="form-control" required>
                                <div class="help-block with-errors"></div>
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="control-label">Email</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" required>
                                <div class="help-block with-errors"></div>
                                <br>
                            </div>

                            <?
                            $personen = array(
                                "Mara Socquet",
                                "Chloé Humblet",
                                "Coraline Kusters",
                                "Elise Schrevens",
                                "Belma Ozdemir",
                                "Roksolana Mendela",
                                "Martijn Geusens",
                                "Lukas Schouteden",
                                "Maarten De Winter",
                                "Linde Tobback",
                                "Andreas Meurs",
                                "Lara Boelen",
                                "Katrien Huybrecht"
                            );
                            asort($personen);
                            ?>
                            <div class="form-group">
                                <label for="kennis" class="control-label">Wie ken je bij Jar Up?</label>
                                <select name="kennis" id="kennis" class="form-control" required>
                                    <option></option>
                                    <? foreach ($personen as $persoon): ?>
                                        <option value="<?= $persoon ?>"><?= $persoon ?></option>
                                    <? endforeach; ?>
                                </select>
                                <p class="help-block">Je moet hier aanduiden wie je kent in het project</p>
                                <div class="help-block with-errors"></div>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputMessage" class="control-label">Uw bericht</label>
                                <textarea rows="5" name="message" cols="30" class="form-control" id="inputMessage"
                                          required></textarea>
                                <p class="help-block">Je kan hier zetten wat je wilt bestellen</p>
                                <div class="help-block with-errors"></div>
                                <br>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- ********************* DARK WRAPPER END ********************* -->
    <!-- ************************************************************ -->


</div>
<!-- super-wrapper ends here - excludes the wrapper-trans below so that the body background color shines through -->


<!-- ********************************************************* -->
<!-- ********************* TRANS WRAPPER ********************* -->
<!-- A small and transparent wrapper (backgound shines through) - for some kind of footer menus/infos -->

<section id="footer" class="wrapper wrapper-trans wrapper-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Menu</h5>
                <ul class="nav subnav">
                    <li role="presentation"><a href="#bck-img1">Wat doen we?</a></li>
                    <li role="presentation"><a href="#bck-img3">Mason Jars</a></li>
                    <li role="presentation"><a href="#TruckerCaps">Trucker Caps</a></li>
                    <li role="presentation"><a href="#contactCustom">Waar vind je ons?</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Ontwikkeld door <a href="http://www.simonmeurs.be" target="_blank">Simon Meurs</a></h5>

                <p>
                    Simon Meurs is een functioneel ontwikkelaar met een diploma in de Toegepaste Informatica met een
                    specialisatie in de Business Solutions.
                </p>

                <p>Simon is iemand die veel bezig is met technologie, van op het werk, waar hij programmeert en
                    analyseert tot in het privé leven. Hij is graag bezig met het ontdekken van nieuwe technologiën.</p>

                <p><i>Everything we create, can make the world a better place. <br>
                    Then why not think and create a better future.</i></p>

                <p>
                    <a href="https://github.com/SimonMeurs" target="_blank"><i class="fa fa-github fa-2x"></i></a>
                    <a href="https://twitter.com/SimonMeurs" target="_blank"><i
                            class="fa fa-twitter fa-2x col-md-offset-1"></i></a>
                    <a href="https://www.facebook.com/simon.meurs" target="_blank"><i
                            class="fa fa-facebook fa-2x col-md-offset-1"></i></a>
                    <a href="http://blog.simonmeurs.be" target="_blank"><i
                            class="fa fa-file-text fa-2x col-md-offset-1"></i></a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ********************* TRANS WRAPPER END ********************* -->


<!-- All core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js" type="text/javascript"></script> <!-- A must-have - dont remove it! -->
<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- A must-have - dont remove it! -->
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<!-- The slider script - remove if you don´t use it -->
<script src="js/smoothscroll.min.js" type="text/javascript"></script>
<!-- smoothscrolling script - remove if you don´t use it -->
<script src="js/skrollr.min.js" type="text/javascript"></script>
<!-- The scolling script for parallax effects - remove if you don´t use it -->
<script src="js/jquery.particleground.min.js" type="text/javascript"></script>
<!-- The script for particle effects - remove if you don´t use it -->
<script src="js/validator.min.js" type="text/javascript"></script>
<!-- The script for particle effects - remove if you don´t use it -->


<!-- Init the Owl Carousel slider script - remove this code if it is not in use -->
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        animateOut: '',//fadeOut
        autoHeight: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 1000,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 0
    });
</script>

<!-- Init the parallax script - if you don´t load it above remove it here too -->
<script type="text/javascript">
    var s = skrollr.init();
</script>
<script type="text/javascript">
    $('#particle').particleground({
        dotColor: 'rgba(255,255,255,0.15)',
        lineColor: 'rgba(255,255,255,0.15)',
        maxSpeedX: 0.2,
        maxSpeedY: 0.2,
        minSpeedX: 0.005,
        minSpeedY: 0.005
    });
</script>
<script>
    var jars = {
        drinkjar: {
            prijs: 6,
            afbeelding: 'drinkjar.jpg',
            beschrijving: 'Een mooie jar'
        },
        moneyjar: {
            prijs: 6,
            afbeelding: 'MasonJar1.jpg',
            beschrijving: 'Een mooie jar, waar je geld in kan steken.'
        },
        zoutjar: {
            prijs: 6.5,
            afbeelding: 'NSIM8063.jpg',
            beschrijving: 'Een fantastische jar met tof zout en fenomenale geuren.'
        },
        badjar: {
            prijs: 6.5,
            afbeelding: 'MasonJar2.jpg',
            beschrijving: 'Een fenomenale jar en een fijne geur en bubbels die al ' +
            'je badjes fijn gaat maken'
        },
        tissuejar: {
            prijs: 8,
            afbeelding: 'IMG_1546.JPG',
            beschrijving: 'Een awesome jar met zakdoekjes in. Ideaal voor op tafel of naast de zetel.'
        },
        cactusjar: {
            prijs: 8,
            afbeelding: 'IMG_1540.JPG',
            beschrijving: 'Een mooie jar met een awesome cactus in. ' +
            'Fantastisch voor bij het raam.'
        }
    };
    $('#jarItems').find('li').on('click', function () {
        var jarInfo = jars[$(this).attr('rel')];
        $('#jarOmschrijving').text(jarInfo['beschrijving']);
        $('#jarItemStyle').text('#jarItems.wrapper-half-right::before {' +
            'background-image: url(img/Jars/' + jarInfo['afbeelding'] + ');' +
            'background-size: cover;}');
        $('#jarPrijs').text(jarInfo['prijs'] + ' euro');
    });
</script>

<!-- Form validation script - use it if contact form is embedded -->

</body>
</html>