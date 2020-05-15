<?php include 'koneksi/koneksi.php' ?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/logo2.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<link rel="stylesheet" href="csslogin/style.default.css" id="theme-stylesheet">
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
		<!-- Site Title -->
		<title>Product | Alat Kopi</title>

		<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
			<!--
			CSS
			============================================= -->
			<!-- foote -->
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<!-- <link rel="stylesheet" href="css/nice-select.css">				 -->	
			<!-- <link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css"> -->
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo1.jpeg" alt="" title="ccc" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="product.php">Product</a></li>
				           <li><a href="about.php">About</a></li>
				          <li><a href="contact.php">Contact</a></li>
				          <li><a href="login.php">Login</a></li>
				            <ul>
				             <!--  <li><a href="generic.html">Generic</a></li>
				              <li><a href="elements.html">Elements</a></li> -->
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area2" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content2-start">
						<div class="banner-content2 col-lg-7">
							<br>
							<br>
							<!-- <h6 class="text-white text-uppercase">Alat Kopi</h6> -->
							<h1>
								SHOP
							</h1
							>
						</div>											
					</div>
				</div>
			</section>
			<br><br>
			<!-- End banner Area -->	

			<?php 
$keyword = $_GET["keyword"];


$semuadata=array();
$ambil = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'
	OR deskripsi_produk LIKE '%$keyword%'");
while($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

// echo "<pre>";
// print_r($semuadata);
// echo "</pre>"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
</head>
<body>  
<!-- <?php include 'menu.php'; ?> -->
	<div class="container">
		<h3>Hasil Pencarian : <?php echo $keyword ?></h3>

		<div class="row">
 
			<?php foreach ($semuadata as $key => $value): ?>
	
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $value["foto_produk"] ?>" alt=
					"" class="img-responsive">
					<div class="caption">
						<h3><?php echo $value["nama_produk"] ?></h3>
						<h5>Rp. <?php echo $value['harga_produk'] ?></h5>
						<a href="beli.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-primary">Beli</a>
					</div>
				</div>
			</div>
				
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>
			


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



