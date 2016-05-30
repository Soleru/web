<?php session_start(); ?>
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
    <header id="top" class="header3">
        <div class="text-vertical-center">
            <h1>Événements festifs</h1>
            <br><br><br><br>
             <a href="#about" class="btn btn-dark btn-lg">Participer</a>&nbsp;&nbsp;&nbsp;&nbsp;
           
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <img src="img/Logo.png" style="display: block; margin-left: 2%;" width="10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
   
<!-- Tri -->
<div style="margin-left: 31%;"><form method='GET'>
			<button id='bouton' name='button' value='Toutes' style="background-color: #FFF;">Toutes</button>
			<button id='bouton' name='button' value='Aix-en-Provence' style="background-color: #FFF;">Aix-en-Provence</button>
			<button id='bouton' name='button' value='Bruxelles' style="background-color: #FFF;">Bruxelles</button>
			<button id='bouton' name='button' value='Grenoble' style="background-color: #FFF;">Grenoble</button>
			<button id='bouton' name='button' value='Lausanne' style="background-color: #FFF;">Lausanne</button>
			<button id='bouton' name='button' value='Lille' style="background-color: #FFF;">Lille</button>
			<button id='bouton' name='button' value='Lyon' style="background-color: #FFF;">Lyon</button>
			<button id='bouton' name='button' value='Paris' style="background-color: #FFF;">Paris</button>
			<button id='bouton' name='button' value='Sophia-Antipolis' style="background-color: #FFF;">Sophia-Antipolis</button>    
		</form></div><br><br><br><br><br><br>
		 <div id="formu">
		<table id="01" cellpadding="15" cellspacing="10">
            <tr>
	            <th width="">Événement</th>
	            <th width="">Nom</th>
	            <th width="">Descriptif</th>
	            <th width="">Date</th>
	            <th width="">Heure</th>
	            <th width="">Ville</th>
	            <th width="">Pays</th>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'my_event');
						if ($_SESSION['nom'] == "administrateur")
	            echo '<th width="">Suppression</th></tr>';
            else
                echo '<th width="">Participer</th></tr>';
			if ($_GET['button'] != 'Toutes')
			{
				$req = mysqli_query($conn, "SELECT * FROM even WHERE ville = '".$_GET['button']."' AND type = '1'");
			}
			else
			{
				$req = mysqli_query($conn, "SELECT * FROM even WHERE type = '1'");
			}
			if ($req)
				{
					while($data = mysqli_fetch_assoc($req))
                        {
	                        echo "<tr><td><img src= 'img/" . $data['image'] . "' width='150px' heigth='150px'></td><td>" . $data['nom'] . "</td><td>" . $data['description'] . "</td><td>" . $data['date_even'] . "</td><td>" . $data['heure_debut'] . "</td><td>" . $data['ville'] . "</td><td>" . $data['pays'] . "</td><td style='text-align:center;'>";
                            if ($_SESSION['nom'] == "administrateur")
                                echo "<button style='text-align:center;'>X</button></td></tr>";
                            else
                                echo "<button style='text-align:center;'>Je participe</button></td></tr>";
                        }
				}
		?>
		</table></div>
		<script type="text/javascript">
			
		</script>


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

</body>

</html>