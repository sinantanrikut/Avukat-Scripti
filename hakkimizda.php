<?php if ($kontrol==1){?>





		
	
	<!-- About Section -->
	<section class="about-section" id="hakkimizda">
		<!-- Image Layer -->
		<div class="image-layer" style="background-image:url(images/gallery/22433307732625324862about-1%20kopya.jpg)"></div>
		<div class="container" >
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">Hakkımızda</div>
							<h3>Akgün Hukuk <span>Bürosu</span></h3>
						</div>
						
						<div class="text" style="width: 65%">
							<?php echo $hakkimizdacek['hakkimizda_icerik']; ?>
						</div>
					
						<div class="question">Bilgi almak için <div class="section-title"><a href="iletisim.php" style="text-decoration:none;"><h3><span>Bize Ulaşın</span></h3></a></div></div>
					
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section>
	<!-- End About Section -->



	<?php }else{
		header("Location:index.php#hakkimizda");
	}

	?>