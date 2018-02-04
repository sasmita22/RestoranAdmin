<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Daftar Makanan - Ubah Data</title>
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

	<!-- Modal Structure -->
	<div id="modaltambahbahanmkn" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h5><span style="color: #009688;"><i class="material-icons">add_circle_outline</i> Tambah Data Bahan Makanan</span></h5>
			<div class="divider"></div>
			<br>
		
			<!-- Form Tambah Bahan Makanan -->
			<div class="row">
				<form action="#" class="col s12">
					<!-- Input ID Bahan -->
					<div class="row">
					    <div class="input-field col s12">
					        <input id="idbahan" type="text" class="validate">
					        <label for="idbahan">ID Bahan</label>
					    </div>
					</div>

					<!-- Input Nama Bahan-->
					<div class="row">
					    <div class="input-field col s12">
					   		<input id="namabhn" type="text" class="validate">
					        <label for="namabhn">Nama Bahan</label>
					    </div>
					</div>

					<!-- Input Qty -->
					<div class="row">
					    <div class="input-field col s3">
					        <input id="qty" type="number" class="validate">
					        <label for="qty">QTY</label>
					    </div>
					</div>

				</form>
			</div>        					
		</div>

		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
			<a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Simpan</a>
		</div>		
	</div> <!-- endmodalstructure -->

		<!-- Modal Ubah bahan makanan Structure -->
		<div id="modalubahbahanmkn" class="modal modal2 modal-fixed-footer">
			<div class="modal-content">
				<h5><span style="color: #009688;"><i class="material-icons">edit</i> Ubah Qty Bahan Makanan</span></h5>
				<div class="divider"></div>
				<br><br>

				<!-- Form Ubah Qty bahan Makanan -->
				<div class="row">
					<form action="#" class="col s12">

					<!-- Tambah Qty bahan makanan-->
					<div class="row">
						<div class="input-field col s8 offset-s2">
							<input id="qty" type="number" class="validate">
							<label for="qty">QTY</label>
						</div>
					</div>
					</form>
				</div> <!-- End form Qty -->
			</div> <!-- End modal content -->
			
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
				<a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Simpan</a>
			</div>
		</div> <!-- endmodalstructure -->

	<!-- Modal Hapus data bahan makanan Structure -->
	<div id="modalhapusbahanmkn" class="modal modalhapus modal-fixed-footer">
		<div class="modal-content">
			<h5><span style="color: #009688;"><i class="material-icons">warning</i> Konfirmasi Hapus</span></h5>
			<div class="divider"></div>
			<div class="row">
				<p style=" margin-top: 30px;">Apa anda yakin ingin menghapus data?</p>
			</div>
			</div>
			
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
			<a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat">Konfirmasi</a>
		</div>
		</div>
	</div> <!-- endmodalstructure -->

	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="white">
		    <div class="nav-wrapper" style="margin-left: 11px;">

		    	<!-- My Breadcrumbs -->
			    <div class="col s12">
			       <a href="<?= base_url() ?>index.php/" class="breadcrumb">Warung Broto</a>
			       <a href="<?= base_url() ?>index.php/Makanan/" class="breadcrumb">Daftar Makanan</a>
			       <a href="<?= base_url() ?>index.php/Ubahmakanan/" class="breadcrumb teal-text text-darken-1"><u>Ubah Bahan Makanan</u></a>

					<!-- Dropdown Content -->
					 <ul id="dropdown1" class="dropdown-content right">
					 	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/" style="color: black;">Bantuan</a></li>
					 	<li class="divider"></li>
					  	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Login/" style="color: black;">Keluar</a></li>
					 </ul>
			   		</ul>
			    </div>

		    </div>
		 </nav>
	</div>


	<!-- Main content -->
	<div class="own2wrapper" >
	<div class="content">
		<div class="container">
	    <div class="divider"></div>
	    <span style="color: #009688;"><h5 class="center"><i class="material-icons">edit</i>Ubah Data Bahan Makanan</h5></span>
	    <div class="divider"></div>
	</div>
	    <br>
	    <div class="container">
	          <div class="card-panel">
	          	<div class="row">

	          		<!-- Data makanan yang akan diubah -->
	          		<div class="card-panel col s-5" style="margin-left: 5px;">
	          			<p>ID Makanan</p>
	          			<p>Nama Makanan</p>
	          		</div>

					<!-- Button tambahkan bahan -->
	          		<div class="right" style="margin-top: 15px;">  
						<div>
							<a class="waves-effect waves-default btn modal-trigger white teal-text" href="#modaltambahbahanmkn">Tambah Bahan</a>
						</div>
	          		</div>
			  	</div>

			      <table class="bordered">
			        <thead>
			          <tr>
			              <th>ID Bahan</th>
			              <th>Nama Bahan</th>
			              <th>Qty</th>
			              <th style="text-align: center; width: 140px;">Aksi</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>124412</td>
			            <td>Nasi Goreng</td>
			            <td>Indonesian</td>
			            <td>
			            	<!-- Button Trigger Modal -->
			            	<button class="waves-effect waves-teal btn btn-small modal-trigger white teal-text" href="#modalubahbahanmkn">Ubah</button>         	
			            	<button class="waves-effect waves-red btn btn-small modal-trigger white teal-text" href="#modalhapusbahanmkn">Hapus</button>
			            </td>
			          </tr>
			          <tr>
			            <td>124412</td>
			            <td>Nasi Goreng</td>
			            <td>Indonesian</td>
			            <td></td>
			          </tr>
			          <tr>
			            <td>124412</td>
			            <td>Nasi Goreng</td>
			            <td>Indonesian</td>
			            <td></td>
			          </tr>
			          <tr>
			            <td>124412</td>
			            <td>Nasi Goreng</td>
			            <td>Indonesian</td>
			            <td></td>
			          </tr>

			        </tbody>
			      </table>
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

	<!-- Modals JS Option -->
	<script type="text/javascript">
		
	  $('.modal').modal({
	      dismissible: true, // Modal can be dismissed by clicking outside of the modal
	      opacity: .5, // Opacity of modal background
	      inDuration: 300, // Transition in duration
	      outDuration: 200, // Transition out duration
	      startingTop: '4%', // Starting top style attribute
	      endingTop: '10%', // Ending top style attribute
	    }
	  );
	</script>

</body>

</html>