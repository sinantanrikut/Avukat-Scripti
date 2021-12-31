

<?php include 'header.php'; ?>

    <div class="preloader"></div>
<?php include 'slider.php'; ?>
	
<?php include 'future.php'; ?>
	


<?php $kontrol=1; ?>
<?php include 'hakkimizda.php'; ?>
	
<?php $alansor=$db->prepare("select * from alan order by alan_id");
									$alansor->execute(array(
										'alan_ust' => 0
										));
 ?>
 	<!-- Services Section Two -->
	<section class="services-section-two" style="background-image: url(images/background/1.jpg);" id="calismaalan">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title light centered">
				<div class="title">Çalışma Alanları</div>
				<h3>Çalışma <span>Alanlarımız</span></h3>
			</div>
			<div class="row clearfix">
				<?php while($alancek=$alansor->fetch(PDO::FETCH_ASSOC)) { ?>

				<!-- Services Block Two -->
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-<?php echo $alancek['alan_icon']; ?>"></span>
						</div>
						<h3><?php echo $alancek['alan_ad']; ?></h3>
						<div class="text"><?php echo $alancek['alan_kisa']; ?></div>
						<div class="overlay-box" style="background-image: url(images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon flaticon-<?php echo $alancek['alan_icon']; ?>"></span>
									<h4><a href="services-detail.html"><?php echo $alancek['alan_ad']; ?></a></h4>
									<a href="calisma-alanlari.php?id=<?php echo $alancek['alan_id']; ?>" class="theme-btn btn-style-one">Detaylı İncele</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- Services Block Two -->
		
						<!-- Services Block Two -->
				
			</div>
		
			
		
		</div>
	</section>
	<!-- End Services Section Two -->


		
	
	
	<!-- Team Section -->
	<section class="team-section" id="takim">
		<div class="container">
		
			<!-- Sec Title -->
			<div class="section-title light">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Takımımız</div>
						<h3>Sizler için <br>  <span>Buradayız</span></h3>
					</div>
					<div class="pull-right">
						<div class="text">
							<b>Bursa Hukuk Bürosu</b> olan Akgün Hukuk Bürosu alanında uzman avukatlarla sizlere hizmet vermektedir.

						</div>
					</div>
				</div>
			</div>
			
			<div class="clearfix">
				




				<?php $referanssor=$db->prepare("select * from referans order by referans_id");
									$referanssor->execute(array(0
										)); 
										while($referanscek=$referanssor->fetch(PDO::FETCH_ASSOC)) { ?>
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="<?php echo $referanscek['referans_resimyol']; ?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#"><?php echo $referanscek['referans_ad']; ?></a></h3>
							<div class="designation"><?php echo $referanscek['referans_unvan']; ?></div>
							<div class="overlay-box">
								<div class="overlay-content">
									<div class="title">İletişime Geç</div>
									<ul class="social-icons">
										<li><a href="<?php echo $referanscek['referans_link']; ?>"><span class="fa fa-instagram"></span></a></li>
								
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			<?php } ?>
				
			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- News Section -->
	<section class="news-section" id="blog">
		<div class="container">
		
			<!-- Sec Title -->
			<div class="section-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Yazılarımız</div>
						<h3>Sizler için hazırladığımız <br><span>Blog yazıları</span>  </h3>
					</div>
					
				</div>
			</div>
			
			<div class="row clearfix">
					<?php

                $sayfada = 3; // sayfada gösterilecek içerik miktarını belirtiyoruz.


                $sorgu=$db->prepare("select * from icerik");
                $sorgu->execute();
                $toplam_icerik=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_icerik / $sayfada);

                  // eğer sayfa girilmemişse 1 varsayalım.
                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

			    // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

				// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;

                $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
                $iceriksor->execute();

                while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>


				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="<?php echo $icerikcek['icerik_resimyol']; ?>" alt="" />
							<div class="overlay-box">
								<a href="blog-detay.php?id=<?php echo $icerikcek['icerik_id']; ?>" class="plus flaticon-plus"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<?php $tarih= substr($icerikcek['icerik_zaman'], 0,10) ?>
								<li><span class="fa fa-calendar"></span><?php echo $tarih; ?></li>
								<li><span class="fa fa-user"></span>Av. Ece AKGÜN</li>
							</ul>
							<h5><a href="blog-detay.php?id=<?php echo $icerikcek['icerik_id']; ?>"><?php echo $icerikcek['icerik_ad']; ?></a></h5>
							<a href="blog-detay.php?id=<?php echo $icerikcek['icerik_id']; ?>" class="theme-btn btn-style-two">Görüntüle</a>
						</div>
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	<?php include 'footer.php'; ?>