<?php
	session_start();
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
			if(!empty($_POST["quantity"])) {
				$productByCode = $db_handle->runQuery("SELECT * FROM barang WHERE brg_id ='" . $_GET["brg_id"] . "'");
				$itemArray = array($productByCode[0]["brg_id"]=>array('brg_nama'=>$productByCode[0]["brg_nama"], 'brg_id'=>$productByCode[0]["brg_id"], 'quantity'=>$_POST["quantity"], 'brg_harga'=>$productByCode[0]["brg_harga"]));
				
				if(!empty($_SESSION["cart_item"])) {
					if(in_array($productByCode[0]["brg_id"],array_keys($_SESSION["cart_item"]))) {
						foreach($_SESSION["cart_item"] as $k => $v) {
								if($productByCode[0]["brg_id"] == $k) {
									if(empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
			}
		break;
		case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["brg_id"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}
			}
		break;
		case "empty":
			unset($_SESSION["cart_item"]);
		break;	
	}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Rona Clothing</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
				<li><a href="https://www.facebook.com/HMTCFTIf/" target="_blank" rel="nofollow"> <i class="fb"> </i> </a></li>
				<li><a href="https://twitter.com/hmtc_its" target="_blank" rel="nofollow"><i class="tw"> </i> </a></li>
				<li><a href="https://www.youtube.com/user/bluepresshmtc" target="_blank" rel="nofollow"><i class="utube"> </i> </a></li>
				<li><a href=""><i class="pin"> </i> </a></li>
				<li><a href="https://www.instagram.com/hmtc_its" target="_blank" rel="nofollow"><i class="instagram"> </i> </a></li>
			 </ul>
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
	   <div class="container">
		<div class="check_box">	 
		<div class="row">

		<div class="col-md-9 col-lg-9 cart-items">
			 <h1>My Shopping Bag  <a id="btnEmpty" href="checkout.php?action=empty">Empty Cart</a></h1>
			 <?php
				if(isset($_SESSION["cart_item"])){
				    $item_total = 0;
			?>

			   
		<?php 
			foreach ($_SESSION["cart_item"] as $item){
		?>
			 <div class="cart-header">
				 <div class="close1"><a href="checkout.php?action=remove&brg_id=<?php echo $item["brg_id"]; ?>" class="btnRemoveAction">Remove</a> 
				 </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item poto">
							 <img src="images/<?php echo $item["brg_id"];?>.jpg">
						</div>
					   <div class="cart-item-info">
						<h3><strong><?php echo $item["brg_nama"]; ?></strong><span><?php echo $item["brg_id"]; ?></span></h3>
						<ul class="qty">
							<li>Qty: <?php echo $item["quantity"]; ?></li>
						</ul>
						<div class="delivery">
							 <p><?php echo "Rp ".$item["brg_harga"]; ?></p>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>			
				  </div>
				  <?php
					        $item_total += ($item["brg_harga"]*$item["quantity"]);
							}
							?>
				  <p><strong>Total:</strong> <?php echo "Rp ".$item_total; ?></p>
			 </div>
		<?php
			}
		?>

		</div>		

		 <div class="col-md-3 col-lg-3 cart-total">
			 <a class="continue" href="#">Sudah pernah belanja?<br>Klik Di sini </a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">0000.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">000.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>0000.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			<div class="total-item">
				 <h3>Choose a Payment</h3>
				 <form action="submit">
					<select name="bayar">
						<option value="bri">BRI</option>
						<option value="bni">BNI</option>
						<option value="mandiri">Mandiri</option>
						<option value="bca">BCA</option>
					</select>
				</form>
			 </div>
			 
			 <div class="clearfix"></div>
		   <a class="news-letter" href="#">
				 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Fix</label>
			</a>
			<a class="order" href="register.php">Lanjutkan</a>

		   </div>
		   <div class="clearfix"></div>
	 	  </div>
	 	  </div>
	     </div>
	    </div>


		<div class="container">
			<div class="brands">
				<ul class="brand_icons">
					<li><img src='images/icon1.png' class="img-responsive" alt=""/></li>
					<li><img src='images/icon2.png' class="img-responsive" alt=""/></li>
					<li><img src='images/icon3.png' class="img-responsive" alt=""/></li>
					<li><img src='images/icon4.png' class="img-responsive" alt=""/></li>
					<li class="last"><img src='images/icon5.png' class="img-responsive" alt=""/></li>
				</ul>
			</div>
	    </div>
	    <div class="container">
	      <div class="instagram_top">
	      	<div class="instagram text-center">
				<h3><a href="index.php">More Collections</a></h3>
			</div>
	        <ul class="instagram_grid">
			  <li><a class="popup-with-zoom-anim" href=""><img src="images/sandal.jpg" class="img-responsive" alt=""/></a></li>
			 <li><a class="popup-with-zoom-anim" href=""><img src="images/tape.jpg" class="img-responsive" alt=""/></a></li>
			 <li><a class="popup-with-zoom-anim" href=""><img src="images/pumps.jpg" class="img-responsive" alt=""/></a></li>
			 <li><a class="popup-with-zoom-anim" href=""><img src="images/loaf.jpg" class="img-responsive" alt=""/></a></li>
			 <li><a class="popup-with-zoom-anim" href=""><img src="images/sneak.jpg" class="img-responsive" alt=""/></a></li>
			 <li class="last_instagram"><a class="popup-with-zoom-anim" href=""><img src="images/wedges.jpg" class="img-responsive" alt=""/></a></li>
			  <div class="clearfix"></div>
			  <div id="small-dialog1" class="mfp-hide">
				<div class="pop_up">
					<h4>A Sample Photo Stream</h4>
					<img src="images/i_zoom.jpg" class="img-responsive" alt=""/>
				</div>
			  </div>
			</ul>
		  </div>
	      <ul class="footer_social">			
			<li><a href="https://twitter.com/hmtc_its" target="_blank" rel="nofollow" title="RN TW"> <i class="tw"> </i> </a></li>
			<li><a href="https://www.facebook.com/HMTCFTIf/" target="_blank" rel="nofollow" title="RN FB"> <i class="fb"> </i> </a></li>			
			<li><a href="#"><i class="pin"> </i> </a></li>
			<div class="clearfix"></div>
		   </ul>
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
				  <input type="submit" value="Subscribe">
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