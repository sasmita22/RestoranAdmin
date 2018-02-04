<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Dashboard - Daftar Makanan</title>
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

		<!-- Modal detailmkn Structure -->
		<div id="modaldetailmkn" class="modal modal-fixed-footer">
			<div class="modal-content">
				<!-- Modals Heading -->
				<h5><span style="color: #009688;"><i class="material-icons ">details</i> Detail Data Makanan</span></h5>
				<div class="divider"></div>
				<br>
				<table class="bordered">
					<thead>
						<tr>
							<th>ID Bahan</th>
							<th>Nama Bahan</th>
							<th>Qty</th>
						</tr>
					</thead>

					<tbody id="detail-bahan">
						
					</tbody>
      			</table>
			</div> <!--//End class of modal-content -->
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
				<a class="modal-action modal-close waves-effect waves-teal btn-flat" >Ubah</a>
			</div> <!--//End class of modal-footer -->
		</div> <!-- End modal detailmkn structure -->

		<!-- Modal ubahmkn Structure -->
		<div id="modalubahmkn" class="modal modal-fixed-footer">
			<div class="modal-content">
				<!-- Modals Heading -->
				<h5><span style="color: #009688;"><i class="material-icons">details</i> Ubah Data Makanan</span></h5>
				<div class="divider"></div>
				<br>
				 <!-- Form Ubah Makanan -->
				<div class="row">
					<form action="#" class="col s12">
					     
					    <!-- Input ID Makanan dan Nama Makanan -->
					    <div class="row">
					    	<div class="input-field col s5">
					          	<input id="idmkn" type="text" class="validate">
					          	<label for="idmkn">ID Makanan</label>
					        </div>
					    	<div class="input-field col s5 offset-s2">
					        	<input id="namamkn" type="text" class="validate">
					          	<label for="namamkn">Nama Makanan</label>
					        </div>
					    </div>

					    <!-- Input Jenis Makanan dan Tag -->
					    <div class="row">
					        <div class="input-field col s5">
					          	<input id="jenismkn" type="text" class="validate">
					          	<label for="jenismkn">Jenis Makanan</label>
					        </div>
					        <div class="input-field col s5 offset-s2">
					          	<input id="tag" type="text" class="validate">
					          	<label for="tag">Tag</label>
					        </div>
					    </div>

					    <!-- Input Harga Beli dan Harga Jual -->
					    <div class="row">
					        <div class="input-field col s5">
					          	<input id="hrgbeli" type="text" class="validate">
					          	<label for="hrgbeli">Harga Beli</label>
					        </div>
					        <div class="input-field col s5 offset-s2">
					          	<input id="hrgjual" type="text" class="validate">
					          	<label for="hrgjual">Harga Jual</label>
					        </div>
					    </div>

						<!-- Input Deskripsi -->
					    <div class="row">
					       	<div class="input-field col s12">
					         	<textarea id="deskripsi" class="materialize-textarea"></textarea>
					         	<label for="deskripsi">Deskripsi</label>
					       	</div>
					    </div>
						<br><br>

					    <!-- Input Gambar -->
					    <div class="row">
							<div class="file-field input-field col s6">
							    <div class="btn">
							      <span>Pilih File</span>
							      <input type="file">
							    </div>
							   	<div class="file-path-wrapper">
							      	<input class="file-path validate" type="text">
							    	</div>
								</div>
					     	</div>
			    	</form> <!-- End form -->
				</div> <!-- End class of Row -->       		
			</div> <!-- End Class of modal-content -->

			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
				<a href="<?= base_url() ?>index.php/Ubahmakanan/" class="modal-action modal-close waves-effect waves-teal btn-flat">Ubah</a>
			</div>
		</div> <!-- End modal structure -->

		<!-- Modal hapusmkn Structure -->
		<div id="modalhapusmkn" class="modal modalhapus modal-fixed-footer">
			<div class="modal-content">
				<h5><span style="color: #009688;"><i class="material-icons">warning</i> Konfirmasi Hapus</span></h5>
				<div class="divider"></div>
				<div class="row">
					<form action="#" class="col s12">
						<!-- Modals Heading -->
						<div class="row">
							<p style=" margin-top: 30px;">Apa anda yakin ingin menghapus data?</p>
						</div>
					</form>
				</div>
			</div> <!-- End of class modal-content -->

			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat" data-dismiss="modal">Batal</a>					
				<a class="modal-action modal-close waves-effect waves-teal btn-flat" id="btnHapus">Hapus</a>
			</div>
		</div> <!-- end modal structure -->

		<!-- Modal tambahmkn Structure -->
		<div id="modaltambahmkn" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h5><span style="color: #009688;"><i class="material-icons">add_circle_outline</i> Tambah Data Makanan</span></h5>
			<div class="divider"></div>
			<br>
			
			<!-- Form Tambah Makanan -->
			<div class="row">
				<form class="col s12" id="formtambahmakanan">
					<!-- Input ID Makanan dan Nama Makanan -->
					<div class="row">
					    <div class="input-field col s5">
					        <input id="idmkn" type="text" class="validate">
					        <label for="idmkn">ID Makanan</label>
					    </div>
					    
					    <div class="input-field col s5 offset-s2">
					        <input id="namamkn" type="text" class="validate">
					        <label for="namamkn">Nama Makanan</label>
					    </div>
					</div>
					      
					<!-- Input Jenis Makanan dan Tag -->
					<div class="row">
					    <div class="input-field col s5">
					        <input id="jenismkn" type="text" class="validate">
					        <label for="jenismkn">Jenis Makanan</label>
					    </div>
					    <div class="input-field col s5 offset-s2">
					        <input id="tag" type="text" class="validate">
					        <label for="tag">Tag</label>
					    </div>
					</div>

					<!-- Input Harga Beli dan Harga Jual -->
					<div class="row">
					    <div class="input-field col s5">
					        <input id="harga" type="text" class="validate">
					        <label for="harga">Harga</label>
					    </div>
					</div>

					<!-- Input Deskripsi -->
					<div class="row">
					    <div class="input-field col s12">
					        <textarea id="deskripsi" class="materialize-textarea"></textarea>
					        <label for="deskripsi">Deskripsi</label>
					    </div>
					</div>

					<!-- Input Bahan -->
					<div class="row">
						<div id="formbahan"></div>
						<!-- Button untuk mengurangi bahan -->
					    <div class="input-field col s1">
							<button class="btn-floating btn waves-effect waves-light teal" id="tambahbahan"><i class="material-icons">add</i></button>
						</div>		
					    <div class="input-field col s1">
							<button class="btn-floating btn waves-effect waves-light red "><i class="material-icons">remove</i></button>
						</div>							
					</div> <!--//End Input Bahan2 dst -->

					<br><br>
					<!-- Input Gambar -->
					<div class="row">
						<div class="file-field input-field col s6">
							<div class="btn">
							 	<span>Pilih File</span>
							    <input type="file">
							</div>
							<div class="file-path-wrapper">
							    <input class="file-path validate" type="text">
							</div>
						</div>
					</div>
				</form>
			</div> <!-- End form -->       					
			</div> <!-- End Modal Content -->
				<div class="modal-footer">
				  <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
				  <a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat" id="simpanTambah">Simpan</a>
				</div>
			</div>
	     <!-- endmodalstructure -->


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
    	<li class="active"><a class="waves-effect" href="<?= base_url() ?>index.php/Makanan/"><i class="material-icons">restaurant</i>Daftar Makanan</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Bahan/"><i class="material-icons">receipt</i>Daftar Bahan</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="subheader">Akun</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Meja/"><i class="material-icons">add_circle_outline</i>Meja</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="subheader">Layanan Pengguna</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Riwayat"><i class="material-icons">history</i>History Transaksi</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/"><i class="material-icons">help</i>Bantuan</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Login/"><i class="material-icons">exit_to_app</i>Keluar</a></li>
  	</ul>

	<!-- Main content -->
	<div class="ownwrapper">
	<div class="content">
		<div class="container">
	    <div class="divider"></div>
	    <span style="color: #009688;"><h5 class="center"><i class="material-icons helo">restaurant</i> Daftar Makanan</h5></span>
	    <div class="divider"></div>
	</div>
	    <br>
	    <div class="container">
	            <div class="card-panel">
			      <table class="bordered" id="table ">
			        <thead>
			          <tr>
			              <th>ID </th>
			              <th>Nama Makanan</th>
			              <th>Jenis</th>
			              <th>Tag</th>
			              <th>Deskripsi</th>
			              <th>Harga</th>
			              <th style="text-align: center;">Aksi</th>
			          </tr>
			        </thead>

			        <tbody id="showMakanan">
			          
			        </tbody>
			      </table>
			      <br>
			  </div>
			<br>  
			<!-- Button tambahkan makanan -->
			<div class="center">
				<button class="waves-effect waves-default btn modal-trigger white teal-text helo" id="btnModalTambah">Tambah Makanan</button>
			</div>

	</div><br><br><br>

	<!-- Footer -->
	<footer class="footer" style="margin-top: 15px;">
			<div class="divider"></div>
          	<div class="center grey-text text-darken-2">
	            <span style="line-height: 40px;">© 2018 Warung Broto - All Rights Reserved.</span>
            </div>
    </footer>

	<!-- Javascript -->
	<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js "></script>
 	<script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
 	
 	<script type="text/javascript">

 		//globalvariable
 		var makanan;
 		//<!-- Sidebar toggler -->
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

		//Modals JS Option 
	  	$('.modal').modal({
	     	dismissible: true, // Modal can be dismissed by clicking outside of the modal
	      	opacity: .5, // Opacity of modal background
	      	inDuration: 300, // Transition in duration
	      	outDuration: 200, // Transition out duration
	      	startingTop: '4%', // Starting top style attribute
	      	endingTop: '10%', // Ending top style attribute
	    });
	

		//Datepicker JS 
	
	 	$('.datepicker').pickadate({
    	  	selectMonths: true, // Creates a dropdown to control month
    	  	selectYears: 2, // Creates a dropdown of 15 years to control year,
    	  	today: false,
    	  	clear: 'Bersihkan',
    	  	close: 'ok',
    	  	closeOnSelect: false // Close upon selecting a date,
  	  	});
	

		//Material Select
	
		$(document).ready(function() {
    		$('select').material_select();
  		});

  		//CRUD
  		$(function(){
  			
  			showMakanan();

  			function showMakanan(){
  				$.ajax({
			     	method : "get",
			     	url : '/ci-restserver/index.php/makanan',
			     	dataType : 'json',
			     	success : function(data){
			     		var html = '';
			     		var i;
			     		makanan = data;
			     		for(i=0;i<data.length;i++){
			     			html += 
			     				'<tr>'+
					            	'<td>'+data[i].id_makanan+'</td>'+
					            	'<td>'+data[i].nama+'</td>'+
					            	'<td>'+data[i].jenis+'</td>'+
					            	'<td>'+data[i].tag+'</td>'+
					            	'<td>'+data[i].deskripsi+'</td>'+
					            	'<td> Rp '+data[i].harga+'</td>'+
					            	'<td>'+
					            	//<!-- Button Trigger Modal -->
					            		'<button class="waves-effect waves-teal btn btn-small modal-trigger white teal-text item-detail" data="'+i+'">Detail</button>'+
					            		'<button class="waves-effect waves-teal btn btn-small modal-trigger white teal-text item-ubah" data="'+i+'">Ubah</button>'+
					            		'<button class="waves-effect waves-red btn btn-small modal-trigger white teal-text item-hapus" data="'+i+'">Hapus</button>'+
					           		'</td>'+
					          	'</tr>';
			     		}
			     		$('#showMakanan').html(html);

			     	},
			     	error : function(xhr, status, error){
			     		alert(xhr.responseText);
			     	}

			    }); 		
  			}

  			$('#showMakanan').on('click','.item-detail',function(){
  					var index = $(this).attr('data');
  					var listbahan = makanan[index].bahan;
  					console.log(listbahan);
  					html = '';

  					$('#modaldetailmkn').modal('open');

  					for(i=0;i<listbahan.length;i++){
  						html += 
  						'<tr>'+
							'<td>'+listbahan[i].id_bahan+'</td>'+
							'<td>'+listbahan[i].nama+'</td>'+
							'<td>'+listbahan[i].qty+' Gr</td>'+
						'</tr>';
  					}

  					$('#detail-bahan').html(html);
  			
  			});

  			$('#showMakanan').on('click','.item-hapus',function(){
  					var index = $(this).attr('data');
  					var id = makanan[index].id_makanan;
  					var listbahan = makanan[index].bahan;

  					$('#modalhapusmkn').modal('open');

  					$('#btnHapus').unbind().click(function(){
  						$.ajax({
			              type : 'DELETE',
			              url : '/ci-restserver/index.php/makanan/'+id,
			              dataType : 'json',
			              success : function(response){
			                  $('#modalhapusmkn').modal('close');

			                  if (response.status == 'success' ){
			                  	alert("data berhasil dihapus");
			                  } else {
			                  	alert("data gagal dihapus");
			                  }
			                  showMakanan();
			              },
			              error : function(xhr,status,error){
			                alert(xhr.responseText);
			              }
			            });

  					});
  			
  			});

  			$('#btnModalTambah').click(function(){
  				$('#modaltambahmkn').modal('open');	

  				$('#simpanTambah').unbind().click(function(){
  					var data = {
  						"id_makanan" : $('#formtambahmakanan #idmkn').val(),
  						"nama" : $('#formtambahmakanan #namamkn').val(),
  						"jenis" : $('#formtambahmakanan #jenismkn').val(),
  						"tag" : $('#formtambahmakanan #tag').val(),
  						"deskripsi" : $('#formtambahmakanan #deskripsi').val(),
  						"harga" : $('#formtambahmakanan #harga').val(),
  						"path" : '',
  						"bahan" : ''//$('#formbahan').serialize()		
  					}
  					alert(data);
  						$.ajax({
			              type : 'ajax',
			              method : 'post',
			              data : data,
			              url : '/ci-restserver/index.php/makanan',
			              dataType : 'json',
			              success : function(response){
			                  $('#modaltambahmkn').modal('close');

			                  if (response.status == 'success' ){
			                  	alert("Makanan berhasil ditambah");
			                  } else {
			                  	alert("Makanan gagal ditambah");
			                  }
			                  showMakanan();
			              },
			              error : function(xhr,status,error){
			                alert(xhr.responseText);
			              }
			            });

  				});
  			});

  			var j = 0;
  			$('#tambahbahan').click(function(){
  				j++;
  				$('#formbahan').append('<div class="input-field col s10">'+
					        '<input id="bahan" type="text" class="validate">'+
					        '<label for="bahan">Masukan Bahan '+j+'</label>'+
					        '<input id="qty" type="text" class="validate">'+
					        '<label for="bahan">Masukan Qty '+j+'</label>'+
						'</div>');
  			});
  		});

	</script>

</body>

</html>