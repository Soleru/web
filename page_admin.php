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
    <header id="top" class="headeer">
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
        <img src="img/Logo.png" style="display: block; margin-left: 2%;" width="10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

    <div id="formu" style="margin-top: 2%;">
      <h1><B>Création d'un événement</B></h1>
        <br>
        <form id="formulaire" method="POST" enctype="multipart/form-data">
            <div class="name">Type d'événement :</div>
            <div><select name="type" required="required">
                <option value=1>Festif</option>
                <option value=2>Professionnel</option>
            </select></div><br>
            <div class="name">Nom :</div>
            <div class="input"><input type="text" name="nom" required="required"/></div><br>
            <div class="name">Descriptif :</div>
            <div class="input"><textarea type="text" name="description" rows="10" cols="60" required="required"></textarea></div><br>
            <div class="name">Date de de l'événement :</div>
            <div class="input"><input type="date" name="date_ev" required="required"/></div><br>
            <div class="name">Heure de début :</div>
            <div class="input"><input type="time" name="heure_debut" required="required"/></div><br>
            <div class="name">Heure de fin :</div>
            <div class="input"><input type="time" name="heure_fin" required="required"/></div><br>
            <div class="name">Ville :</div>
            <div><select name="ville" required="required"/>
            <option>Aix-en-Provence</option>
            <option>Bruxelles</option>
            <option>Grenoble</option>
            <option>Laussane</option>
            <option>Lille</option>
            <option>Lyon</option>
            <option>Paris</option>
            <option>Sophia-Antipolis</option>
            </select></div><br>
            <div class="name">Pays :</div>
            <div class="input"><input type="text" name="pays" required="required"/></div><br>
            <div class="name">Image :</div>
            <div class="input" style="padding-top: 6px;"><input type="file" name="image" style="margin-left: auto; margin-right: auto; width: 185px"/></div><br><br>
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
        $my_sql_base = mysqli_connect("localhost", "root", "", "my_event");
    	$type = $_POST['type'];
    	$nom = $_POST['nom'];
    	$desc = $_POST['description'];
    	$date = $_POST['date_ev'];
    	$ville = $_POST['ville'];
    	$pays = $_POST['pays'];
    	$heure_debut = $_POST['heure_debut'];
    	$heure_fin = $_POST['heure_fin'];
    	$image = $_FILES['image']['name'];
        if(isset($_FILES['image']))
        { 
            $dossier = 'img/';
            $fichier = basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier);
        }
        if ($nom != "")
            mysqli_query($my_sql_base, "INSERT INTO even (type, nom, description, date_even, ville, pays, heure_debut, heure_fin, image) VALUES ('$type', '$nom', '$desc', '$date', '$ville', '$pays', '$heure_debut', '$heure_fin', '$image')");
       ?>
    

</body>

</html>
