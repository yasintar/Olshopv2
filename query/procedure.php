<?php
	session_start();

	if(isset($_SESSION['user']) != 1){
		echo "<script>
			alert('you need to login as admin first');
			window.location.assign('../login.php');
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
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/utama.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//webfont-->
<script src="../js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="../js/dataTables.semanticui.js" type="text/javascript"></script>
<script src="../js/dataTables.semanticui.min.js" type="text/javascript"></script>
<script src="../js/jquery.dataTables.js" type="text/javascript"></script>
<script src="../js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<link href="../css/dataTables.semanticui.css" rel='stylesheet' type='text/css' />
<link href="../css/dataTables.semanticui.min.css" rel='stylesheet' type='text/css' />
<link href="../css/dataTables.bootstrap.css" rel='stylesheet' type='text/css' />
<link href="../css/jquery.dataTables.min.css" rel='stylesheet' type='text/css' />
<script>
		$(document).ready( function () {
   			 $('#table_id').DataTable();
		} );
</script>
<script>
	$('#table_id').DataTable( {
    	paging: true
	} );
</script>
<script>
	$( selector ).DataTable();
	$( selector ).dataTable().api();
	new $.fn.dataTable.Api( selector );
</script>
<script>
	var table = $('#table_id').DataTable();
 
table.columns().flatten().each( function ( colIdx ) {
    // Create the select list and search operation
    var select = $('<select />')
        .appendTo(
            table.column(colIdx).footer()
        )
        .on( 'change', function () {
            table
                .column( colIdx )
                .search( $(this).val() )
                .draw();
        } );
 
    // Get the search data for the first column and add to the select list
    table
        .column( colIdx )
        .cache( 'search' )
        .sort()
        .unique()
        .each( function ( d ) {
            select.append( $('<option value="'+d+'">'+d+'</option>') );
        } );
} );
</script>
<link href="../css/magnific-popup.css" rel="stylesheet" type="text/css">
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
				<a href="../indexadmin.php"><h6>Online Shop</h6><h2> RO..NA </h2></a>
			 </div>
		   <div class="header_right">
			 <ul class="social">
			 	<li align="center"><form action="../logout.php" method="post"><button type="submit" name="logout" class="btn banner_btn">Log Out (admin)</button></form></li><br><br>
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
				<li align="center"><a href="../checkout.php">Wish List</a></li>
				<div class='clearfix'></div>
		    </ul>
		    <ul class="quick_access">
				<li class="view_cart"><a href="../checkout.php">View Cart</a></li>
				<li class="check"><a href="../checkout.php">Checkout</a></li>
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
					   	  	<li class="nav-item active"><a href="view.php">View</a></li>
					   	  	<li><a href="function.php">Function</a></li>
					   	  	<li><a href="trigger.php">Trigger</a></li>
					   	  	<li><a href="procedure.php">Procedure</a></li>
					   	  	<li><a href="join.php">Join</a></li>
					   	  	<li><a href="cursor.php">Cursor</a></li>
					   	 </ul>
			   	    </div>
			   	    <br>
			   	    <div class="menu_box">
				   	  	<h3 class="menu_head">Table</h3>
				   	     <ul class="nav">
					   	  	<li><a href="../table/barang.php">Barang</a></li>
					   	  	<li><a href="../table/byr_ktg.php">Bayar</a></li>
					   	  	<li><a href="../table/detail.php">Detail Order</a></li>
					   	  	<li><a href="../table/byr_ktg.php">Kategori</a></li>
					   	  	<li><a href="../table/order.php">Order Barang</a></li>
					   	  	<li><a href="../table/pembeli.php">Pembeli</a></li>
					   	 </ul>
			   	    </div>
			   	 </div>
			  <div class="col-md-9">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="../indexadmin.php" title="Go to Home Page">Admin</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        &nbsp;Query
                        <span>&gt;</span>&nbsp;
                    </li>
                    <li class="women">
                       Procedure
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="indexadmin.php">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   	<div class="col-md-6 login-right">
				<h3>PROCEDURE (Pajak 10% untuk semua barang dalam 1 transaksi)</h3>
				<h5>Klik untuk meng-apply pajak</h5>
				<form method="post" action="procedure.php">
					<input type="submit" name="callpjk" value="CALL">
				</form>
				 <?php
				 	if(isset($_POST["callpjk"])){

						include ("../config.php");
					 
						$sql = "CALL pajak_trx()";
					 
						mysqli_query($conn, $sql) or die("Error, query failed!");
						#echo "berhasil";
						echo "<script>
				             alert('Pajak berhasil diberikan'); 
				    		</script>";

					}
				 ?>
				</div>
				
				 <div class="col-md-6 login-right">
			  	 <h3>PROCEDURE (Diskon 5% periode belanja 10-16 Mei 2018 khusus pelanggan)</h3>
			  	 <h5>Klik untuk meng-apply pajak</h5>
			  	 <form method="post" action="procedure.php">
					<input type="submit" name="calldiskmei" value="CALL">
				 </form>
				 <?php
				 	if(isset($_POST["calldiskmei"])){

						include ("../config.php");
					 
						$sqle = "CALL diskon()";
					 
						mysqli_query($conn, $sqle) or die(mysqli_error($conn));
						#echo "berhasil";
						echo "<script>
				             alert('Diskon berhasil diberikan'); 
				    		</script>";

					}
				 ?>
			    </div>
<br><br><br>
			   <h3 align="center"></h3>
				<div class="dwdcuy">
				<table align="center" id="tabelid">
					<thead>
					<tr>
						<th>Order ID</th>
						<th>ID Bayar</th>
						<th>ID Pembeli</th>
						<th>Qty</th>
						<th>Harga Total</th>
						<th>Tanggal Transaksi</th>
						<th>Harga + PPN</th>
					</tr>
					</thead>
					
				</table>
				</div>
			   </div>
			   

			   	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		  </div>
	     </div>
	    </div>
	    </div>

    <div class="footer_bottom">
		<div class="container">
			<div class="copy">
			   <p>Copyright &copy; 2018 RONA Clothing. All Rights Reserved</p>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script>
$(document).ready( function () {
    $('#tabelid').DataTable({
    	"bProcessing": true,
    	"sPaginationType": "full_numbers",
    	"sAjaxSource": "proc.php",
    	"aoColumns": [
	        { mData: 'od_id' },
	        { mData: 'byr_id' },
	        { mData: 'pbl_id' },
	        { mData: 'od_jumlah' },
	        { mData: 'od_total' },
	        { mData: 'od_tglbeli' },
	        { mData: 'od_total_pjk' }
	    ]
    });
} );
</script>
</body>
</html>