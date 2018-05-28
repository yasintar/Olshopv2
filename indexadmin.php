<?php
	session_start();

	if(isset($_SESSION['user']) != 1){
		echo "<script>
			alert('you need to login as admin first');
			window.location.assign('login.php');
			</script>";
	}
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rona Clothing</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Rona Clothing" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/utama.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//webfont-->
<script src="js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
<!----details-product-slider--->
</head>
<body>
   <div class="header">
	<div class="container">
		<div class="header-top">
      		<div class="logo">
				<a href="index.php"><h6>Online Shop</h6><h2> RO..NA </h2></a>
			 </div>
		   <div class="header_right">
			 <ul class="social">
			 	<li align="center"><form action="logout.php" method="post"><button type="submit" name="logout" class="btn banner_btn">Log Out (admin)</button></form></li><br><br>
				<li><a href="https://www.facebook.com/HMTCFTIf/" target="_blank" rel="nofollow"> <i class="fb"> </i> </a></li>
				<li><a href="https://twitter.com/hmtc_its" target="_blank" rel="nofollow"><i class="tw"> </i> </a></li>
				<li><a href="https://www.youtube.com/user/bluepresshmtc" target="_blank" rel="nofollow"><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href="https://www.instagram.com/hmtc_its" target="_blank" rel="nofollow"><i class="instagram"> </i> </a></li>
			 </ul>
			<div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
		 </div>  
		 <div class="about_box">
			<ul class="login">
				<li align="center"><a href="checkout.php">Wish List</a></li>
				<div class='clearfix'></div>
		    </ul>
		    <ul class="quick_access">
				<li class="view_cart"><a href="checkout.php">View Cart</a></li>
				<li class="check"><a href="checkout.php">Checkout</a></li>
				<div class='clearfix'></div>
		     </ul>
			<div class="search">
			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			   <input type="submit" value="">
			</div>
		  </div>
		</div>
    </div>
    <div class="main">
	  <div class="content_box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="menu_box">
				   	  	<h3 class="menu_head">Query</h3>
				   	     <ul class="nav">
					   	  	<li><a href="query/view.php">View</a></li>
					   	  	<li><a href="query/function.php">Function</a></li>
					   	  	<li><a href="query/trigger.php">Trigger</a></li>
					   	  	<li><a href="query/procedure.php">Procedure</a></li>
					   	  	<li><a href="query/join.php">Join</a></li>
					   	  	<li><a href="query/cursor.php">Cursor</a></li>
					   	 </ul>
			   	    </div>
			   	    <br>
			   	    <div class="menu_box">
				   	  	<h3 class="menu_head">Table</h3>
				   	     <ul class="nav">
					   	  	<li><a href="table/barang.php">Barang</a></li>
					   	  	<li><a href="table/byr_ktg.php">Bayar</a></li>
					   	  	<li><a href="table/detail.php">Detail Order</a></li>
					   	  	<li><a href="table/byr_ktg.php">Kategori</a></li>
					   	  	<li><a href="table/order.php">Order Barang</a></li>
					   	  	<li><a href="table/pembeli.php">Pembeli</a></li>
					   	 </ul>
			   	    </div>

			   	 </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        &nbsp;Login
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="women">
                       Admin Only
                    </li>
                </ul>
                <!-- <ul class="previous">
                	<li><a href="index.php">Back to Previous Page</a></li>
                </ul> -->
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   	<div class="row">
			   		<h3 align="center">OLAHAN DATA PENJUALAN</h3>
			   		<br>
			   		<div class="panel-group">
			   			<div class="row">
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/view.php">Barang belum terjual</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/view.php">Barang terjual</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/function.php">Total harga pembeli tertentu</a></div>
							    </div>
			   				</div>
			   			</div>
					    <br>
					    <div class="row">
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/function.php">Jumlah barang terjual tertentu</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/trigger.php">Hapus record Order (Detail Order <em>following</em>)</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/trigger2.php">
							      Log update data pembeli</a></div>
							    </div>
			   				</div>
			   			</div>
					    <br>
					    <div class="row">
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/procedure.php">Pajak 10% pada setiap transaksi</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/procedure.php">Diskon 5% untuk pelanggan pada promo ramadhan</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/join.php">Barang terjual (pelanggan)</a></div>
							    </div>
			   				</div>
			   			</div>
					    <br>
					    <div class="row">
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/join.php">Top 5 barang terjual (pelanggan)</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/cursor.php">Diskon 10% untuk pelanggan dengan total belanja > 1 juta</a></div>
							    </div>
			   				</div>
			   				<div class="col-md-4">
			   					<div class="panel panel-default">
							      <div class="panel-body oldata"><a href="query/cursor.php">Pajak 7500 untuk pembeli yang membayar selain melalui BRI</a></div>
							    </div>
			   				</div>
			   			</div>
					    <br>
					</div>
			   	</div>

			   	<div class="row">
			  		<div class="clearfix"> </div>
			   	</div>
			 </div>
		   </div>
		  </div>
	     </div>
	    </div>
	    </div>

        <div class="footer">
		<div class="container">
			<div class="footer-grid">
				<h3>Category</h3>
				<ul class="list1">
				  <li><a href="index.php">Home</a></li>
				  <li><a href="about.php">About us</a></li>
				  <li><a href="about.php">Eshop</a></li>
				  <li><a href="about.php">Features</a></li>
				  <li><a href="about.php">New Collections</a></li>
				  <li><a href="typo.php">Typo</a></li>
				  <li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="footer-grid">
				<h3>Our Account</h3>
				<ul class="list1">
				  <li><a href="login.php">Your Account</a></li>
				  <li><a href="contact.php">Personal information</a></li>
				  <li><a href="contact.php">Addresses</a></li>
				  <li><a href="#">Discount</a></li>
				  <li><a href="checkout.php">Orders history</a></li>
				  <li><a href="about.php">Search Terms</a></li>
				</ul>
			</div>
			<div class="footer-grid">
				<h3>Our Support</h3>
				<ul class="list1">
				  <li><a href="contact.php">Site Map</a></li>
				  <li><a href="about.php">Search Terms</a></li>
				  <li><a href="about.php">Advanced Search</a></li>
				  <li><a href="about.php">Mobile</a></li>
				  <li><a href="contact.php">Contact Us</a></li>
				  <li><a href="contact.php">Mobile</a></li>
				  <li><a href="contact.php">Addresses</a></li>
				</ul>
			</div>
			<div class="footer-grid">
				<h3>Newest Collection</h3>
				<p class="footer_desc">I will notify you if there is something new here.</p>
				<div class="search_footer">
				  <input type="text" class="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
				  <input type="submit" value="Submit">
				</div>
				<img src="images/pay.png" class="img-responsive" alt=""/>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="copy">
			   <p>Copyright &copy; 2018 RONA Clothing. All Rights Reserved</p>
			</div>
		</div>
	</div>
</body>
</html>	
