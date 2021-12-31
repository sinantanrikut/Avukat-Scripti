<?php include 'admin/netting/baglan.php'; 

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$menusor=$db->prepare("select * from menu order by menu_sira ASC ");
									$menusor->execute(array(0));

 $hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC); ?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
<meta name="author" content="<?php echo $ayarcek['ayar_author'];  ?>">
<title><?php echo $ayarcek['ayar_title']; ?></title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/animation.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<script defer data-key="5c75e526-63c0-4caf-b106-4cb74b604822" src="https://widget.tochat.be/bundle.js"></script>

<link rel="stylesheet" type="text/css" href="css/style-st.css">
</head>

<body>
    

	    <!-- başlanav -->
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Av. Ece AKGÜN</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menü
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Ana Sayfa</a></li>

<?php while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { 
										$menu_id=$menucek['menu_id'] ;?>
										
	          <li class="nav-item"><a href="<?php echo $menucek['menu_url']; ?>" class="nav-link"><?php echo $menucek['menu_ad']; ?></a></li><?php  
	 }?>
	        </ul>
	      </div>
	    </div>
	  </nav>
	<!-- bitir nav -->

	<!--End Sticky Header-->
</header>