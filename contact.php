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
                <a href="news.php"  onclick = $("#menu-close").click(); >Extia My Event</a>
            </li>
            <li>
                <?php
                    echo '<div id="identifiant">'.$_SESSION["nom"].' '.$_SESSION["prenom"].'</div>';
                ?>
            </li>
            <li>
                <a href="eve_fes.php" onclick = $("#menu-close").click(); >Evenements festifs</a>
            </li>
            <li>
                <a href="eve_pro.php" onclick = $("#menu-close").click(); >Evenements professionels </a>
            </li>
            <li>
                <a href="calendrier.php" onclick = $("#menu-close").click(); >Calendrier</a>
            </li>
            <li>
            <?php
                if ($_SESSION['nom'] == "administrateur")
                {
                    echo '<li><a href="page_admin.php" onclick = $("#menu-close").click(); >Créer un événement</a></li>';
                    echo '<li><a href="msg.php" onclick = $("#menu-close").click(); >Messages reçus</a></li>';
                }
                else
                    echo '<li><a href="contact.php" onclick = $("#menu-close").click(); >Contact</a></li>';
            ?>
            </li>
            <li>
            <?php 
                if($_SESSION['nom'])
                    echo '<a href="accueil.php" onclick = $("#menu-close").click(); >Deconnexion</a>';
            ?>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header6">
        <div class="text-vertical-center">
            <h1>Une question?</h1>
            <br><br><br><br>
             <a href="#about" class="btn btn-dark btn-lg">Contacter</a>

           
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <img src="img/Logo.png" style="display: block; margin-left: 2%;" width="10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

    <div id="formu" style="margin-top: 2%;">
      <h2>Contactez-nous</h2>
		    <form method="POST">
			    <div>
			    	<label for="name">Votre nom :</label><br>
			    	<input type="text" id="nom" name="user_name" style="border-radius: 10px;" value="<?php if ($_SESSION["nom"]) {echo $_SESSION["nom"] . " " . $_SESSION["prenom"];} ?>">
		    	</div>
		    	<div>
		        	<label for="mail">Votre e-mail :</label><br>
		        	<input type="email" id="email" name="user_email"  style="border-radius: 10px;">
	    	    </div>
	    	    <div>
	    	    	<label for="msg">Message :</label><br>
		        	<textarea id="message" name="user_message" style="border-radius: 10px;" rows="10" cols="60"></textarea><br><br>
	    	    </div>
		     	<div class="button">
		        	<div class="envoyer"><input type="submit" value="Envoyer" required="required" ></div><br><br>
		        </div>
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
                    <h4><strong>EXTIA</strong></h4>
                    
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="http://www.extia.fr/"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                         <li>
                            <a href="https://www.facebook.com/talentextia"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Extia_conseil"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                          <li>
                            <a href="https://www.linkedin.com/company/extia"><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/TalentsExtia"><i class="fa fa-youtube fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Extia Copyright &copy; 2015 Tous droits réservés</p>
                </div>
            </div>
        </div>
    </footer>


    <?php
        $my_sql_base = mysqli_connect("localhost", "root", "", "my_event");
    	$nom = $_POST['user_name'];
    	$email = $_POST['user_email'];
    	$msg = $_POST['user_message'];
    	if ($msg != "")
            mysqli_query($my_sql_base, "INSERT INTO contact (nom, email, message) VALUES ('$nom', '$email', '$msg')");
    ?>


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
