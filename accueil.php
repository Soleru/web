<?php session_start(); session_unset(); ?>
<!DOCTYPE html5>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                <a href="#about" onclick = $("#menu-close").click(); >Connexion</a>
            </li>
            <li>
                <a href="formulaire.php" onclick = $("#menu-close").click(); >Inscription</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>EXTIA MY EVENT</h1>
            <br><br><br><br>
             <a href="#about" class="btn btn-dark btn-lg">Se connecter</a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="formulaire.php" class="btn btn-dark btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;S'inscrire&nbsp;&nbsp;&nbsp;&nbsp;</a>
             <br><br><br><br>
            <h3><i>"D'abord qui, ensuite quoi !"</i></h3>
            <br>
           
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <img src="img/Logo.png" style="display: block; margin-left: 2%;" width="10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div id="formu" style="margin-top: 2%;">
                    <h2>Se connecter</h2>

    
        <form method="POST">
        
            <div class="name">Login :</div>
            <div class="input" ><input type="text" name="login" style="border-radius: 10px;"/></div><br>
            <div class="name">Mot de passe :</div>
            <div class="input"><input type="password" name="mdp" style="border-radius: 10px;"/></div><br>
            <br>
            <div class="inscription"><button>Se connecter</button></div><br>
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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
<?php
	$conn = mysqli_connect("localhost", "root", "", "my_event");
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	$req = mysqli_query($conn, "SELECT * FROM user WHERE login='$login' AND mdp = '$mdp'");
	$data = mysqli_fetch_assoc($req);
    if ($login != "")
	{
	    if ($data['nom'])
	    {
	    	$_SESSION['nom'] = $data['nom'];
            $_SESSION['prenom'] = $data['prenom'];
            $_SESSION['login'] = $data['login'];
            echo '<script type="text/javascript">window.location = "news.php";</script>';
        }
        else
        {
            echo '<script>alert("Erreur :\n Login ou mot de passe incorrect.");</script>';
        }
	}
?>
</body>

</html>