<?php 
	if(isset($_SESSION['username'])and isset($_SESSION['status'])){
		if(!($_SESSION['username'] =='kasir') || !($_SESSION['status'] == 'logged')){
		 	redirect(base_url('index.php/login'));
		}
	}else{
		redirect(base_url('index.php/login'));
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styleku.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style>
		tbody {
			display:block;
			height:30vh;
			overflow:auto;
		}
		thead, tbody tr {
			display:table;
			width:100%;
			table-layout:fixed;
		}
		thead {
			width: calc( 100% - 1em )
		}
		table {
			width:100%;
		}
	</style>
</head>
<body>

	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="white">
		    <div class="nav-wrapper">

		 		<span style="">
		        	<a href="<?= base_url() ?>index.php/kasir/" class="button-collapse show-on-large" style="color: #616161; margin-left: 30px;"><i class="material-icons">dashboard</i>
             		</a>
             		<a href="<?= base_url() ?>index.php/kasir/" class="button-collapse show-on-large" style="margin-left: 0px; font-weight: 500; font-size: 20px; color: #00897b;">KASIR warungbroto
             		</a>
             	</span>
	      	
		      	<ul class="right hide-on-med-and-down" style="margin-right: 11px;">
			      	<!-- Dropdown Trigger -->
			      	<li><a href="#!" class="dropdown-button" data-activates="dropdown1" data-beloworigin="true"><i class="material-icons" style="color: #616161;">more_vert</i></a></li>

					<!-- Dropdown Content -->
					 <ul id="dropdown1" class="dropdown-content right">
					 	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/" style="color: black;">Bantuan</a></li>
					 	<li class="divider"></li>
					  	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Login/logout" style="color: black;">Keluar</a></li>
					 </ul>
			   	</ul>

		    </div>
		</nav>
	</div>

	<!-- Main Content -->
	<div class="container teal darken-1" style="top: 0; margin-bottom: 50px;"><br>
		<h4 style="text-align: center; color: white;"><i class="large material-icons">shopping_cart</i></h4>
	  	<h4 style="text-align: center; color: white;">PEMBAYARAN</h4><br>
	</div>

	<div class="container">
		<div class="card-panel">
	  	<div class="row" style="margin-top: 40px;">
	  		<div class="row" style="margin-top: 2vh;">
	  			<div class="col s3 offset-s1">
	  				<div class="card" style="m">
	  				<div style="padding:5px;padding-left: 20px;">
	  					<p><b>No. Nota</b>  &nbsp;:&nbsp; <span id="txtNota"></span></p>
	  					<p><b>Tanggal</b>&nbsp;&nbsp;&nbsp;:&nbsp; <span id="txtTanggal"></span></p>
	  					<p><b>No. Meja</b> :&nbsp; <span id="txtMeja"></span></p>
	  				</div>
	  				</div>
	  			</div>
	  		<div class="col s4 offset-s1" style="margin-top: 5vh;">
	  	</div>	
		</div>
	
	<div class="row" style="margin-top: 10vh;">
	  	<div class="col s12">
		  	<table class="col s10 offset-s1 centered bordered striped">
		        <thead>
		          <tr>
		              <th>Kode Item</th>
		              <th>Nama Item</th>
		              <th>Qty</th>
		              <th>Harga</th>
		          </tr>
		        </thead>

		        <tbody id="showListpesanan">

		        </tbody>
		    </table>	
		</div>  
	  </div>

	  <div class="row" style="margin-top: 40px;">
	  		<div class="col s2 offset-s5">
	  			<button id="btnBayar" class="btn waves-effect col s12">Bayar</button>
	  		</div>
	  </div>
	</div>
</div>
</div>

	<br><br><br>
	<!-- Footer -->
	<footer class="footer teal darken-1" style="margin-top: 15px;">
			<div class="divider"></div>
          	<div class="center white-text text-darken-2">
	            <span style="line-height: 40px;">© 2018 Warung Broto - All Rights Reserved.</span>
            </div>
    </footer>
	</div>
	  
	  <script type="text/javascript" src="<?= base_url() ?>assets/js/js.cookie.js "></script>
	  <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js "></script>
 	 <script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>

 	 <script type="text/javascript">
 	 	$(function(){
 	 		var datameja = JSON.parse(Cookies.get('datameja'));
 	 		$('#txtTanggal').text(datameja.tanggal);
 	 		$('#txtWaktu').text(datameja.waktu);
 	 		$('#txtMeja').text(datameja.no_meja);
 	 		$('#txtNota').text(datameja.no_nota);
 	 		showListpesanan();

 	 		function showListpesanan(){
 	 			var html = '';
 	 			var i;
 	 			var listpesanan = datameja.listpesanan;

 	 			for(i=0;i<listpesanan.length;i++){
 	 				html +=
 	 				  '<tr>'+
			            '<td>'+listpesanan[i].id_makanan+'</td>'+
			            '<td>'+listpesanan[i].nama+'</td>'+
			            '<td>'+listpesanan[i].qty+'</td>'+
			            '<td>Rp '+listpesanan[i].harga+'</td>'+
			          '</tr>';
 	 			}


 	 			html += 
 	 				'<tr>'+
 	 					'<td style="text-align : center;"> Total Bayar</td>'+
 	 					'<td colspan="2"></td>'+
 	 					'<td style="text-align : center;">Rp '+datameja.total+'</td>'+
 	 				'</tr>';

 	 			$('#showListpesanan').html(html);

 	 		}

 	 		$('#btnBayar').click(function(){

 	 			$.ajax({
				    url: '/ci-restserver/index.php/kasir/konfirmasi',
				    type: 'PUT',
				    data: {no_nota : datameja.no_nota},
				    dataType : "json",
				    success: function(result) {
				        alert('success');
				        window.location.replace("<?= base_url()  ?>/index.php/kasir/cetak");
				    }
				});
 	 			
 	 		});



 	 	});
 	 </script>
 	 
</body>
</html>