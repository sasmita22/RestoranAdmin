<?php 
	if(isset($_SESSION['username'])and isset($_SESSION['status'])){
		if(!($_SESSION['username'] =='admin') || !($_SESSION['status'] == 'logged')){
		 	redirect(base_url('index.php/login'));
		}
	}else{
		redirect(base_url('index.php/login'));
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>Dashboard - Daftar Bahan</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styleku.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
		body {
			min-height: 100vh;

		}
		footer{
			
		}
	</style>
</head>
<body>

		<!-- Modals tambahbahan Structure -->
		<div id="modaltambahbahan" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h5><span style="color: #009688;"><i class="material-icons">add_circle_outline</i> Tambah Data Bahan</span></h5>
				<div class="divider"></div>
				<br><br><br>

				<!-- Form Tambah Bahan -->
				<div class="row">
					<form class="col s12" id="formtambahbahan">
					    <div class="row">
					        <div class="input-field col s6">
					          <input id="namabahan" type="text" class="validate" name="nama_bahan">
					          <label for="namabahan" >Nama Bahan</label>
					        </div>
					    </div>
					    <div class="row">
					    	<div class="input-field col s6">
					          <input id="tglkadaluarsa" type="text" class="datepicker" name="tgl_kadaluarsa">
					          <label for="tglkadaluarsa">Tanggal Kadaluarsa</label>
					        </div>
					        <div class="input-field col s6">
					          <input  id="stokbahan" type="text" class="validate" name="stok">
					          <label for="stokbahan">Stok Bahan</label>
					        </div>
					    </div>

					</form>
				</div> <!-- End form tambah bahan -->        	
			</div> <!-- End of modal-content -->

			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
				<a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat" id="simpanTambah">Simpan</a>
			</div>
	    </div> <!-- endmodalstructure -->

		<!-- Modal Structure -->
		<div id="modalubahbahan" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h5><span style="color: #009688;"><i class="material-icons">add_circle_outline</i> Ubah Data Bahan</span></h5>
				<div class="divider"></div>
				<br><br><br>
				<!-- Form Ubah Bahan -->
				<div class="row">
					<form class="col s12" id="formUbah">
					    <div class="row">
					       	<div class="input-field col s6">
					          <input disabled="" id="idbahan" type="text" class="validate">
					          <label for="idbahan">ID Bahan</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="namabahan" type="text" class="validate">
					          <label for="namabahan">Nama Bahan</label>
					        </div>
					    </div>
					    <div class="row">
					        <div class="input-field col s6">
					          <input id="tglkadaluarsa" type="text" class="datepicker">
					          <label for="tglkadaluarsa">Tanggal Kadaluarsa</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="stokbahan" type="text" class="validate">
					          <label for="stokbahan">Stok Bahan</label>
					        </div>
					    </div>

					</form>
				</div> <!-- End form tambah bahan -->        	
				</div> <!-- End class modal-content -->
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Batal</a>					
				<a href="#!" class="modal-action modal-close waves-effect waves-teal btn-flat" id="btnUbah">Simpan</a>
			</div>
	    </div> <!-- endmodalstructure -->


		<!-- Modal Hapus data bahan Structure -->
		<div id="modalhapusbhn" class="modal modalhapus modal-fixed-footer">
			<div class="modal-content">
				<!-- Heading modals -->
				<h5><span style="color: #009688;"><i class="material-icons">warning</i> Konfirmasi Hapus</span></h5>
				<div class="divider">
			</div>
			
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

	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="white">
		    <div class="nav-wrapper" style="margin-left: 11px;">
		        <span >
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
					  	<li> <a class="waves-effect" href="<?= base_url() ?>index.php/Login/logout" style="color: black;">Keluar</a></li>
					 </ul>
			   	</ul>

		    </div>
		 </nav>
	</div>

	<!-- Sidebar Content -->
  	<ul id="slide-out" class="side-nav fixed">
    	<li><a class="subheader">Pantry</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Makanan/"><i class="material-icons">restaurant</i>Daftar Makanan</a></li>
    	<li class="active"><a class="waves-effect" href="<?= base_url() ?>index.php/Bahan/"><i class="material-icons">receipt</i>Daftar Bahan</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="subheader">Akun</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Meja/"><i class="material-icons">add_circle_outline</i>Meja</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="subheader">Layanan Pengguna</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Riwayat/"><i class="material-icons">history</i>History Transaksi</a></li>
    	<li><div class="divider"></div></li>

    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Bantuan/"><i class="material-icons">help</i>Bantuan</a></li>
    	<li><a class="waves-effect" href="<?= base_url() ?>index.php/Login/logout"><i class="material-icons">exit_to_app</i>Keluar</a></li>
  	</ul>

	<!-- Main content -->
	<div class="ownwrapper" >
	<div class="content">
		<div class="container">
	    <div class="divider"></div>
	    <span style="color: #009688;"><h5 class="center"><i class="material-icons">receipt</i> Daftar Bahan</h5></span>
	    <div class="divider"></div>
	</div>
	    <br>
	    <div class="container">
	            <div class="card-panel">

			      <table class="bordered">
			        <thead>
			          <tr>
			              <th>ID Bahan</th>
			              <th>Nama Bahan</th>
			              <th>Tanggal Kadaluarsa</th>
			              <th>Stok</th>
			              <th style="text-align: center; width: 130px;">Aksi</th>
			          </tr>
			        </thead>

			        <tbody id="showBahan">
			          
			        </tbody>
			      </table>
			      <br>
			  </div>
			<br>  
			<!-- Button tambahkan bahan -->
			<div class="center">
				<a class="waves-effect waves-default btn modal-trigger white teal-text" id="tambahBahan">Tambah Bahan</a>
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
		var bahan;
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

	<!-- Datepicker JS -->
	<script type="text/javascript">
		
	  $('.datepicker').pickadate({
    	  selectMonths: true, // Creates a dropdown to control month
    	  selectYears: 2, // Creates a dropdown of 15 years to control year,
    	  today: false,
    	  clear: 'Bersihkan',
    	  close: 'ok',
    	  closeOnSelect: false, // Close upon selecting a date,
    	  format: 'yyyy-mm-dd' 
  	});

	  //CRUD
	  	var bahan;
  		$(function(){
  			showBahan();
  			

  			function showBahan(){
  				$.ajax({
			     	method : "get",
			     	url : '/ci-restserver/index.php/bahan',
			     	dataType : 'json',
			     	success : function(data){
			     		var html = '';
			     		var i;
			     		bahan = data;
			     		for(i=0;i<data.length;i++){
			     			html += 
			     				'<tr>'+
			            			'<td>'+data[i].id_bahan+'</td>'+
			            			'<td>'+data[i].nama_bahan+'</td>'+
			            			'<td>'+data[i].tgl_kadaluarsa+'</td>'+
			            			'<td>'+data[i].stok+' Gr</td>'+
			            			'<td>'+
			            				'<button class="waves-effect waves-teal btn btn-small modal-trigger white teal-text item-ubah" data="'+i+'">Ubah</button>'+
			            				'<button class="waves-effect waves-red btn btn-small modal-trigger white teal-text item-hapus" data="'+i+'">Hapus</button>'+			            	
			            			'</td>'+
			          			'</tr>';
			     		}
			     		$('#showBahan').html(html);

			     	},
			     	error : function(xhr, status, error){
			     		alert(xhr.responseText);
			     	}

			    }); 		
  			}

  			$('#showBahan').on('click','.item-hapus',function(){
  					var index = $(this).attr('data');
  					var id = bahan[index].id_bahan;

  					$('#modalhapusbhn').modal('open');

  					$('#btnHapus').unbind().click(function(){
  						$.ajax({
			              type : 'DELETE',
			              url : '/ci-restserver/index.php/bahan/'+id,
			              dataType : 'json',
			              success : function(response){
			                  $('#modalhapusbhn').modal('close');

			                  if (response.status == 'success' ){
			                  	alert("data berhasil dihapus");
			                  } else {
			                  	alert("data gagal dihapus");
			                  }
			                  showBahan();
			              },
			              error : function(xhr,status,error){
			                alert('Hapus gagal, Periksa Keterikatan dengan makanan');
			              }
			            });

  					});
  			
  			});

  			

  			$('#showBahan').on('click','.item-ubah',function(){
  				var index = $(this).attr('data');
  				var namabahan = bahan[index].nama_bahan;
  				var idbahan = bahan[index].id_bahan;
  				var tglkadaluarsa = bahan[index].tgl_kadaluarsa;
  				var stokbahan = bahan[index].stok;

  				
  				$('#modalubahbahan').modal('open');

  				$('#formUbah #namabahan').val(namabahan);
  				$('#formUbah #idbahan').val(idbahan);
  				$('#formUbah #tglkadaluarsa').val(tglkadaluarsa);
  				$('#formUbah #stokbahan').val(stokbahan);


  				$('#btnUbah').unbind().click(function(){
  					var data = {
  						"id_bahan" : $('#formUbah #idbahan').val(),
  						"nama_bahan" : $('#formUbah #namabahan').val(),
  						"tgl_kadaluarsa" : $('#formUbah #tglkadaluarsa').val(),
  						"stok" : $('#formUbah #stokbahan').val()	
  					}
  					$.ajax({
			            type : 'PUT',
			            data : data,
			            url : '/ci-restserver/index.php/bahan',
			            dataType : 'json',
			            success : function(response){
			                $('#modalubahbahan').modal('close');

			                if (response.status == 'success' ){
			                	alert("data berhasil diedit");
			                } else {
			                  	alert("data gagal diedit");
			                }
			                showBahan();
			            },
			            error : function(xhr,status,error){
			                console.log(xhr.responseText);
			            }
			        });

  				});
  			
  			});

  			$('#tambahBahan').click(function(){
  				$('#modaltambahbahan').modal('open');
  				
  				
  				$('#simpanTambah').unbind().click(function(){
  					var data = $('#formtambahbahan').serialize();

  						$.ajax({
			              type : 'ajax',
			              method : 'post',
			              data : data,
			              url : '/ci-restserver/index.php/bahan',
			              dataType : 'json',
			              success : function(response){
			                  $('#modaltambahbahan').modal('close');

			                  if (response.status == 'success' ){
			                  	alert("Bahan berhasil ditambah");
			                  } else {
			                  	alert("Bahan gagal ditambah");
			                  }
			                  showBahan();
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