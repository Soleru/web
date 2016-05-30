<?php session_start(); ?>
<!DOCTYPE html5>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inscription</title>

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
                <a href="accueil.php"  onclick = $("#menu-close").click(); >Extia My Event</a>
            </li>
            <li>
                <?php
                    echo '<div id="identifiant">'.$_SESSION["nom"].' '.$_SESSION["prenom"].'</div>';
                ?>
            </li>
            <li>
                <a href="accueil.php" onclick = $("#menu-close").click(); >Accueil</a>
            </li>
            <li>
                <?php 
                    if ($_SESSION['nom'] == "administrateur")
                {
                    echo '<li><a href="page_admin.php" onclick = $("#menu-close").click(); >Créer un événement</a></li>';
                    echo '<li><a href="msg.php" onclick = $("#menu-close").click(); >Messages reçus</a></li>';
                }
                    else
                        echo '<a href="accueil.php" onclick = $("#menu-close").click(); >Connexion</a>';
                ?>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >Inscription</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header2">
        <div class="text-vertical-center">
            <h1>Inscription</h1>
            <br><br><br><br>
            <a href="#about" class="btn btn-dark btn-lg">S'inscrire</a>

        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <img src="img/Logo.png" style="display: block; margin-left: 2%;" width="10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                           <form id="formu" method="POST">
            <h2><B>Création de compte</B></h2>
            <div class="col-sm-xs-12">Nom :</div>
            <div class="col-sm-xs-12"><input type="text" id="nom" name="nom" required="required" style="border-radius: 10px;" placeholder="Ex : Dupont"></div><br>
            <div class="name">Prénom :</div>
            <div class="input"><input type="text" id="prenom" name="prenom" required="required" style="border-radius: 10px;" placeholder="Ex : Alexandre" /></div><br>
            <div class="name">Email :</div>
            <div class="input"><input type="email" name="mail" required="required" style="border-radius: 10px;" placeholder="Ex : dupont@gmail.com"/></div><br>
            <div class="name">Login :</div>
            <div class="input"><input type="text" name="login" required="required" style="border-radius: 10px;" placeholder="Ex : dupont_a"/></div><br>
            <div class="name">Mot de passe :</div>
            <div class="input"><input type="password" id="mdp" name="mdp" required="required" style="border-radius: 10px;" placeholder="Au moins 8 caractères"/></div><br>
            <div class="name">Vérification du mot de passe :</div>
            <div class="input"><input type="password" id="mdpok" required="required" style="border-radius: 10px;"/></div><br>
            <div class="name">Code confidentiel :</div>
            <div class="input"><input type="password" id="code" required="required" style="border-radius: 10px;" placeholder="Code fourni par Extia"></div><br>
            <br>
            <div class="inscription"><button id="bouton" type="submit">S'inscrire</button></div><br>
        </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

  
    <!-- Footer -->
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./js/page_account.js"></script>
    
    <script>
        document.getElementById('bouton').onclick= function ()
    {
        var nom = document.getElementById('nom').value;
        var prenom = document.getElementById('prenom').value;
        var re = /^[A-Z]{1}\D*[a-z]{1}$/;
        
        if((re.test(nom) != true) || (re.test(prenom) != true))
        {
            alert("Le nom et le prénom doient commencer par une majuscule et être suivi de lettres minuscules.")
            return(false);
        }
        var pass1 = document.getElementById('mdp').value;
        var pass2 = document.getElementById('mdpok').value;
        var re = /.{8,}/;
        if ((pass1 == pass2) && (document.getElementById('code').value == 3630))
        {
	    	    if (re.test(pass1) != true )
		    	{
			    	alert("Votre mot de passe doit contenir au moins 8 caractères.");
	   	 	        return (false);
			    }	
		    return (true);
	    }
        else
        {
            alert("Votre mot de passe ou le code confidentiel n'est pas valide.");
	        return (false);
        }
    }
    </script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

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
<?php
    $my_sql_base = mysqli_connect("localhost", "root", "", "my_event");
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	$data = mysqli_fetch_assoc(mysqli_query($my_sql_base, "SELECT * FROM user WHERE login = '$login'"));
	if ($data == NULL && $login != "")
    {
        mysqli_query($my_sql_base, "INSERT INTO user (nom, prenom, email, login, mdp) VALUES ('$nom', '$prenom', '$mail', '$login', '$mdp')");
        echo '<script>alert("Inscription réussie."); window.location = "accueil.php";</script>';
    }
    elseif ($data != NULL)
        echo'<script>alert("Compte déjà existant.");</script>';
?>
</body>

</html>
