<?php 

if (isset($_GET['id'])) {
$iid=$_GET['id'];

}else{
	header('Location:index.php');
}

$iid=$_GET['id'];


 ?>

<?php include 'header.php'; 


 $iceriksor=$db->prepare("select * from icerik where icerik_id=:id ");
                $iceriksor->execute(array(

    'id' => $iid
  ) );

               $icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
    ?>


<?php 

if (!empty($icerikcek['icerik_id'])) {



 }else{
header('Location:404.php');

 }




 ?>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
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
				<h1>Blog Detay</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Anasayfa</a></li>
					<li>Blog Detayı</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single">
						<div class="inner-box">
							<div class="image">
								<img src="<?php echo $icerikcek['icerik_resimyol'];  ?>" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
										<?php $tarih= substr($icerikcek['icerik_zaman'], 0,10) ?>
									<li><span class="fa fa-calendar"></span><?php echo $tarih; ?></li>
									<li><span class="fa fa-user"></span>Av. <?php echo $ayarcek['ayar_author']; ?></li>
							
							
								</ul>
								<h4><?php echo $icerikcek['icerik_ad']; ?></h4>
								<div class="text">
									<p><?php echo $icerikcek['icerik_detay']; ?></p>
								
								</div>
								
							</div>
						</div>
						
						<!--post-share-options-->
						<div class="post-share-options">
							<div class="post-share-inner clearfix">
								<div class="pull-left post-tags"><span>Etiketler: </span>

									<?php 

									 $etiketler =$icerikcek['icerik_keyword']; ;

     $etiketler = explode(',', $etiketler);
     foreach( $etiketler as $anahtar => $deger ){?>

   	<a href="#"><?php echo $deger; ?></a>

   <?php   }

  ?>
									


								</div>
								<ul class="pull-right social-links clearfix">
									<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
									<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									<li class="google-plus"><a href="#" class="fa fa-google-plus"></a></li>
									<li class="dribble"><a href="#" class="fa fa-dribbble"></a></li>
								</ul>
							</div>
						</div>
						
						<!-- New Posts -->
						<div class="new-posts">
							<div class="clearfix">
								<?php $once=$icerikcek['icerik_id']-1;
								$sonra=$icerikcek['icerik_id']+1;


								 ?>
								<a class="prev-post pull-left" href="blog-detay.php?id=<?php echo $sonra; ?>"><span class="fa fa-angle-double-left"></span> Sonraki İçerik</a>
								<a class="next-post pull-right" href="blog-detay.php?id=<?php echo $once; ?>">Önceki İçerik<span class="fa fa-angle-double-right"></span></a>
							</div>
						</div>
						
					
						<!--End Comment Form -->
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						
						
						
					
						
						<!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title-two">
                                <h4>Son Yazılar</h4>
                            </div>


                            	<?php

                $sayfada = 5; // sayfada gösterilecek içerik miktarını belirtiyoruz.


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

                $icerikksor=$db->prepare("select * from icerik order by icerik_id DESC limit $limit,$sayfada");
                $icerikksor->execute();

                while($icerikkcek=$icerikksor->fetch(PDO::FETCH_ASSOC)) { ?>

							
							<article class="post">
								<figure class="post-thumb"><img style="width: 100%; height: 100%;" width="100%" height="100%" src="<?php echo $icerikkcek['icerik_resimyol']; ?>" alt=""><a href="blog-detay.php?id=<?php echo $icerikkcek['icerik_id']; ?>" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-detay.php?id=<?php echo $icerikkcek['icerik_id']; ?>"><?php echo $icerikkcek['icerik_ad']; ?></a></div>
								<?php $tarih= substr($icerikkcek['icerik_zaman'], 0,10) ?>
								<div class="post-info"><?php echo $tarih; ?></div>
							</article>
							
							<?php } ?>


							
						</div>
						
						<!--Archive Widget-->
                        <div class="sidebar-widget sidebar-blog-category archive-widget">
                            <div class="sidebar-title-two">
                                <h4>Hakkımızda</h4>
                            </div>
                            <p><?php


 $hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC); echo $hakkimizdacek['hakkimizda_misyon']; ?></p>
                        </div>
						
						
						
						<!-- Tags Widget-->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title-two">
                                <h4>Etiketler</h4>
                            </div>
							<?php 

									 $etiketler =$icerikcek['icerik_keyword']; ;

     $etiketler = explode(',', $etiketler);
     foreach( $etiketler as $anahtar => $deger ){?>

   	<a href="#"><?php echo $deger; ?></a>

   <?php   }

  ?>
						</div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	


<?php include 'footer.php'; ?>