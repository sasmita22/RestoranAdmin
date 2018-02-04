<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Bantuan</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styleku.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
		body {
			height: 100vh;

		}
		footer{
			max-height: 10%;
		}
	</style>
</head>
<body>

	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="white">
		    <div class="nav-wrapper" style="margin-left: 11px;">
		        <span>
		        	<a href="#" id="toggler" data-activates="slide-out" materialize="sideNav" class="button-collapse show-on-large" style="color: black"><i class="material-icons">menu</i>
             		</a>
             	</span>

             	<span style="color: #009688; font-weight: 500; font-size: 20px;">Warung Broto</span>
		      	
		      	<ul class="right hide-on-med-and-down" style="margin-rigt: 11px;">
			      	<!-- Dropdown Trigger -->
			      	<li><a href="#!" class="dropdown-button" data-activates="dropdown1" data-beloworigin="true"><i class="material-icons" style="color: black;">more_vert</i></a></li>

					<!-- Dropdown Content -->
					 <ul id="dropdown1" class="dropdown-content right">
					 	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/" style="color: black;">Bantuan</a></li>
					 	<li class="divider"></li>
					  	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Login/" style="color: black;">Keluar</a></li>
					 </ul>
			   	</ul>

		    </div>
		 </nav>
	</div>

	<!-- Sidebar Content -->
  	<ul id="slide-out" class="side-nav fixed">
    	<li><a class="subheader">Pantry</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Makanan/"><i class="material-icons">restaurant</i>Daftar Makanan</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Bahan/"><i class="material-icons">receipt</i>Daftar Bahan</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="subheader">Akun</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Meja/"><i class="material-icons">add_circle_outline</i>Meja</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="subheader">Layanan Pengguna</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Riwayat/"><i class="material-icons">history</i>History Transaksi</a></li>
    	<li><div class="divider"></div></li>

    	<li class="active"><a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/"><i class="material-icons">help</i>Bantuan</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Login/"><i class="material-icons">exit_to_app</i>Keluar</a></li>
    	<li><div class="divider"></div></li>
  	</ul>

	<!-- Main content -->
	<div class="ownwrapper" >
	<div class="content">
		<div class="container">
	    <div class="divider"></div>
	    <span style="color: #009688;"><h5 class="center"><i class="material-icons">help</i> Bantuan</h5></span>
	    <div class="divider"></div>
	</div>
	    <br>
	    <div class="container">
	          <div class="card-panel">
	          	<p>Halaman Bantuan</p>
			  </div>
			<br>  

	    </div>
	</div><br><br><br>

	<!-- Footer -->
	<footer class="footer" style="margin-top: 15px;">
			<div class="divider"></div>
          	<div class="center grey-text text-darken-2">
	            <span style="line-height: 40px;">© 2018 Warung Broto - All Rights Reserved.</span>
            </div>
    </footer>
	</div>

	<!-- Javascript -->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js "></script>
 	<script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
 	<!-- Sidebar toggler -->
 	<script type="text/javascript">

		  $('#toggler').click(function(){
		  		var clicks = $(this).data('clicks');

				  if (clicks) {
				  	$('ul#slide-out').addClass('fixed');
				  	$(this).removeAttr('id');
				  	$(this).attr('id','toggler1');
				  	$('.ownwrapper').css('margin-left','230px');
				  } else {
				    $('ul#slide-out').removeClass('fixed');
				  	$(this).removeAttr('id');
				  	$(this).attr('id','toggler');
				  	$('.ownwrapper').css('margin-left','0');				    
				  }
				  $(this).data("clicks", !clicks);
	
		  		
		  	});

	</script>

</body>

</html>