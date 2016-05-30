<?php session_start(); ?>
<!DOCTYPE html5>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Extia My Event</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Extia My Event</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Accueil</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >Crée d'un événement</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>EXTIA MY EVENT</h1>
            <br><br><br><br>
             <a href="#about" class="btn btn-dark btn-lg">Créer un événement</a>
             <br><br><br><br>
            <h3><i>"D'abord qui, ensuite quoi !"</i></h3>
            <br>
           
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

    <div id="formu" style="margin-top: 2%;">
      <h1><B>Création d'un évènement</B></h1>
        <br>
        <form id="formulaire" method="POST">
            <div class="name">Type d'évènement :</div>
            <div class="input"><input type="text" name="type" required="required" placeholder="Ex : FESTIF OU PROFESSIONNEL" size="40"/></div><br>
            <div class="name">Nom :</div>
            <div class="input"><input type="text" name="nom" required="required"/></div><br>
            <div class="name">Descriptif :</div>
            <div class="input"><input type="text" name="description" required="required"/></div><br>
            <div class="name">Créateur de l'évènement:</div>
            <div class="input"><input type="text" name="createur" required="required"/></div><br>
            <div class="name">Email du créateur :</div>
            <div class="input"><input type="email" name="email_createur" required="required"/></div><br>
            <div class="name">Date de création de l'évènement :</div>
            <div class="input"><input type="date" name="date_crea_ev" required="required"/></div><br>
            <div class="name">Date de de l'évènement :</div>
            <div class="input"><input type="date" name="date_ev" required="required"/></div><br>
            <div class="name">Adresse :</div>
            <div class="input"><input type="text" name="addresse" required="required"/></div><br>
            <div class="name">Ville :</div>
            <div class="input"><input type="text" name="ville" required="required"/></div><br>
            <div class="name">Code postale :</div>
            <div class="input"><input type="text" name="postale" maxlength="5" required="required"/></div><br>
            <div class="name">Pays :</div>
            <div class="input"><input type="text" name="pays" required="required"/></div><br>
        <div class="ajouter"><input type="submit" value="Ajouter l'évènement" required="required"></div><br><br>
        </form>  
    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



    <!-- Map -->
    <!-- <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>
 -->
    <!-- Footer -->
    <br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>EXTIA</strong>
                    </h4>
                    <p> 1 Avenue de la Cristallerie<br>92310, Sèvres</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>01.46.99.91.91</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>&nbsp; contact@extia.fr
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="http://www.extia.fr/"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Extia Copyright &copy; 2015 Tous droits réservés</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        document.getElementById('bouton').onclick= function ()
    {
    var pass1 = document.getElementById('mdp').value;
    var pass2 = document.getElementById('mdpok').value;
    if ((pass1 == pass2) && (document.getElementById('code').value == 3630))
	    return (true);
    else
	    alert("Votre mot de passe ou le code confidentiel n'est pas valide.");
	    return (false);
    }
        
        
    </script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
