<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Dashboard - History Transaksi</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styleku.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
		body {
			min-height: 100vh;

		}
		footer{
			max-height: 40px;
		}
	</style>
</head>
<body>

	<!-- Modal Hapus data bahan Structure -->
	<div id="modalhapusriwayat" class="modal modalhapus modal-fixed-footer">
		<div class="modal-content">
			<h5><span style="color: #009688;"><i class="material-icons">warning</i> Konfirmasi Hapus</span></h5>
			<div class="divider"></div>
			<div class="row">
				<p style=" margin-top: 30px;">Apa anda yakin ingin menghapus data?</p>
			</div>
			</div>			
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
			<a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat" id="btnHapus">Hapus</a>
		</div>
		</div>
	</div> <!-- endmodalstructure -->

	<!-- Modal detail Structure -->
	<div id="modaldetailtransksi" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h5><span style="color: #009688;"><i class="material-icons">details</i> Detail History Transaksi</span></h5>
			<div class="divider"></div>
			<br>
			<table class="bordered">
				<thead>
					<tr>
						<th>Nama Makanan</th>
						<th>Harga</th>
						<th>Qty</th>
					</tr>
				</thead>
				<tbody id="showDetail">
					
				</tbody>
      		</table>        	
		</div> <!-- End class modal-content -->
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Tutup</a>
		</div>	    
	</div> <!-- endmodalstructure -->


	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="white">
		    <div class="nav-wrapper" style="margin-left: 11px;">
		        <span>
		        	<a href="#" id="toggler" data-activates="slide-out" materialize="sideNav" class="button-collapse show-on-large" style="color: black"><i class="material-icons">menu</i>
             		</a>
             	</span>

             	<span style="color: #009688; font-weight: 500; font-size: 20px;">Warung Broto</span>
		      	
		      	<ul class="right hide-on-med-and-down" style="margin-right: 11px;">
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
    	<li class="active"><a class="waves-effect" href="<?= base_url() ?>index.php/Riwayat/"><i class="material-icons">history</i>History Transaksi</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/"><i class="material-icons">help</i>Bantuan</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Login/"><i class="material-icons">exit_to_app</i>Keluar</a></li>

  	</ul>

	<!-- Main content -->
	<div class="ownwrapper" >
	<div class="content">
		<div class="container">
	    <div class="divider"></div>
	    <span style="color: #009688;"><h5 class="center"><i class="material-icons">history</i> History Transaksi</h5></span>
	    <div class="divider"></div>
	</div>
	    <br>
	    <div class="container">
	            <div class="card-panel">
			      <table class="bordered">
			        <thead>
			          <tr>
			              <th style=" width: 200px;">No Nota</th>
			              <th style=" width: 250px;">No Meja</th>
			              <th style=" width: 300px;">Rate</th>
			              <th style=" width: 300px;">Total Bayar</th>
			              <th style=" width: 200px; padding-left: 45px;">Aksi</th>
			          </tr>
			        </thead>

			        <tbody id="showRiwayat">
			          

			        </tbody>
			      </table>
			      <br>
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

	<script type="text/javascript">
		var riwayat;
		//CRUD
  		$(function(){
  			showRiwayat();

  			function showRiwayat(){
  				$.ajax({
			     	method : "get",
			     	url : '/ci-restserver/index.php/riwayat',
			     	dataType : 'json',
			     	success : function(data){
			     		var html = '';
			     		var i;
			     		riwayat = data;
			     		for(i=0;i<data.length;i++){
			     			html += 
			     				'<tr>'+
			            			'<td>'+data[i].no_nota+'</td>'+
			            			'<td>'+data[i].tanggal+'</td>'+
			            			'<td>'+data[i].feedback+'</td>'+
			            			'<td>Rp '+data[i].total+'</td>'+
			            			'<td>'+
			            				'<button class="waves-effect btn btn-small modal-trigger white teal-text item-detail" data="'+i+'">Detail</button>'+
			            				'<button class="waves-effect waves-red btn btn-small modal-trigger white teal-text item-hapus" data="'+i+'">Hapus</button>'+
			            			'</td>'+
			          			'</tr>';
			     		}
			     		$('#showRiwayat').html(html);
			     	},
			     	error : function(xhr, status, error){
			     		console.log(xhr.responseText);
			     	}

			    }); 		
  			}

  			$('#showRiwayat').on('click','.item-detail',function(){
  					var index = $(this).attr('data');
  					var data = riwayat[index].pesanan;
  					var html = '';
  					var i;

  					$('#modaldetailtransksi').modal('open');

  					for(i=0;i<data.length;i++){
  						html += '<tr>'+
									'<td>'+data[i].nama_makanan+'</td>'+
									'<td>Rp '+data[i].harga+'</td>'+
									'<td>'+data[i].qty+'</td>'+
								'</tr>';
  					}
  					
  					$("#showDetail").html(html);
  			});

  			$('#showRiwayat').on('click','.item-hapus',function(){
  					var index = $(this).attr('data');
  					var nota = riwayat[index].no_nota;

  					$('#modalhapusriwayat').modal('open');

  					$('#btnHapus').unbind().click(function(){
  						$.ajax({
			              type : 'DELETE',
			              url : '/ci-restserver/index.php/riwayat/'+nota,
			              dataType : 'json',
			              success : function(response){
			                  $('#modalhapusriwayat').modal('close');

			                  if (response.status == 'success' ){
			                  	alert("data berhasil dihapus");
			                  } else {
			                  	alert("data gagal dihapus");
			                  }
			                  showRiwayat();
			              },
			              error : function(xhr,status,error){
			                alert(xhr.responseText);
			              }
			            });

  					});
  			
  			});
  		});
	</script>
</body>

</html>