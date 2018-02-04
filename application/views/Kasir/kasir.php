<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama Kasir</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
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
	<ul id="dropdown1" class="dropdown-content ">
	  <li ><a href="#!" >Logout</a></li>
	</ul>
	 <nav class="white">
	    <div class="nav-wrapper">
	    	<ul>
	    		<li><a href="#" class="brand-logo" style="color: #4db6ac; margin-left: 30px; font-size: 25px;">WarungBroto</a></li>
	    	</ul>    	
	    	
	      	
	      	<ul class="right hide-on-med-and-down">
		      	<!-- Dropdown Trigger -->
		      	<li><a href="#!" class="dropdown-button" data-activates="dropdown1" data-beloworigin="true"><i class="material-icons" style="color: #4db6ac;">more_vert</i></a></li>
		   	</ul>
	    </div>
	  </nav>

	  <div class="row" style="margin-top: 2vh;">
	  	<div class="col s3" ">
	  		<div class="card" style="margin-left: 40px;">
	  			<div style="padding:5px;padding-left: 20px;">
	  				<p>No. Nota : <span id="txtNota"></span></p>
	  				<p>Tanggal : <span id="txtTanggal"></span></p>
	  				<p>No. Meja : <span id="txtMeja"></span></p>
	  			</div>
	  			
	  		</div>
	  	</div>
	  	<div class="col s4 offset-s1" style="margin-top: 5vh;">
	  		<h4 style="text-align: center;">Pembayaran Kasir</h4>
	  </div>	
	  </div>
	  
	  <div class="row" style="margin-top: 2vh;">
	  	<div>
		  	<table class="col s8 offset-s2 centered bordered">
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
				    }
				});

				window.location.replace("<?= base_url() ?>/index.php/kasir/cetak");
				

 	 		});



 	 	});
 	 </script>
 	 
</body>
</html>