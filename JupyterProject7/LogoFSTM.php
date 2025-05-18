
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Faculté des Sciences et Techniques de Mohammedia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  

  <!-- Used for FSTM en images-->
  <style type="text/css">
	  .listing-block{height:100%; padding-top:15px; overflow-y:scroll;}
.slimScrollDiv{width:41%!important;}
.media {border:1px solid #bcbcbc; background:#fff; position:relative; margin-bottom:15px;}
.media img{margin:0; height:110px;}
.media-body{ border-left:0; height:110px;}
.media .newstitle{float:left; width:100%; font-size:15px;font-weight:bold; color:#4765AB;}
.media .newstitle small{display:block; font-size:14px; color:#232323;}
.media .stats{float:left; width:100%; margin-top:4px;}
.media .stats span{ margin-right:10px; font-size:14px; color:#4765AB;font-weight:bold;}
.media .stats span i{margin-right:7px; color:#4765AB;}
.media .address{float:left; width:100%;font-size:14px; margin-top:5px; color:#888;}
.media .fav-box{position:absolute; right:10px; font-size:20px; top:4px; color:#E74C3C;}
	  .header-widget {
    border: 1px solid ;
    height: 100%;
    width: 100%;
}
        .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}




    </style>
  <!-- -->
  
  <!-- Used for FSTM en chiffres -->
  
  <style type="text/css">
        .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
	  
	  
.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='darkblue' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='darkblue' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators .active{
    background-color: darkblue;
}
.carousel-indicators li{
    background-color: blue;
}
    </style>
	
	
	<!-- -->
	
  
  <!-- Used for news carousel  -->
  <style type="text/css">
        .b-0 {
    bottom: 0;
}
.bg-shadow {
    background: rgba(76, 76, 76, 0);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
    background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}
.top-indicator {
    right: 0;
    top: 1rem;
    bottom: inherit;
    left: inherit;
    margin-right: 1rem;
}
.overflow {
    position: relative;
    overflow: hidden;
}
.zoom img {
    transition: all 0.2s linear;
}
.zoom:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
    </style>
  
  
  <!--   -->
  
  <!--  Used for Breaking news carousel-->
  <style type="text/css">
        .navigation-box {
    top: .4rem;
    right: .8rem;
    width: 2rem;
    position: absolute;
}
@media (min-width: 768px){
    .breaking-caret:after {
        content: "";
        width: 0;
        height: 0;
        border-top: 20px solid transparent;
        border-left: 15px solid #ffffff;
        border-bottom: 20px solid transparent;
        position: absolute;
        right: -15px;
        top: 0;
    }
}
    </style>
  
  <!--  -->
  <style>
.buttonSquare {
  width: 100%;border-radius: 0px;
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  position: relative;
  cursor: pointer;
  margin: 0px 0 4px 0;
  padding: 15px 0px 15px 0px;
  border: none;
  font: normal 18px "Roboto", Helvetica, sans-serif;
  color: rgba(255,255,255,0.9);
  text-transform: capitalize;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #686d6e;
  text-shadow: 0 0 0 rgba(239,245,247,1);
  transition: all 0.2s;
}
  .buttonRounded {
  width: 100%;border-radius: 10px;
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  position: relative;
  cursor: pointer;
  margin: 0px 0 4px 0;
  padding: 15px 0px 15px 0px;
  border: none;
  font: normal 18px "Roboto", Helvetica, sans-serif;
  color: rgba(255,255,255,0.9);
  text-transform: capitalize;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #686d6e;
  text-shadow: 0 0 0 rgba(239,245,247,1);
  transition: all 0.2s;
}
	  
.buttonRounded::before
{
  display: inline-block;
  border-radius:10px 0 0 10px; 
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 63px;
  height: 100%;
  position: absolute;
  content: "";
  cursor: pointer;
  top: 0;
  left: 0;
  border: none;
  color: rgba(0,0,0,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background:rgba(0,0,0,0.3);
  background-repeat: no-repeat;
  background-position: 50% 50%;
  -webkit-background-size: 48px auto;
  background-size: 48px auto;
 transition: all 0.2s;
}
.buttonSquare::before {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 63px;
  height: 100%;
  position: absolute;
  content: "";
  cursor: pointer;
  top: 0;
  left: 0;
  border: none;
  color: rgba(0,0,0,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background:rgba(0,0,0,0.3);
  background-repeat: no-repeat;
  background-position: 50% 50%;
  -webkit-background-size: 48px auto;
  background-size: 48px auto;
 transition: all 0.2s;
}
	  
.buttonSquare span,.buttonRounded span{position:absolute;left: 78px;top:20px;font: normal 18px "Roboto", Helvetica, sans-serif;text-transform: uppercase;}
.buttonSquare i,.buttonRounded i{
  color: white;
  font-size: 32px;
  margin: 0 0 0 17px;
  z-index: 9999;
  position: relative;
}
button.buttonSquare i,button.buttonRounded i{
  color: white;
  font-size: 32px;
  margin: 0;
  z-index: 9999;
  position: absolute;
  left: 18px;
  top:15px;
}	
.buttonSquare:hover,.buttonRounded:hover,
button.buttonSquare:hover,button.buttonRounded:hover {
  text-shadow: 0 0px 0px rgba(87,151,180,0.36) ;
  transition: all 0.3s;
}
.buttonSquare:active,.buttonSquare:focus,
.buttonRounded:active,.buttonRounded:focus {
  top: 0;
  background: #8e9292;
  -webkit-transform-origin: 50% 100% 0;
  -moz-transform-origin: 50% 100% 0;
  -o-transform-origin: 50% 100% 0;
  -ms-transform-origin: 50% 100% 0;
  transform-origin: 50% 100% 0;
  -ms-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
	  
	  .DodgerBlue{background:#1E90FF;}
	  .Red{background:#e74c3c;}
 </style> 
  
  <!--  Used for main carousel -->
   <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
  <!--   -->
  <script>
 /*
function blink(ob)
{
if (ob.style.visibility == "visible" )
{
ob.style.visibility = "hidden";
}
else
{
ob.style.visibility = "visible";
}
}
setInterval("blink(bl)",3000);
*/
</script>
  
  <style>
.clignote {
  animation: clignote 2s linear infinite;
}
@keyframes clignote {  
  50% { opacity: 0; }
}
.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

.text-center {
  text-align: center;
}
</style>

  
</head>
<body>




<nav class="navbar navbar-expand-md" style="background-color: #337ab7;">
  <ul class="navbar-nav">
       
  </ul>
</nav>



<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
  
  <a class="navbar-brand" href="https://www.fstm.ac.ma/index.php">
  <img src="https://www.fstm.ac.ma/images/LOGO-30-ANS-FSTM.jpg" alt="Logo" style="width:150px;">
  </a>
  <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
	<div class="navbar-nav">
	<!-- This div is used to align below links to the right in Bootstrap 4, we use justify-content-between in the parent div -->
	</div>

	<div class="navbar-nav">
   <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/index.php"><i><b>Accueil</b></i></a>
	  </li>
	  
	  
      <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="#" id="navbardrop" data-toggle="dropdown"><i><b>Faculté</b></i></a>
		<div class="dropdown-menu p-1 rounded-0">
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/presentation.php"><i>- Présentation</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/mot_doyenne.php"><i>- Mot de la Doyenne</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/missions_et_valeurs.php"><i>- Missions et Valeurs</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/organisation_generale/organigramme_fonctionnel.php"><i>- Organisation générale</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/departements/presentation.php"><i>- Départements</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/affaires_pedagogiques/affaires_pedagogiques.php"><i>- Affaires pédagogiques</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/entreprise_et_carriere/forum_fstm_entreprises.php"><i>- Entreprise et Carrière</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/vie_estudiantine/activites.php"><i>- Vie estudiantine</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/recrutement/concours.php"><i>- Recrutement</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/marches_publics.php"><i>- Marchés publics</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/divers.php"><i>- Divers</i></a>
			
		</div>
	  </li>
	  
	  <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="#" id="navbardrop" data-toggle="dropdown"><i><b>Formation</b></i></a>
		<div class="dropdown-menu p-1 rounded-0">
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/formation_initiale/presentation.php"><i>- Formation initiale</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/formation_continue/presentation.php"><i>- Formation continue</i></a>
			<a class="dropdown-item p-1 mb-1 rounded-0 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/centres_de_certification/presentation.php"><i>- Centres de certification</i></a>
		</div>
	  </li>
	  
	   <li class="nav-item dropdown">
        <a class="nav-link shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/recherche/presentation.php"><i><b>Recherche</b></i></a>
      </li>
	  
      	  
	  <li class="nav-item dropdown">
        <a class="nav-link shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/actualites/actualites.php"><i><b>Actualités</b></i></a>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/e_services.php"><i><b>E-services</b></i></a>
      </li>
	  
	  <li class="nav-item dropdown">
        <a class="nav-link shadow p-2 mb-1 bg-light" style="color: #337ab7;" href="https://www.fstm.ac.ma/contact.php"><i><b>Contact</b></i></a>
      </li>
	  
    </ul>
	</div>
	
  </div>  
</nav>
</div>


<div class="container-fluid">
	<!--
		<a href="formation_initiale/tronc_commun.php">
		<div class="col-lg-12 col-md-12"><div class="buttonSquare shadow bg-success text-white" id="bl2" style="visibility: visible"><a href="formation_initiale/tronc_commun.php" class="text-white"><i class="fas fa-chalkboard-teacher"></i><span>Avis aux Nouveaux Bacheliers AU : 2024-2025 =>Une 2ème chance est accordée aux nouveaux bacheliers qui figurent sur les listes d'attente 1, 2, 3 et 4 ... :  cliquer ici pour plus d'Informations</span></a></div></div></a>
	<br>
	<a href="formation_initiale/tronc_commun.php">
		<div class="col-lg-12 col-md-12"><div class="buttonSquare shadow bg-success text-white" id="bl" style="visibility: visible"><a href="formation_initiale/tronc_commun.php" class="text-white"><i class="fas fa-chalkboard-teacher"></i><span>Avis aux Nouveaux Bacheliers AU : 2024-2025 => Les demandes de changement d'orientation des étudiants de 1ère année du tronc commun Lst seront traitées le jeudi 3 octobre à partir de 15h ... :  cliquer ici pour plus d'Informations</span></a></div></div></a>-->
	

  <div id="demo" class="carousel slide shadow p-2 mb-3 bg-light rounded-0 border" data-ride="carousel" data-interval="9000">

  <!-- Indicators -->
  <!--
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
	<li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
	<li data-target="#demo" data-slide-to="7"></li>
	<li data-target="#demo" data-slide-to="8"></li>
    <li data-target="#demo" data-slide-to="9"></li>
    <li data-target="#demo" data-slide-to="10"></li>
	<li data-target="#demo" data-slide-to="11"></li>
	<li data-target="#demo" data-slide-to="12"></li>
	<li data-target="#demo" data-slide-to="13"></li>
	 <li data-target="#demo" data-slide-to="13"></li>
	  <li data-target="#demo" data-slide-to="13"></li>
  </ul>
 -->
  <!-- The slideshow -->
	  
  <div class="carousel-inner border">
	  
	  
	  
	   <div class="carousel-item active">

	  <a href="recherche/events/2025/symposium/symposium.php"><img src="images/slide/ev255.jpg" alt="sef" width="1100" height="500"></a>

  </div>
	  
	  
	  
	  <div class="carousel-item ">

	  <a href="vie_estudiantine/activites/oracle25/oracle25.php"><img src="images/slide/oracle25.jpg" alt="sef" width="1100" height="500"></a>

  </div>
	  
	  
	   
	  <div class="carousel-item ">

	  <a href="recherche/events/2025/BAS25/BAS25.php"><img src="images/slide/bass25.jpg" alt="sef" width="1100" height="500"></a>

  </div>
	  
	  
	  <div class="carousel-item ">

	  <a href="#"><img src="images/slide/aidfitre25.jpg" alt="sef" width="1100" height="500"></a>

  </div>
	  
	  
	    <div class="carousel-item">
	  <a href="vie_estudiantine/activites/JMSSU25/JMSSU25.php"><img src="images/slide/JMSSU25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Checkup25/Checkup25.php"><img src="images/slide/checkup1.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	       <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Football25/Football25.php"><img src="images/slide/footb25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	       <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/HouseOfSoftSkills25/HouseOfSoftSkills.php"><img src="images/slide/house25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  
	     <div class="carousel-item ">
	  <a href="#"><img src="images/slide/fe_femm25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/airwa25/airwa25.php"><img src="images/slide/airw255.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/pss_se/pss_se.php"><img src="images/slide/Sliderpss_se.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	      <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/liste2.php"><img src="images/slide/electionlistess.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	    <div class="carousel-item ">
	  <a href="affaires_pedagogiques/affaires_pedagogiques.php"><img src="images/slide/rosetta24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/CSM2024/CSM2024.php"><img src="images/slide/CSM24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/annulation2.php"><img src="images/slide/annulationElection.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item ">
	  <a href="recherche/events/2024/MAIFoot/MAIFoot.php"><img src="images/slide/IAF2424.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  <div class="carousel-item ">
	  <a href="affaires_pedagogiques/affaires_pedagogiques.php"><img src="images/slide/reclamation_bourse.png" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	   <div class="carousel-item  ">
	  <a href="recherche/events/2024/LMECS24Con/LMECS24Con.php"><img src="images/slide/physiqueCon24_.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  <div class="carousel-item">
	  <a href="vie_estudiantine/activites/journee_MST_MAGBio/journee_MST_MAGBio.php"><img src="images/slide/mstmagbio24j.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	     <div class="carousel-item ">
	  <a href="recherche/events/2024/LCP2BM24Con/LCP2BM24Con.php"><img src="images/slide/LCP2BM24Con.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	     <div class="carousel-item ">
	  <a href="recherche/events/2024/LMIA24Con/LMIA24Con.php"><img src="images/slide/LMIA24Con.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	     <div class="carousel-item ">
	  <a href="recherche/events/2024/LIM24/lim.php"><img src="images/slide/lim245.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	      <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/liste.php"><img src="images/slide/listeelec24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	    <div class="carousel-item ">
	  <a href="recherche/events/2024/fisvc/fisvc.php"><img src="images/slide/naji242.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Techathon24/Techathon24.php"><img src="images/slide/Techathon24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	   <div class="carousel-item ">
	  <a href="recherche/events/2024/NBSEH24/NBSEH24.php"><img src="images/slide/NB24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Greenwave24/Greenwave24.php"><img src="images/slide/ Greenwave2.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	      
	  
	       <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/conference_habillez_reussite24/conference_habillez_reussite24.php"><img src="images/slide/conf_tec242.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	      <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/Elections2024_2.php"><img src="images/slide/election_2_24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	       <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Hydrogene/Hydrogene.php"><img src="images/slide/Hydrogene.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	      <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/sang24/sang24.php"><img src="images/slide/sang4.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	     <div class="carousel-item ">
	  <a href="recherche/events/2024/JMIA_2024/JMIA_2024.php"><img src="images/slide/journeMAth24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  
	  <div class="carousel-item ">
	  <a href="formation_initiale/cd.php"><img src="images/slide/bouse-moniteurs.png" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  <div class="carousel-item ">
	  <a href="formation_initiale/cd.php"><img src="images/slide/inscription_attente_doctorat.png" alt="sef" width="1100" height="500"></a>
  </div>
	       <div class="carousel-item">
	  <a href="vie_estudiantine/activites/semaine_universitaire_lecture24/semaine_universitaire_lecture24.php"><img src="images/slide/lecture24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	     <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/resultats.php"><img src="images/slide/fstm_r_election24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	    <div class="carousel-item ">
	  <a href="#"><img src="images/slide/indépendance24.jpg" alt="sef" width="1100" height="500"></a>
	  </div>
	  
	  
	  <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/huaweiworkshop-2024-2025/huaweiworkshop-2024-2025.php"><img src="images/slide/huaweiworkshop-2024-2025.png" alt="sef" width="1100" height="500"></a>
	  </div>
	  
	  
	     <div class="carousel-item ">
	  <a href="formation_initiale/cd.php"><img src="images/slide/inscr_doc24_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	      <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/ElectionsSelect2024.php"><img src="images/slide/selectElection.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  	     <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/celebration_marche_verte24/celebration_marche_verte24.php"><img src="images/slide/celebration_marche_verte24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	 
	  <!--
	   <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/DATA_IA2024/DATA_IA2024.php"><img src="images/slide/DATAIA2024.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/Elections2024/Elections2024.php"><img src="images/slide/elections.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	   <div class="carousel-item ">
	  <a href="recherche/events/2024/LMCSA24/LMCSA24.php"><img src="images/slide/Afiche_Séminaire_17_10-1_241016_114530.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/FCEA_FSTM23_24/fcea_fstm23_24.php"><img src="images/slide/FCEA-FSTM.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item ">
	  <a href="recherche/events/2024/LCPBBM24/LCPBBM24.php"><img src="images/slide/LCPBBM24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	    <div class="carousel-item ">
	  <a href="formation_initiale/cd.php"><img src="images/slide/doc2425.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  
	     <div class="carousel-item ">
	  <a href="recherche/events/2024/LMCMAN24_25/LMCMAN24_25.php"><img src="images/slide/AnnonceduseminairedulaboratireLMCMAN2024.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  	   <div class="carousel-item">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/bacheliers-2emechance.png" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	   <div class="carousel-item  ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/changement-filiere.png" alt="sef" width="1100" height="500"></a>
  </div>
	  	  

	  
	   <div class="carousel-item ">
	  <a href="formation_initiale/mst.php"><img src="images/slide/placeMst245.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	   <div class="carousel-item  ">
	  <a href="formation_initiale/lst.php"><img src="images/slide/lstextern24sisd.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	      <div class="carousel-item  ">
	  <a href="formation_initiale/ci.php"><img src="images/slide/fiii24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	      <div class="carousel-item  ">
	  <a href="formation_initiale/mst.php"><img src="images/slide/mst_att_224_25_02.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item  ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/tc_4_24_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/association_etudiant_2024_2025/association_etudiant_2024_2025.php"><img src="images/slide/activite2024_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  
	  
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/universitaire_2024_2025/universitaire_2024_2025.php"><img src="images/slide/lancement24_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  
	  <div class="carousel-item ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/list_att_3_24_25_tc.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	  	   <div class="carousel-item  ">
	  <a href="formation_initiale/ci.php"><img src="images/slide/attente_GECI_2.png" alt="sef" width="1100" height="500"></a>
  </div>
	  	  
	   <div class="carousel-item ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/list_att_2_24_25_tc.jpg" alt="sef" width="1100" height="500"></a>
  </div>
<div class="carousel-item ">
	  <a href="affaires_pedagogiques/affaires_pedagogiques.php"><img src="images/slide/tc_n_2024_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
<div class="carousel-item ">
	  <a href="affaires_pedagogiques/affaires_pedagogiques.php"><img src="images/slide/Liste_Transferts_1726931299.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	   <div class="carousel-item ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/list_att_tc24_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	       <div class="carousel-item ">
	  <a href="affaires_pedagogiques/affaires_pedagogiques.php"><img src="images/slide/debut_cours_24_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	     <div class="carousel-item ">
	  <a href="formation_initiale/ci.php"><img src="images/slide/att_fi.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  <div class="carousel-item">
	  <a href="formation_initiale/mst.php"><img src="images/slide/att_mst.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item">
	  <a href="recherche/events/2024/WCCS24/WCCS24.php"><img src="images/slide/WCCS24.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	       <div class="carousel-item ">
	  <a href="vie_estudiantine/activites/TECHATHON4/techathon.php"><img src="images/slide/capgemini.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  
	      <div class="carousel-item ">
	  <a href="formation_initiale/lst.php"><img src="images/slide/lst24_25.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  	    <div class="carousel-item ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/bachelier-phase-2.png" alt="sef" width="1100" height="500"></a>
  </div>
	  
	    <div class="carousel-item">
	  <a href="formation_initiale/ci.php"><img src="images/slide/insci_ci.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  <div class="carousel-item ">
	  <a href="formation_initiale/ci.php"><img src="images/slide/concours-ci-orale-202-2025.png" alt="sef" width="1100" height="500"></a>
  </div>
	   <div class="carousel-item">
	  <a href="formation_initiale/ci.php"><img src="images/slide/ci24_25sous.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	  <div class="carousel-item">
	  <a href="formation_initiale/cd.php"><img src="images/slide/reinscription-ced-2024-2025.png" alt="sef" width="1100" height="500"></a>
  </div>
	    
	  
	  	   <div class="carousel-item ">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/mst-la-2-2024-2025.jpg" alt="sef" width="1100" height="500"></a>
  </div>
	  
	   <div class="carousel-item">
	  <a href="formation_initiale/ci.php"><img src="images/slide/candidature-fi-2024-2025.png" alt="sef" width="1100" height="500"></a>
  </div>
	  
	   	  <div class="carousel-item ">

	  <a href="formation_initiale/cd.php"><img src="images/slide/doct24_25.jpg
		  " alt="sef" width="1100" height="500"></a>

  </div>-->
	  
	  
	  
	  
	  
	    
	  <!--
	  
	   <div class="carousel-item">

	  <a href="#"><img src="images/slide/arch24.jpg
		  " alt="sef" width="1100" height="500"></a>

  </div>
	  
	  
	  
	  
	
	  <div class="carousel-item">

	  <a href="formation_initiale/cd.php"><img src="images/slide/autorisation_doctorants.jpg
		  " alt="sef" width="1100" height="500"></a>
	  </div>
	  
	    <div class="carousel-item ">
	  <a href="#"><img src="images/slide/anne_h.jpg" alt="sef" width="1100" height="500"></a>
  </div> 
	    <div class="carousel-item ">
	  <a href="vie_estudiantine/journees_laureats/2024/2024.php"><img src="images/slide/Cérémonie2024.jpg" alt="sef" width="1100" height="500"></a>
  </div> 

	  
	   <div class="carousel-item">
	  <a href="formation_initiale/tronc_commun.php"><img src="images/slide/tc20245_2025.jpg" alt="sef" width="1100" height="500"></a>
  </div> 

	  
	  <div class="carousel-item">
	  <a href="#"><img src="images/slide/Desktop - 4 (1).jpg" alt="sef" width="1100" height="500"></a>
  </div> 

	  
	  
	  
	  <div class="carousel-item">
	  <a href="formation_initiale/mst.php"><img src="images/slide/candidature-en-ligne-MST-2024-2025-2.jpg" alt="sef" width="1100" height="500"></a>
  </div> 
	  <div class="carousel-item">
	  <a href="#"><img src="images/slide/voeux_adha_2024.png" alt="sef" width="1100" height="500"></a>
  </div> 
	  
	  
	   <div class="carousel-item">
	  <a href="#"><img src="images/slide/fakkar.jpg" alt="sef" width="1100" height="500"></a>
  </div> 
	  
	  
	   <div class="carousel-item">
	  <a href="recherche/events/2024/LMCMAN23_24/LMCMAN.php"><img src="images/slide/LMCMAN23_24.jpg" alt="sef" width="1100" height="500"></a>
  </div> 
	  
	  
	    <div class="carousel-item">
	   <a href="https://www.fstm.ac.ma/esri.php"><img src="images/slide/canva.png" alt="vaccination18ansplus" width="1100" height="500"></a>
	  </div>
	
	  
-->
	  	  
	
	<div class="carousel-item">
      <a href="https://www.facebook.com/fstmofficielle"><img src="images/slide/facebook.png" alt="facebook" width="1100" height="500"></a>
    </div>
	
	  
	  
  </div>
	 

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon"></span> 
  </a>
</div>

		<div class="row">
		<div class="col-lg-3 col-md-3"><div class="buttonSquare shadow DodgerBlue text-white"><a href="/affaires_pedagogiques/porte_documents.php" class="text-white"><i class="fas fa-clipboard-list"></i><span>Archive des examens</span></a></div></div>
	<div class="col-lg-3 col-md-3"><div class="buttonSquare shadow DodgerBlue text-white"><a href="/affaires_pedagogiques/affaires_pedagogiques.php" class="text-white"><i class="fas fa-clipboard-list"></i><span>Affaires pédagogiques</span></a></div></div>
	<div class="col-lg-3 col-md-3"><div class="buttonSquare shadow DodgerBlue text-white"><a href="https://e-learning.univh2c.ma/" class="text-white"><i class="fas fa-chalkboard-teacher"></i><span>E-learning</span></a></div></div>
<div class="col-lg-3 col-md-3"><div class="buttonSquare shadow Red text-white"><a href="e_services/campus_connecte.php" class="text-white"><i class="fas fa-chalkboard-teacher"></i><span>Campus Connecté</span></a></div></div>
	<div class="col-lg-3 col-md-3"><div class="buttonSquare shadow Red text-white"><a href="https://ent.univh2c.ma/" class="text-white"><i class="fas fa-chalkboard-teacher"></i><span>ENT</span></a></div></div>

	</div>
  
</div>

<br>

<div class="container">
<div class="row">
  <div class="col-md-9">
 
 <div class="card-deck">
 
 <div class="card shadow p-3 mb-4 bg-light rounded-0">
     
	 
	 <a href="formation_initiale/presentation.php"><img class="card-img-top rounded-0" src="images/cards/formation_initiale.jpg" alt=""></a><br>
	  <a href="formation_initiale/presentation.php" class="btn btn-block rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Formation initiale</b></i></a>
	   
	 
	 
 </div>
 
 <div class="card shadow p-3 mb-4 bg-light rounded-0">
     
	  <a href="formation_continue/presentation.php"><img class="card-img-top rounded-0" src="images/cards/formation_continue.jpg" alt=""></a><br>
	  <a href="formation_continue/presentation.php" class="btn btn-block rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Formation continue</b></i></a>
	
	
	 
	 
	 
 </div>
 <div class="card shadow p-3 mb-4 bg-light rounded-0">
     <a href="affaires_pedagogiques/affaires_pedagogiques.php"><img class="card-img-top rounded-0" src="images/cards/affaires_pedagogiques.jpg" alt=""></a><br>
	 <a href="affaires_pedagogiques/affaires_pedagogiques.php" class="btn btn-block rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Affaires pédagogiques</b></i></a>
	
	 
 </div>
 
 
  
  </div>
 
 <!--   -->
 
 <div class="card-deck">
 
 
 <div class="card shadow p-3 mb-4 bg-light rounded-0">
     
	 <a href="recherche/presentation.php"><img class="card-img-top rounded-0" src="images/cards/recherche.jpg" alt=""></a><br>
	 <a href="recherche/presentation.php" class="btn btn-block rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Recherche</b></i></a>
	
	 
 </div>
 
 <div class="card shadow p-3 mb-4 bg-light rounded-0">
     
	 <a href="entreprise_et_carriere/forum_fstm_entreprises.php"><img class="card-img-top rounded-0" src="images/cards/entreprise_et_carriere.jpg" alt=""></a><br>
	 <a href="entreprise_et_carriere/forum_fstm_entreprises.php" class="btn btn-block rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Entreprise et Carrière</b></i></a>
	
	 
 </div>
 
 <div class="card shadow p-3 mb-4 bg-light rounded-0">
     
	 <a href="vie_estudiantine/activites.php"><img class="card-img-top rounded-0" src="images/cards/vie_estudiantine.jpg" alt=""></a><br>
	 <a href="vie_estudiantine/activites.php" class="btn btn-block rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Vie estudiantine</b></i></a>
	
	 
	 
 </div>
  
  </div>
 
 
 
 
 <!--  Breaking news carousel -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
 <div>
 <div class="row">
	    <div class="col-12 py-1 bg-white">
    	    <div class="row">
                <!--Breaking box-->
                <div class="col-md-3 col-lg-2 pr-md-0">
                    <div class="p-2 bg-dark text-white text-center breaking-caret"><span class="font-weight-bold"><i><a href="actualites/actualites.php" style="color: #ffffff; text-decoration: none" >Actualités</a></i></span></div>
                </div>
                
                <!--Breaking content-->
                <div class="col-md-9 col-lg-10 pl-md-4 py-2">
                    <div class="breaking-box">
                        <div id="carouselbreaking" class="carousel slide" data-ride="carousel">
                            <!--breaking news-->
                            <div class="carousel-inner">
								<!--list post-->
								
								
								 
						<div class="carousel-item active">
       <a><span class="position-relative mx-2 badge badge-danger rounded-0"><i>Recrutement</i></span></a> <a class="text-danger" href="recrutement/concours.php"><i><b>		Liste des convoqués pour le poste de Chef de Service des Affaires Étudiantes et Statistiques
								</b></i></a>
                                </div>
								
								
									<div class="carousel-item ">
       <a><span class="position-relative mx-2 badge badge-danger rounded-0"><i>Recrutement</i></span></a> <a class="text-danger" href="recrutement/resultats.php"><i><b>		Résultat final pour le recrutement d'administrateur 3ème grade, Sciences Economique et Gestion , Session 10/11/2023.
								</b></i></a>
                                </div>
								
								
									<div class="carousel-item ">
       <a><span class="position-relative mx-2 badge badge-danger rounded-0"><i>Recrutement</i></span></a> <a class="text-danger" href="recrutement/resultats.php"><i><b>	Résultat final pour le recrutement de technicien 3ème grade, Systémes et Réseaux Informatiques , Session 10/11/2023.
								</b></i></a>
                                </div>
								
								
									<div class="carousel-item ">
       <a><span class="position-relative mx-2 badge badge-danger rounded-0"><i>Recrutement</i></span></a> <a class="text-danger" href="recrutement/resultats.php"><i><b>		Résultat final pour le recrutement d'un Maître de conférence,spécialité Génie Électrique , Session 28-10-2024.
								</b></i></a>
                                </div>
								
								
								
									
								
								
								
						
								
							

								
							
									
								
								
								
								
							
								
								
								
								
							
							
								
									
					
								
								
								
								
								
								
								
								
								
								
								
									
								
								
								
							
								
								
								
								
								
								
								
								
								
								
								
							
								
								
								
								
										
								
							
								
								
								
								
								
									
								
							
								
								
								
								
                            </div>
                            <!--end breaking news-->
                            
                            <!--navigation slider-->
                            <div class="navigation-box p-2 d-none d-sm-block">
                                <!--nav left-->
                                <a class="carousel-control-prev text-primary" href="#carouselbreaking" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                
                                <!--nav right-->
                                <a class="carousel-control-next text-primary" href="#carouselbreaking" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--end navigation slider-->
                        </div>
                    </div>
                </div>
            </div>
			
        </div>
	</div>
 </div>
 
 
 <!--  end of Breaking news carousel -->
 
 
 
 <!-- News carousel  -->
 
 
 <div class="shadow p-2 mb-4 bg-light rounded-0">
 
 
 
 
            <!--SECTION START-->
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel border" data-ride="carousel">
                        <!--slider navigate-->
						<!--
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                        </ol>
                        -->
                        <!--carousel inner-->
                        <div class="carousel-inner">
							<!--Item slider-->
                            <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="recrutement/resultats.php">
                                                <img class="img-fluid w-100"
                                                     src="images/slide_actualites/resultat.png"
                                                     alt="Image description">
                                            </a>
                                        </div>
                                        
                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
										 <a class="p-2 badge badge-primary rounded-0"><i>Recrutement</i></a>
                                            <!--title and description-->
                                            <a href="recrutement/resultats.php">
                                                <h2 class="h3 post-title text-white my-1"><i>Résultats</i></h2>
                                            </a>
											<!-- meta title -->
                                            <div class="news-meta">
												<span class="news-date"><i>publié le 31 mai 2019</i></span>
                                            </div>

                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>
                            <!--Item slider-->
                            <div class="carousel-item ">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="formation_continue/presentation.php">
                                                <img class="img-fluid w-100"
                                                     src="images/slide_actualites/fc.png"
                                                     alt="Image description">
                                            </a>
                                        </div>
                                        
                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
										 <a class="p-2 badge badge-primary rounded-0"><i>Formation continue</i></a>
                                            <!--title and description-->
                                            <a href="formation_continue/presentation.php">
                                                <h2 class="h3 post-title text-white my-1"><i>Nouvelles filières</i></h2>
                                            </a>
											<!-- meta title -->
                                            <div class="news-meta">
												<span class="news-date"><i>publié le 13 mars 2019</i></span>
                                            </div>

                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>
							
							
							<!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="entreprise_et_carriere/forum/2019/2019.php">
                                                <img class="img-fluid w-100"
                                                     src="images/slide_actualites/forum.png"
                                                     alt="Image description">
                                            </a>
                                        </div>
                                        
                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
										 <a class="p-2 badge badge-primary rounded-0"><i>Entreprise et Carrière</i></a>
                                            <!--title and description-->
                                            <a href="entreprise_et_carriere/forum/2019/2019.php">
										
                                                <h2 class="h3 post-title text-white my-1"><i>Forum FSTM-Entreprises</i></h2>
                                            </a>
											<!-- meta title -->
                                            <div class="news-meta">
												<span class="news-date"><i>publié le 12 avril 2019</i></span>
                                            </div>

                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>
                            
							
                            
                            
							
							
							
							
							<!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <!--thumbnail-->
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="affaires_pedagogiques/affaires_pedagogiques.php">
                                                <img class="img-fluid w-100"
                                                     src="images/slide_actualites/affaires_pedagogiques2.png"
                                                     alt="Image description">
                                            </a>
                                        </div>
                                        
                                        <!--title-->
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
										 <a class="p-2 badge badge-primary rounded-0"><i>Affaires pédagogiques</i></a>
                                            <!--title and description-->
                                            <a href="affaires_pedagogiques/affaires_pedagogiques.php">
										
                                                <h2 class="h3 post-title text-white my-1"><i>Nouveaux documents à télécharger</i></h2>
                                            </a>
											<!-- meta title -->
                                            <div class="news-meta">
												<span class="news-date"><i>publié le 25 avril 2019</i></span>
                                            </div>

                                        </div>
                                        <!--end title-->
                                    </div>
                                    <!--end thumbnail-->
                                </div>
                            </div>
                            
							
							
                            
							
							
							
                        </div>
                        <!--end carousel inner-->
                    </div>
                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
					
					
                </div>
                <!--End slider news-->
              
			  
			  

<div class="col-md-6">
	<div class="card-deck p-1">
		<div class="card p-3 mb-4 bg-light border-light rounded-0">
    	  
		  <a href="actualites/bulletin_d_information.php" class="btn btn-dark btn-block rounded-0" role="button"><i><b>Bulletin d'information</b></i></a>
		  <p></p>
		  
		  <a href="actualites/presse.php" class="btn btn-dark btn-block rounded-0" role="button"><i><b>Presse</b></i></a>
		  <p></p>
		  
		  <!-- Presse carousel starts here   -->
		  
<center>  

<div class="col-md-11">
  <div id="demo3" class="carousel slide bg-light rounded-0 border" data-ride="carousel">

  <!-- Indicators -->
  <!--
  <ul class="carousel-indicators">
    <li data-target="#demo3" data-slide-to="0" class="active"></li>
    <li data-target="#demo3" data-slide-to="1"></li>
    <li data-target="#demo3" data-slide-to="2"></li>
	
  </ul>
  -->
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="actualites/presse.php"><img src="actualites/files/presse/cfgmag.png" alt="Slide1" width="500" height="500"></a>
    </div>
    
	<div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/Economiste.png" alt="Slide2" width="500" height="500"></a>
    </div>
    
	<div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/marochebdo.png" alt="Slide2" width="500" height="500"></a>
    </div>
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/itihad.png" alt="Slide2" width="500" height="500"></a>
    </div>
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/albayane.png" alt="Slide2" width="500" height="500"></a>
    </div>
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/Tahari.png" alt="Slide2" width="500" height="500"></a>
    </div>
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/Maghrib.png" alt="Slide2" width="500" height="500"></a>
    </div>
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/hiwar.png" alt="Slide2" width="500" height="500"></a>
    </div>
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/AhdatNews.png" alt="Slide2" width="500" height="500"></a>
    </div>
    
	  
	  <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/assahraa.png" alt="Slide2" width="500" height="500"></a>
    </div>
      
	<div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/liberation.png" alt="Slide2" width="500" height="500"></a>
    </div>
      
	  
	  <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/mohammediapresse.png" alt="Slide2" width="500" height="500"></a>
    </div>
    
	  <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/jihawiapresse.png" alt="Slide2" width="500" height="500"></a>
    </div>
    
	  <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/fonontv.png" alt="Slide2" width="500" height="500"></a>
    </div>
    
	 
	  
	  <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/alaoula.png" alt="Slide2" width="500" height="500"></a>
    </div>
    
    <div class="carousel-item">
      <a href="actualites/presse.php"><img src="actualites/files/presse/2m.png" alt="Slide2" width="500" height="500"></a>
    </div>
	
	
	
  </div>
  
  <!-- Left and right controls -->
  <!--
  <a class="carousel-control-prev" href="#demo3" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo3" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  -->
  
</div>
  
</div>

</center>
		  
		  
		  
		  
		  
		  <!--  Presse carousel ends here  -->
		  
		  <p></p>
		  <a href="https://www.facebook.com/fstmofficielle" target="_blank" class="btn btn-dark btn-block rounded-0" role="button"><i><b>Page facebook</b></i></a>
		  <p></p>
		 
		  <center><a href="actualites/actualites.php" style="color: #337ab7;"><i>Toutes les actualités : Cliquez ici</i></a></center>
		  
		  
		  
		  
		</div>
	</div>
</div>
			  
			  
			  </section>
			   
            <!--END SECTION-->
        
 <!-- End news carousel   -->
 
 
 </div>
 
 

 
 <!--

<div>
        
       <div class="shadow p-2 mb-4 bg-light rounded-0">
		  <h5 style="color: #337ab7;"><center><i><b>Affaires pédagogiques</b></i></center></h5>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 1</i></a><br>
          <a href="#" style="color: #337ab7;"><i><b>- </b>Link 2</i></a><br>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 3</i></a><br>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 4</i></a><br>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 4</i></a><br>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 4</i></a><br>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 4</i></a><br>
		  <a href="#" style="color: #337ab7;"><i><b>- </b>Link 4</i></a><br>
		  
        </div>
</div>
-->
 
</div>





<div class="col-md-3">
 <div class="card-deck">
  <div class="card shadow p-3 mb-4 bg-light rounded-0">
    
	<a href="e_services.php"><img class="card-img-top rounded-0" src="images/cards/e_services.jpg" alt=""></a><br>
	 <a href="e_services.php" class="btn btn-danger btn-block rounded-0" role="button"><i><b>E-services</b></i></a>
	<br>
	
		  
		  <div class="card-body shadow p-2 mb-2 bg-white">
            <a href="http://mail.fstm.ac.ma" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-mail</b></i></a>
		  </div>
		  <div class="card-body shadow p-2 mb-2 bg-white">
            <a href="https://e-fstm.fstm.ac.ma/" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-FSTM</b></i></a>
		  </div>		  
		  <div class="card-body shadow p-2 mb-2 bg-white">
            <a href="https://e-resultat.fstm.ac.ma" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-résultat</b></i></a>
		  </div>
		  
		  <div class="card-body shadow p-2 mb-2 bg-white">
             <a href="https://e-candidature.fstm.ac.ma" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-candidature</b></i></a>
		  </div>
		  <!--
		  <div class="card-body shadow p-2 mb-2 bg-white">
            <a href="https://e-scholar.fstm.ac.ma" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-FSTM</b></i></a>
		  </div>
		  -->
		 
		 <div class="card-body shadow p-2 mb-2 bg-white">
             <a href="diplomes/index.php" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-suivi des lauréats</b></i></a>
		  </div>
		 
		 <div class="card-body shadow p-2 mb-2 bg-white">
            <a href="https://e-learning.univh2c.ma" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>E-learning</b></i></a>
	  </div>	
	  
	   <div class="card-body shadow p-2 mb-2 bg-white">
            <a href="mobilite.php" class="btn btn-block border border-danger rounded-0" style="color: #337ab7;" role="button"><i><b>Mobilité Internationale</b></i></a>
	  </div>
	  
	  
  </div>
  
 </div>
</div>

 
 
</div> 


	

</div>




<div class="jumbotron jumbotron-fluid bg-light">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <div class="container">
  <h5 style="color: #337ab7;"><center><i><b>FSTM en chiffres</b></i></center></h5>
  <br>
	<div class="row">
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><b>3722</b></span>
        <span class="count-name"><b>Étudiants</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-chalkboard-teacher"></i>
        <span class="count-numbers"><b>186</b></span>
        <span class="count-name"><b>Enseignants</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fas fa-user-tie"></i>
        <span class="count-numbers"><b>57</b></span>
        <span class="count-name"><b>Cadres</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="far fa-building"></i>
        <span class="count-numbers"><b>8</b></span>
        <span class="count-name"><b>Départements</b></span>
      </div>
    </div>
	
	
	
	

	</div>
	<div class="row">
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-flask"></i>
        <span class="count-numbers"><b>13</b></span>
        <span class="count-name"><b>Laboratoires</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-lightbulb-o"></i>
        <span class="count-numbers"><b>1</b></span>
        <span class="count-name"><b>Centre de recherche</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><b>595</b></span>
        <span class="count-name"><b>Doctorants</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-map-signs"></i>
        <span class="count-numbers"><b>11</b></span>
        <span class="count-name"><b>Licences ST</b></span>
      </div>
    </div>
	
	
	
	
	

	</div>
	
	<div class="row">
	
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fa fa-dna"></i>
        <span class="count-numbers"><b>6</b></span>
        <span class="count-name"><b>Masters ST</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fas fa-cog"></i>
        <span class="count-numbers"><b>5</b></span>
        <span class="count-name"><b>Filières ingénieur</b></span>
      </div>
    </div>
	
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fas fa-tag"></i>
        <span class="count-numbers"><b>20</b></span>
        <span class="count-name"><b>Licences d'université</b></span>
      </div>
    </div>
	
	<div class="col-md-3">
      <div class="card-counter rounded-0" style="background-color: #337ab7;">
        <i class="fas fa-tags"></i>
        <span class="count-numbers"><b>10</b></span>
        <span class="count-name"><b>Masters d'université</b></span>
      </div>
    </div>
	
	
	<!--     -->
	
	

	</div>
	
  </div>
  	
</div>






<div class="jumbotron jumbotron-fluid bg-white">

  <div class="container">
  <h5 style="color: #337ab7;"><center><i><b>Équipe de gestion</b></i></center></h5>
  <br>
	<div class="row">
	
	<!--<div class="col-md-3">-->
	<div class="col-md">
				<center><img class="img-fluid rounded-circle" width="170px" height="190px" src="images/equipe_de_gestion/doyennevf2.jpg" alt=""></center>
				<div style="padding-top: 30px;">
				<center><p style="color: #337ab7;"><i><b>Pr. Latifa Mouhir</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Doyenne</i></p></center>
				</div>
	</div>
	
	<div class="col-md">
				<center><img class="img-fluid rounded-circle" width="170px" height="190px" src="images/equipe_de_gestion/atmani.png" alt=""></center>
				<div style="padding-top: 42px;">
				<center><p style="color: #337ab7;"><i><b>Pr. Elhoussine Atmani</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Vice Doyen chargé des Affaires Pédagogiques</i></p></center>
				</div>
	</div>
		

		<div class="col-md">
				<center><img class="img-fluid rounded-circle" width="170px" height="190px" src="images/equipe_de_gestion/bardad.png" alt=""></center>
				<div style="padding-top: 42px;">
				<center><p style="color: #337ab7;"><i><b>Pr. Abdennaceur Baghdad</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Vice Doyen chargé de la Recherche Scientifique et de la Coopération</i></p></center>
				</div>
	</div>


<!--	
	<div class="col-md-3">
				<center><img class="img-fluid rounded-circle" src="images/equipe_de_gestion/mama_elrhazi.png" alt=""></center>
				<br>
				<center><p style="color: #337ab7;"><i><b>Pr. Mama El Rhazi</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Vice Doyen chargée de la Recherche Scientifique et de la Coopération</i></p></center>
	</div>
-->
	
	

	</div>
	<br>
	<div class="row">
	<div class="col-md">
				<center><img class="img-fluid rounded-circle" width="170px" height="190px" src="images/equipe_de_gestion/madinzi.png" alt=""></center>
				<div style="padding-top: 42px;">
				<center><p style="color: #337ab7;"><i><b>Pr. Abdelaziz Madinzi</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Chargé de mission de Vice Doyen Chargé de la Qualité et du Développement</i></p></center>
				</div>
	</div>
		
		
<div class="col-md">
				<center><img class="img-fluid rounded-circle" width="170px" height="190px" src="images/equipe_de_gestion/mohamed_bouzelmate.jpg" alt=""></center>
				<div style="padding-top: 42px;">
				<center><p style="color: #337ab7;"><i><b>Mr. Mohammed Bouzelmate</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Secrétaire Général</i></p></center>
				</div>
	</div>
	<!--
	<div class="col-md-4">
				<center><img class="img-fluid rounded-circle" src="images/equipe_de_gestion/hafida_messaouri.png" alt=""></center>
				<br>
				<center><p style="color: #337ab7;"><i><b>Pr. Hafida Messaouri Deboun</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Chargée de mission : Développement Numérique</i></p></center>
	</div>-->
	<div class="col-md">
				<center><img class="img-fluid rounded-circle" width="170px" height="190px" src="images/equipe_de_gestion/youssef_el_kouari.png" alt=""></center>
				<br>
				<center><p style="color: #337ab7;"><i><b>Pr. Youssef El Kouari</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Chargé de mission : Formation Continue</i></p></center>
	</div>
	<!--
	<div class="col-md-4">
				<center><img class="img-fluid rounded-circle" src="images/equipe_de_gestion/adil_dani.png" alt=""></center>
				<br>
				<center><p style="color: #337ab7;"><i><b>Pr. Adil Dani</b></i></p></center>
				<center><p style="color: #337ab7;"><i>Chargé de mission : Observatoire de la Vie des Étudiants</i></p></center>
	</div>
	
	-->

	</div>
	
  </div>
  <br>
  	<center><a href="organisation_generale/organigramme_fonctionnel.php" class="btn rounded-0" style="background-color: #337ab7; color: #ffffff;" role="button"><i><b>Voir aussi : Organigramme fonctionnel</b></i></a></center>
	
</div>






<div class="jumbotron jumbotron-fluid bg-light">

  <div class="container">
  <h5 style="color: #337ab7;"><center><i><b>Félicitations</b></i></center></h5>
  <br>
	<div class="row">
	
  <div id="demo2" class="carousel slide bg-light rounded-0 border" data-ride="carousel">

  <!-- Indicators -->
	<!--  
  <ul class="carousel-indicators">
    <li data-target="#demo2" data-slide-to="0" class="active"></li>
    <li data-target="#demo2" data-slide-to="1"></li>
    <li data-target="#demo2" data-slide-to="2"></li>
	<li data-target="#demo2" data-slide-to="3"></li>
	<li data-target="#demo2" data-slide-to="4"></li>
	<li data-target="#demo2" data-slide-to="5"></li>
	<li data-target="#demo2" data-slide-to="6"></li>
	
  </ul>
  -->
	  
  <!-- The slideshow -->

  <div class="carousel-inner">
	  
	  
	   <div class="carousel-item active">
      <img src="images/slide_felicitation/azizamin24.png" alt="Slide1" width="1100" height="500">
    </div>
	  
	    <div class="carousel-item ">
      <img src="images/slide_felicitation/elghazi.png" alt="Slide1" width="1100" height="500">
    </div>
	  	   <div class="carousel-item ">
      <img src="images/slide_felicitation/felisitations_amine.png" alt="Slide1" width="1100" height="500">
    </div>
	   <div class="carousel-item ">
      <img src="images/slide_felicitation/meilleure_these_2018.png" alt="Slide1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slide_felicitation/bouazizi.png" alt="Slide1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slide_felicitation/consumer_electronic_show.png" alt="Slide2" width="1100" height="500">
    </div>
    
	<div class="carousel-item">
      <img src="images/slide_felicitation/dounia_lakhal.png" alt="Slide3" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slide_felicitation/huawei.png" alt="Slide4" width="1100" height="500">
    </div>
    
	<div class="carousel-item">
      <img src="images/slide_felicitation/yajouz.png" alt="Slide5" width="1100" height="500">
    </div>
    
	
	<div class="carousel-item">
      <img src="images/slide_felicitation/ilisi1.png" alt="Slide5" width="1100" height="500">
    </div>
    
	
	
	
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  
  

	</div>
	
	
  </div>
  	
</div>





<!--  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">	
	
<!--


<div class="container">
<div class="container">
<br>
<h5 style="color: #337ab7;"><center><i><b>FSTM en images</b></i></center></h5>
	<div class="row">
		<div class="row">
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="1"
                   data-image="images/fstm_en_images/1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="2"
                   data-image="images/fstm_en_images/2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/2.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="3"
                   data-image="images/fstm_en_images/3.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/3.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="4"
                   data-image="images/fstm_en_images/4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/4.jpg"
                         alt="Another alt text">
                </a>
            </div>
           
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="5"
                   data-image="images/fstm_en_images/5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/5.jpg"
                         alt="Another alt text">
                </a>
            </div>
			<div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="6"
                   data-image="images/fstm_en_images/6.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/6.jpg"
                         alt="Another alt text">
                </a>
            </div>
			
			
			
			
        </div>

		<div class="row">
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="7"
                   data-image="images/fstm_en_images/7.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/7.jpg"
                         alt="Another alt text">
						 
                </a>
            </div>
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="8"
                   data-image="images/fstm_en_images/8.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/8.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="9"
                   data-image="images/fstm_en_images/9.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/9.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="10"
                   data-image="images/fstm_en_images/10.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/10.jpg"
                         alt="Another alt text">
                </a>
            </div>
           
            <div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="11"
                   data-image="images/fstm_en_images/11.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/11.jpg"
                         alt="Another alt text">
                </a>
            </div>
			<div class="col-md-2 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="12"
                   data-image="images/fstm_en_images/12.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail rounded-0"
                         src="images/fstm_en_images/12.jpg"
                         alt="Another alt text">
                </a>
            </div>
			
			
			
			
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left rounded-0" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right rounded-0"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<br>
</div>
</div>

-->

<script type="text/javascript">
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>

<!--  -->
<br>





<nav class="navbar navbar-expand-md" style="background-color: #337ab7;">
  <ul class="navbar-nav">
       <p></p>
	   
	   
  </ul>
</nav>
<nav class="navbar navbar-expand-md" style="background-color: #337ab7;">
  <ul class="navbar-nav">
       <p></p>

	   
  </ul>
</nav>
<br>
  



<div class="jumbotron jumbotron-fluid bg-dark">

  <div class="container">
  <div class="row">
	<div class="col-md-3">
		
				<p style="color: #ffffff;"><i><b>FSTM</b></i></p>
				<a href="https://www.fstm.ac.ma/departements/presentation.php" style="color: #ffffff;"><i>Départements</i></a><br>
				<a href="https://www.fstm.ac.ma/affaires_pedagogiques/affaires_pedagogiques.php" style="color: #ffffff;"><i>Affaires pédagogiques</i></a><br>
				<a href="https://www.fstm.ac.ma/recherche/presentation.php" style="color: #ffffff;"><i>Recherche</i></a><br>
				<a href="https://www.fstm.ac.ma/entreprise_et_carriere/forum_fstm_entreprises.php" style="color: #ffffff;"><i>Entreprise et Carrière</i></a><br>
				<a href="https://www.fstm.ac.ma/vie_estudiantine/activites.php" style="color: #ffffff;"><i>Vie estudiantine</i></a><br>
				<a href="https://www.fstm.ac.ma/recrutement/concours.php" style="color: #ffffff;"><i>Recrutement</i></a><br>
				<a href="https://www.fstm.ac.ma/marches_publics.php" style="color: #ffffff;"><i>Marchés publics</i></a><br>
				<a href="https://www.fstm.ac.ma/divers.php" style="color: #ffffff;"><i>Divers</i></a><br>
				<a href="https://www.fstm.ac.ma/actualites/actualites.php" style="color: #ffffff;"><i>Actualités</i></a><br>
				<a href="https://www.fstm.ac.ma/e_services.php" style="color: #ffffff;"><i>E-services</i></a><br><br>
				
				
				
	</div>
	
	<div class="col-md-3">
				
				<p style="color: #ffffff;"><i><b>Formation initiale</b></i></p>
				<a href="https://www.fstm.ac.ma/formation_initiale/architecture_pedagogique.php" style="color: #ffffff;"><i>Architecture pédagogique</i></a><br>
				<a href="https://www.fstm.ac.ma/formation_initiale/tronc_commun.php" style="color: #ffffff;"><i>Tronc Commun</i></a><br>
				<a href="https://www.fstm.ac.ma/formation_initiale/lst.php" style="color: #ffffff;"><i>Licence Sciences et Techniques</i></a><br>
				<a href="https://www.fstm.ac.ma/formation_initiale/mst.php" style="color: #ffffff;"><i>Master Sciences et Techniques</i></a><br>
				<a href="https://www.fstm.ac.ma/formation_initiale/ci.php" style="color: #ffffff;"><i>Cycle Ingénieur</i></a><br>
				<a href="https://www.fstm.ac.ma/formation_initiale/cd.php" style="color: #ffffff;"><i>Cycle Doctoral</i></a><br><br>
				
				
	</div>
	
	<div class="col-md-3">
				
				<p style="color: #ffffff;"><i><b>Formation continue</b></i></p>
				<a href="https://www.fstm.ac.ma/formation_continue/lu.php" style="color: #ffffff;"><i>Licence d'Université</i></a><br>
				<a href="https://www.fstm.ac.ma/formation_continue/mu.php" style="color: #ffffff;"><i>Master d'Université</i></a><br><br>
				
				
	</div>
	
	<div class="col-md-3">
				
				<p style="color: #ffffff;"><i><b>Contact</b></i></p>
				<a style="color: #ffffff;"><i>Faculté des Sciences et Techniques de Mohammedia BP 146 Mohammedia 28806 Maroc</i></a><br>
				<a style="color: #ffffff;"><i>Tél 1 : +212523314708</i></a><br>
				<a style="color: #ffffff;"><i>Tél 2 : +212666613325 </i></a><br>
				<a style="color: #ffffff;"><i>Fax : +212523315353 </i></a><br>
				<a style="color: #ffffff;"><i>E-mail : contact@fstm.ac.ma</i></a><br>
				<a style="color: #ffffff;"><i>Site web : www.fstm.ac.ma</i></a><br>
			<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
			<!--	<a href="https://www.facebook.com/fstmofficielle" target="_blank" style="color: #ffffff;"><i class="fa fa-facebook-official" style="font-size:20px"></i></a><a href="https://www.facebook.com/fstmofficielle" target="_blank" style="color: #ffffff;"><i> /fstmofficielle</i></a> -->
				<a href="https://www.facebook.com/fstmofficielle" target="_blank" style="color: #ffffff;"><i>Page facebook</i></a><br>		
				<a href="https://www.fstm.ac.ma/contact.php" style="color: #ffffff;"><i>Plan d'accès</i></a><br>
				<br>
	</div>

	</div>
	<br>
	<center><p style="color: #ffffff;"><i>© 2019 Faculté des Sciences et Techniques de Mohammedia</i></p></center>
	
  </div>
  
</div>




 


</body>
</html>


