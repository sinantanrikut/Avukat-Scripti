
	
	<!--Main Footer-->
    <footer class="main-footer">
    	<div class="container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.php"><img width="250px" src="<?php echo $ayarcek['ayar_logo']; ?>" alt="" /></a>
									</div>
									<div class="text"><?php  $hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC); 

echo $hakkimizdacek['hakkimizda_misyon']; ?></div>
									<ul class="list-style-three">
										<li><span class="icon fa fa-phone"></span> <?php echo $ayarcek['ayar_tel']; ?></li>
										<li><span class="icon fa fa-envelope"></span> <?php echo $ayarcek['ayar_mail']; ?></li>
										<li><span class="icon fa fa-home"></span><?php echo $ayarcek['ayar_adres']; ?></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Linkler</h4>
									<ul class="list-link">

<?php 

$menusor=$db->prepare("select * from menu order by menu_sira ASC ");
									$menusor->execute(array(0
										));

while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { ?>
										<li><a href="<?php echo $menucek['menu_url']; ?>"><?php echo $menucek['menu_ad']; ?></a></li>
								
<?php } ?>


									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Destek</h4>
									<ul class="list-link">
										<li><a href="iletisim.php">İletişim</a></li>
										<li><a href="iletisim.php">Hata Bildir</a></li>
										<li><a href="iletisim.php">Adresimiz</a></li>
									
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
									<h4>Galeri</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
												<?php $galerisor=$db->prepare("select * from galeri order by galeri_id limit 6");
                $galerisor->execute();

                while($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {  ?>
											<!--Image Box-->
											<figure class="image-box"><a href="<?php echo $galericek['galeri_resimyol']; ?>" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="<?php echo $galericek['galeri_resimyol']; ?>" alt=""></a></figure>
											<!--Image Box-->
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row clearfix">
					
					<!-- Copyright Column -->
					<div class="copyright-column col-lg-6 col-md-6 col-sm-12">
						<div class="copyright">2021 &copy; Tüm hakları saklıdır <a href="https://instagram.com/commendqcom">CQ</a></div>
					</div>
					
					<!-- Social Column -->
					<div class="social-column col-lg-6 col-md-6 col-sm-12">
						<ul>
							<li class="follow">Bizi Takip Et: </li>
							<li><a href="<?php echo $ayarcek['ayar_facebook']; ?>"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="<?php echo $ayarcek['ayar_twitter']; ?>"><span class="fa fa-twitter-square"></span></a></li>
						
							<li><a href="<?php echo $ayarcek['ayar_youtube']; ?>"><span class="fa fa-youtube-square"></span></a></li>
						
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from html.themexriver.com/lasight/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Feb 2021 12:18:29 GMT -->
</html>