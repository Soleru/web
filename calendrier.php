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
    <link href="css/style.css" rel="stylesheet" type="text/css" />
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
    <header id="top" class="header8">
        <div class="text-vertical-center">
            <h1>Calendrier</h1>
            <br><br><br><br>
             <a href="#about" class="btn btn-dark btn-lg">Voir</a>

        </div>
    </header>

    <!-- About -->              
    <section id="about" class="about">
        <img src="img/Logo.png" style="display: block; margin-left: 2%;" width="10%"><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
    <?php
    $connect=mysqli_connect('localhost', 'root', '', 'my_event');
    ?>
    <?php
$list_fer=array(7);//Liste pour les jours ferie; EX: $list_fer=array(7,1)==>tous les dimanches et les Lundi seront des jours feriers
$list_spe=array('1986-10-31','2009-4-12','2009-9-23');//Mettez vos dates des evenements ; NB format(annee-m-j)
$lien_redir="date_info.php";//Lien de redirection apres un clic sur une date, NB la date selectionner va etre ajouter a ce lien afin de la recuperer ulterieurement 
$clic=1;//1==>Activer les clic sur tous les dates; 2==>Activer les clic uniquement sur les dates speciaux; 3==>Desactiver les clics sur tous les dates
$col1="#B0C4DE";//couleur au passage du souris pour les dates normales
$col2="#8af5b5";//couleur au passage du souris pour les dates speciaux
$col3="#6a92db";//couleur au passage du souris pour les dates frie
$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Décembre");
if(isset($_GET['mois']) && isset($_GET['annee']))
{
    $mois=$_GET['mois'];
    $annee=$_GET['annee'];
}
else
{
    $mois=date("n");
    $annee=date("Y");
}
$ccl2=array($col1,$col2,$col3);
$l_day=date("t",mktime(0,0,0,$mois,1,$annee));
$x=date("N", mktime(0, 0, 0, $mois,1 , $annee));
$y=date("N", mktime(0, 0, 0, $mois,$l_day , $annee));
$titre=$mois_fr[$mois]." : ".$annee;
//echo $l_day;
?>
<body>
<center>
<form name="dt" method="get" action="">
<select name="mois" id="mois" onChange="change()" class="liste">
<?php
    for($i=1;$i<13;$i++)
    {
        echo '<option value="'.$i.'"';
        if($i==$mois)
            echo ' selected ';
        echo '>'.$mois_fr[$i].'</option>';
    }
?>
</select>
<select name="annee" id="annee" onChange="change()" class="liste">
<?php
    for($i=1950;$i<2035;$i++)
    {
        echo '<option value="'.$i.'"';
        if($i==$annee)
            echo ' selected ';
        echo '>'.$i.'</option>';
    }
    ?>

</select>
</form>
<table class="tableau"><caption><?php echo $titre ;?></caption>
<tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>
<tr>
<?php
//echo $y;
$case=0;
if($x>1)
    for($i=1;$i<$x;$i++)
    {
        echo '<td class="desactive">&nbsp;</td>';
        $case++;
    }
for($i=1;$i<($l_day+1);$i++)
{
    $f=$y=date("N", mktime(0, 0, 0, $mois,$i , $annee));
    $da=$annee."-".$mois."-".$i;
    $lien=$lien_redir;
    $lien.="?dt=".$da;
    $reg = mysqli_query($connect, "select * FROM even WHERE date_even = '".$da."'");
    $data = mysqli_fetch_assoc($reg);
    echo "<td";
    if(in_array($da, $list_spe))
    {
        echo " class='special' onmouseover='over(this,1,2)'";
        if($clic==1||$clic==2)
        {
		if($data)
		{
		echo ' onclick="prevent(1,';
		echo "'";
		echo $data['date_even'];
		echo "', ";
		echo "'";
		echo $$data['nom'];
		echo "'";
		echo ')"';
		}
		else
		{
		echo ' onclick="prevent(0)"';
		}
        }
    }
    else if(in_array($f, $list_fer))
    {
        echo " class='ferier' onmouseover='over(this,2,2)'";
        if($clic==1)
        {
		if($data)
		{
		echo ' onclick="prevent(1,';
		echo "'";
		echo $data['date_even'];
		echo "', ";
		echo "'";
		echo $data['nom'];
		echo "'";
		echo ')"';
		}
		else
		{
		echo ' onclick="prevent(0)"';
		}
        }
    }
    else 
    {
        echo" onmouseover='over(this,0,2)' ";
        if($clic==1)
        {
            
		if($data)
		{
		echo ' onclick="prevent(1,';
		echo "'";
		echo $data['date_even'];
		echo "', ";
		echo "'";
		echo $data['nom'];
		echo "'";
		echo ')"';
		}
		else
		{
		echo ' onclick="prevent(0)"';
		}
        }
    }
    if ($data)
	echo "id='eve'";
    echo" onmouseout='over(this,0,1)'>$i ";
    echo "</td>";
    $case++;
    if($case%7==0)
        echo "</tr><tr>";
    
}
if($y!=7)
    for($i=$y;$i<7;$i++)
    {
        echo '<td class="desactive">&nbsp;</td>';
    }
?></tr>
</table>
</center>
</body></html>
<script type="text/javascript">
function change()
{
    document.dt.submit();
}
    function over(this_,a,t)
{
    <?php 
    echo "var c2=['$ccl2[0]','$ccl2[1]','$ccl2[2]'];";
    ?>
    var col;
    if(t==2)
        this_.style.backgroundColor=c2[a];
    else
        this_.style.backgroundColor="";
}
function go_lien(a)
{
    top.document.location=a;
}
function prevent(i, date, nom)
{
    if (i == 0)
	{
	alert("Il n'y a aucun evenement aujourd'hui");
	}
    else
	{
	alert(date+"\n"+nom);
	}
}

</script>
</html>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
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
                    </h4><br>
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
