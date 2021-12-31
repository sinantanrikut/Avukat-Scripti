<?php include 'header.php';
$iid=$_GET['id'];
 $alansor=$db->prepare("select * from alan where alan_id=:id ");
                $alansor->execute(array(

    'id' => $iid
  ) );

               $alancek=$alansor->fetch(PDO::FETCH_ASSOC);
    ?>


<?php 

if (!empty($alancek['alan_id'])) {



 }else{
header('Location:404.php');

 }


 ?>
 
     <div class="preloader"></div>
	<!--Form Back Drop-->
    <div class="form-back-drop"></div>
		<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg_1.jpg)">
    	<div class="container">
			<div class="content">
				<h1>Çalışma Alanları</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Anasayfa</a></li>
					<li>Çalışma Alanları</li>
				</ul>
			</div>

        </div>

    </section>

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="container">
        	<div class="row clearfix">
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar padding-right">
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">

                            	<?php 

                            $alannsor=$db->prepare("select * from alan order by alan_id ASC");
                $alannsor->execute();

                while($alanncek=$alannsor->fetch(PDO::FETCH_ASSOC)) {
                	
                	?>



                                <li <?php if ($alanncek['alan_id']==$_GET['id']) {?>
                                	
                            class="active"   <?php } else{


                            } 

                            ?>><a href="calisma-alanlari.php?id=<?php echo $alanncek['alan_id']; ?>"><?php echo $alanncek['alan_ad']; ?></a></li>

                            <?php } ?>
                              
                            </ul>
                        </div>
						
						<!-- Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                        	<div class="sidebar-title">
                                <h4>İletişim</h4>
                            </div>
							<ul>
								<li><span class="icon flaticon-map-1"></span> <?php echo $ayarcek['ayar_adres']." ".$ayarcek['ayar_ilce']."/".$ayarcek['ayar_il']; ; ?></li>
								<li><span class="icon flaticon-call-answer"></span> <?php echo $ayarcek['ayar_gsm']; ?><br><?php echo $ayarcek['ayar_tel']; ?></li>
								<li ><span class="icon flaticon-comment"></span> <?php echo $ayarcek['ayar_mail']; ?></li>
							</ul>
						</div>
						
						<!-- Brochures Widget-->
                
						
					</aside>
				</div>
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="services-single">
						<h4><?php echo $alancek['alan_ad']; ?></h4>
						<div class="text">
							<?php echo $alancek['alan_detay']; ?>
						</div>
					

						<br><br><hr>
						
						
						<div class="row clearfix">
							<?php 
							 $alansor=$db->prepare("select * from alan order by alan_id limit 2");
									$alansor->execute(array(
										'alan_ust' => 0
										));
					while($alancek=$alansor->fetch(PDO::FETCH_ASSOC)) { ?>
							<!-- Services Block Two -->
							<div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
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
												<h4><a href="#"><?php echo $alancek['alan_ad']; ?></a></h4>
												<a href="calisma-alanlari.php?id=<?php echo $alancek['alan_id']; ?>" class="theme-btn btn-style-one">Detaylı İncele</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
			
						</div>
						
					
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
	
	<!-- End Subscribe Section -->
	<?php include 'footer.php'; ?>
	