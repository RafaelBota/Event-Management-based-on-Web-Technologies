<?php 
include('MainFunctionalities.php');

 ?>

<!DOCTYPE html>
<html>

<head>

  <link rel="shortcut icon" type="image/png" href="images/Raha_Logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/5f0d9d8f4b.js" crossorigin="anonymous"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJyEn09MjTOOjZO-4aah2yGW5sQPd2Gjw&callback=initMap"></script>
   <link rel="stylesheet" href="style.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




	<title>RahaEvents</title>



</head>
<body data-spy="scroll" data-target="#navbarResponsive">

<div id="home">
<!-- Home section id -->
	<nav class="navbar navbar-expand-md  fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand"><img src="images/Raha_logo.png" class="img-responsive" alt="NavbarLogo"></a>
			<a class="navbar-brand" href="index.php?lang=en"><img src="images/en.png" class="img-responsive" alt="En"></a>
			<a href="index.php?lang=ro"><?php echo $lang['lang_ro'] ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			
			<span><i class="fas fa-bars" ></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#home"><?php echo $lang['Home'] ?></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#about_us"><?php echo $lang['About_us'] ?></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#services"><?php echo $lang['Services'] ?></a>
					</li>

				<!-- 	<li class="nav-item">
						<a class="nav-link" href="#">Accessories</a>
					</li> -->

					<li class="nav-item">
						<a class="nav-link" href="#sponsors"><?php echo $lang['Sponsors'] ?></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#contact"><?php echo $lang['Contact1'] ?></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="Register.php"><?php echo $lang['Reserve_ticket'] ?></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>




<div id="slides" class="carousel slide "data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
		<li data-target="#slides" data-slid-to="3"></li>
		<li data-target="#slides" data-slid-to="4"></li>
	

	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/1.jpg" alt="RahaBackground">
			<div class="carousel-caption">
				
				<a href="https://www.facebook.com/Raha-Party-Events-103243611284487/"><button type="button"  class="btn btn-outline-light btn-lg"><?php echo $lang['See_more_photos'] ?></button></a>
			</div>
		</div>

		<div class="carousel-item ">
		<img src="images/2.jpg" alt="background2">
		</div>

		<div class="carousel-item ">
			<img src="images/5.jpg" alt="background3">
		</div>

		<div class="carousel-item">
			<img src="images/6.jpg" alt="6">
		</div>

		<div class="carousel-item">
			<img src="images/8.jpg" alt="8">
		</div>


	<a class="carousel-control-prev" href="#slides" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#slides" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	</div>
</div>

<br>
<hr class="my-4">
<br>



<div class="container-fluid">
	<div class="row padding">
		<div class=" next-event col-sm-12 col-md-6 col-lg-6">
			
			<h2><?php echo $lang['Next_event'] ?></h2>
			<br>
			<img src="images/next-event.jpg" alt="Coming Soon!">
			<a href="Register.php" class="btn btn-dark btn-outline-light btn-lg"><?php echo $lang['Book'] ?></a>
		</div>

		<div class="Raha_card col-sm-12 col-md-6 col-lg-6">
			<h2><?php echo $lang['Card'] ?></h2>
			<img src="images/CARD.jpg" alt="Raha_card">
		</div>
	</div>
	
</div>
</div> <!-- End Home section id -->
<div id="about_us" class="offset"> <!--About us section id-->
<hr class="my-4">
<br>
<br>
<br>

	<div class="container-fluid padding">
		<div class="row padding">

			<div class=" col-sm-4 col-md-4 col-lg-4">
				<div class="images_about">
			<img src="images/Raha_logo.png" alt="logo">
			</div>
			</div>

			<div class="about col-sm-8 col-md-8 col-lg-
			8">
				<!-- <h2 class="text">About us</h2> -->
				<h5 class="about_us"><?php echo $lang['Description1'] ?></h5>
				<br>
			
				<a href="https://radio.ubbcluj.ro/eveniment-raha-garden-hunedoara/?fbclid=IwAR3xPeD6xdkvrAiAE2PXGrkFUqB42Vvmc5wAA168Nh4tLQ3bERf0TDzKitw" class="btn btn-dark btn-outline-light  btn-lg "><?php echo $lang['See_more'] ?></a>
			</div>

			
		</div>
	</div>

	
</div><!--End about us section id-->
<div id="services" class="offset"><!-- Services section id-->
<br>
<hr class="my-4">
<br>

	<div id="text">Services</div>
	<br>
	<div id="carousel_services" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carousel_services" data-slide-to="0" class="active"></li>
    <li data-target="#carousel_services" data-slide-to="1"></li>
    <li data-target="#carousel_services" data-slide-to="2"></li>
    <li data-target="#carousel_services" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bar.jpg" alt="bar" >
      <div class="carousel-caption">
		<a href="#"><button type="button"  class="btn btn-outline-light btn-lg"><?php echo $lang['Discover'] ?></button></a>
        <h3><?php echo $lang['Bartender'] ?></h3>
        <p><?php echo $lang['Barteder_description'] ?></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/poze.jpg" alt="poze">
      <div class="carousel-caption">
      	<a href="#"><button type="button"  class="btn btn-outline-light btn-lg"><?php echo $lang['Discover'] ?></button></a>
        <h3><?php echo $lang['Photos'] ?></h3>
        <p><?php echo $lang['Photos_description'] ?></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/muzica.jpg" alt="muzica" >
      <div class="carousel-caption">
      	<a href="#"><button type="button"  class="btn btn-outline-light btn-lg"><?php echo $lang['Discover'] ?></button></a>
        <h3><?php echo $lang['Sounds'] ?></h3>
        <p><?php echo $lang['Sounds_description'] ?></p>
      </div>   
    </div>
       <div class="carousel-item">
      <img src="images/video.jpg" alt="video" >
      <div class="carousel-caption">
      	<a href="#"><button type="button"  class="btn btn-outline-light btn-lg"><?php echo $lang['Discover'] ?></button></a>
        <h3><?php echo $lang['Video'] ?></h3>
        <p><?php echo $lang['Video_description'] ?></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel_services" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel_services" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div><!-- End services section id-->

<div id="sponsors" class="offset"> <!--Begin sponsors section id-->
<br>
<br>
<br>
<br>
<hr class="my-4">





<div class="jumbotron">
	<div class="col-12 text-center">
		<h2 class="partners"><?php echo $lang['Partners'] ?></h2>
	
	</div>
	<br>


	<div class="row">

			<div class="col-md-4 sponsors">
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.facebook.com/barMevents/"><img  class="img-fluid" src="images/misa.jpg" alt="misa"></a>

				</div>

				<div class="col-md-6">
					<blockquote>
						<h6><i class="fas fa-quote-left"></i><?php echo $lang['BarM'] ?><i class="fas fa-quote-right"></i></h6>	
						
						<hr class="sponsor_bar">
						<cite>&#8212;Mrejuica Mihai ,<br>
						Bar M Events</cite>
					</blockquote>
				</div>

			
			</div>
			</div>

			<div class="col-md-4 sponsors">
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.facebook.com/Rafa1506"><img class="img-fluid" src="images/Rafael1.jpg" alt="Rafael"></a>

				</div>

				<div class="col-md-6">
					<blockquote>
						<h6><i class="fas fa-quote-left"></i><h6><?php echo $lang['Rafael'] ?></h6><i class="fas fa-quote-right"></i></h6>
						
						<hr class="sponsor_bar">
						<cite>&#8212; Bota Rafael</cite>
					</blockquote>
				</div>

			
			</div>
			</div>


			<div class="col-md-4 sponsors">
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.facebook.com/watermarketingagency/"><img  class="img-fluid" src="images/cical.jpg" alt="Cical"></a>

				</div>

				<div class="col-md-6">
					<blockquote>
						<h6><i class="fas fa-quote-left"></i><h6><?php echo $lang['Cical'] ?></h6><i class="fas fa-quote-right"></i></h6>
						
						<hr class="sponsor_bar">
						<cite>&#8212;Bogdan Cical,<br>
						Water Marketing Agency</cite>
					</blockquote>
				</div>

			
			</div>
			</div>
	</div>

	<!-- <div class="row">

			<div class="col-md-4 sponsors">
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.facebook.com/watermarketingagency/"><img  class="img-fluid" src="images/cical.jpg" alt="Cical"></a>

				</div>

				<div class="col-md-6">
					<blockquote>
						<i class="fas fa-quote-left"></i>	
						<i class="fas fa-quote-right"></i>
						<hr class="sponsor_bar">
						<cite>&#8212; ,<br>
						</cite>
					</blockquote>
				</div>

			
			</div>
			</div>

			<div class="col-md-4 sponsors">
			<div class="row">
				<div class="col-md-4">
					<img class="img-fluid" src="images/Fanta.png" alt="Fanta">

				</div>

				<div class="col-md-6">
					<blockquote>
						<i class="fas fa-quote-left"><h6>Citat Fanta</h6></i>
						<i class="fas fa-quote-right"></i>
						<hr class="sponsor_bar">
						<cite>&#8212;Lideru de la Fanta</cite>
					</blockquote>
				</div>

			
			</div>
			</div>


			<div class="col-md-4 sponsors">
			<div class="row">
				<div class="col-md-4">
					<img class="img-fluid" src="images/Lavazza.png" alt="Lavazza">

				</div>

				<div class="col-md-6">
					<blockquote>
						<i class="fas fa-quote-left"><h6>Citat lavazza</h6></i>
						<i class="fas fa-quote-right"></i>
						<hr class="sponsor_bar">
						<cite>&#8212;Lideru de la Lavazza</cite>
					</blockquote>
				</div>

			
			</div>
			</div>
	</div> <!--END ROW--> -->


</div> <!--END JUMBOTRON -->
</div><!-- End section id-->
<div id="contact" class="offset">

<footer>

	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<hr class="my-4">
				<div class="card">
					<img class="card-img-top" src="images/ratza.jpg" alt="card image">
						<div class="card-body">
							<h4 class="card-title">Robert Razvan</h4>
							<p class="card-text"><?php echo $lang['Founder'] ?></p>
							<p class="card-text"><?php echo $lang['FDescription'] ?></p>
							<i class='fas fa-grin-stars'></i>
							
						</div>
						<a href="https://www.instagram.com/robertrazvan/?hl=ro" class="btn btn-dark stretched-link">See profile</a>
				</div>
			</div>

			<div class="col-md-4">
				<hr class="my-4">
				<h3 class="text" ><?php echo $lang['Contact'] ?></h3>
				<h5 class="text"><?php echo $lang['Cellphone'] ?>: 0746457167</h5>
				<h5 class="text"><?php echo $lang['Email'] ?>: rahapartycomparty@gmail.com</h5>
				<p></p>
					<a href="https://www.facebook.com/pg/Raha-Party-Events-103243611284487/reviews/?ref=page_internal"><i class="fab fa-facebook fa-3x"></i></a>
					<a href="https://www.youtube.com/channel/UCYqc-yUaRs2ohCtC94eYlUQ"><i class="fab fa-youtube fa-3x"></i></a>
					<a href="https://www.instagram.com/rahapartyevents/"><i class="fab fa-instagram fa-3x"></i></a>
			</div>
			

			<div class="col-md-4">
				<hr class="my-4">
				<h5 class="text"><?php echo $lang['Contact3'] ?></h5>
				<p class="text"><?php echo $lang['Contact2'] ?></p>
				<p class="text">16-22</p>

				<br>
				<br>
				<div id="map">
					
				</div>

			</div>	
		</div>



	</div>
</footer>
<footer>
	<h5>&copy Copyright by Bota Rafael</h5>
</footer>

</div>




 


<script>
		
	
		function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var styledMapType = new google.maps.StyledMapType(
      [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ],
            {name: 'Styled Map'});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var location = {lat: 45.752361, lng: 22.896049};
			
        var map = new google.maps.Map(document.getElementById('map'), 
        {
          center: location,
          zoom: 11,
          mapTypeControlOptions: 
          {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }

   		});
        	var marker = new google.maps.Marker({
				position: location,
				map: map});
        	
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
      }


	</script>
 
<script src="scroll.js"></script>
</body>
</html>