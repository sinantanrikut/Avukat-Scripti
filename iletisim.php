<?php include 'header.php'; ?>


<div class="page-wrapper">
 	
 
    <!-- Main Header-->
    <header class="main-header">
    	
		<!--Header-Upper-->
		<div class="header-upper">
		<div class="container">
		<div class="clearfix">


		

		<div class="outer-box">

		<!--Search Box-->
		<div class="search-box-outer">
		<div class="dropdown">
		<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
		<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
		<li class="panel-outer">
		<div class="form-container">
		<form method="post" action="https://html.themexriver.com/lasight/blog.html">
		<div class="form-group">
		<input type="search" name="field-name" value="" placeholder="Search Here" required>
		<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
		</div>
		</form>
		</div>
		</li>
		</ul>
		</div>
		</div>

		<!--Nav Toggler-->
		<div class="nav-toggler"><div class="nav-btn hidden-bar-opener"><span class="flaticon-menu"></span></div></div>
		</div>

		</div>

		</div>
		</div>
		</div>
		<!--End Header Upper-->

	
		<!--End Sticky Header-->
		
    </header>
    <!--End Main Header -->
	
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
	
  
	<!-- End / Hidden Bar -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg_1.jpg)">
    	<div class="container">
			<div class="content">
				<h1>İletişim</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Anasayfa</a></li>
					<li>İletişim</li>
				</ul>
			</div>

        </div>

    </section>




	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="inner-container">
				<h2>Bize Ulaşabilir<br> ya da <span>Randevu Alabilirsiniz</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text"><b><?php echo $ayarcek['ayar_il']; ?> Hukuk Bürosu mu arıyorsun,</b> alanında uzman avukatlarla her zaman sizlerin yanınızda. Bizlere alttaki iletişim adreslerinden ulaşabilirsiniz.</div>
							<ul class="list-style-six">
								<li><span class="icon fa fa-building"></span> <?php echo $ayarcek['ayar_adres']." ".$ayarcek['ayar_ilce']."/".$ayarcek['ayar_il']; ; ?></li>
								<li><span class="icon fa fa-fax"></span> <?php echo  $ayarcek['ayar_gsm']; ?></li>
								<li><span class="icon fa fa-fax"></span> <?php echo  $ayarcek['ayar_tel']; ?></li>
								<li><span class="icon fa fa-envelope-o"></span><?php echo $ayarcek['ayar_mail']; ?></li>
							</ul>
						</div>
					</div>
					
				
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section" style="background-image:url(images/background/5.jpg)">
		<div class="container">
			<div class="row clearfix">
				
			
				
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->
	













<?php include 'footer.php'; ?>