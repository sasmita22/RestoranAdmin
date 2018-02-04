<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama Kasir</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/styleku.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		#action {
			color: black;
			width: 100% !important; 
		}
		#action:hover{
			color: #e0f2f1;
		}
	</style>
</head>
<body>

	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="white">
		    <div class="nav-wrapper">

		 		<span style="">
		        	<a href="<?= base_url() ?>index.php/kasir/" class="button-collapse show-on-large" style="color: #424242; margin-left: 30px;"><i class="material-icons">dashboard</i>
             		</a>
             		<a href="<?= base_url() ?>index.php/kasir/" class="button-collapse show-on-large" style="margin-left: 0px; font-weight: 500; font-size: 20px; color: #00897b;">KASIR warungbroto
             		</a>
             	</span>
	      	
		      	<ul class="right hide-on-med-and-down" style="margin-right: 11px;">
			      	<!-- Dropdown Trigger -->
			      	<li><a href="#!" class="dropdown-button" data-activates="dropdown1" data-beloworigin="true"><i class="material-icons" style="color: #424242;">more_vert</i></a></li>

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

	<!-- Main Content -->
	<div class="container teal darken-1" style="top: 0; margin-bottom: 50px;"><br>
		<h4 style="text-align: center; color: white;"><i class="large material-icons">room_service</i></h4>
	  	<h4 style="text-align: center; color: white;">DAFTAR MEJA</h4><br>
	</div>
	<div class="container">
		<div class="card-panel">
	  	<div class="row" style="margin-top: 20px;">
	  	
	  	<div class="col s5 m12 offset-s1" id="showMeja">
	  		<!-- <?php for ($i = 0; $i<8; $i++){ ?>
		        <div class="col s3 m3 " style="margin-bottom: 20px;">
		          <div class="card " style="background-color: #4db6ac; ">
		            <div class="card-content white-text">
		              <span class="card-title">Meja <?php echo $i+1 ?></span>
		              <p>Total : Rp 300.000</p>
		              <p>status : kosong</p>
		            </div>
		            <div class="card-action col s12">
		              <a href="<?= base_url() ?>index.php/kasir/kasir_page" id="action" class="waves-effect">Bayar</a>
		            </div>
		          </div>
		        </div>
		    <?php } ?>  -->
	    </div> 
	    	
		</div>
	</div>
	</div>

	<br><br>
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
 	 		var datameja;
 	 		showMeja();

 	 		function showMeja(){

 	 			$.ajax({
 	 				method : "get",
 	 				url : "/ci-restserver/index.php/kasir/daftarmeja",
 	 				dataType : "json",
 	 				success : function(data){
 	 					datameja = data;
 	 					var html = '';
 	 					var i;
 	 					console.log(data);

 	 					for (i=0;i<data.length;i++){
 	 						html += 
 	 							'<div class="col s12 m4" style="margin-bottom: 20px;">'+
						          '<div class="card" style="background-color: #757575;">'+
						            '<div class="card-content white-text">'+
						              '<span class="card-title center" style="color: #e0f2f1;"><i class="material-icons">event_seat</i> Meja '+data[i].no_meja+'</span>'+
						              '<p style="margin-top: 30px;">Total&nbsp;&nbsp;&nbsp;&nbsp: Rp '+data[i].total+'</p>';
						              if(data[i].status == 0){
						              	html += '<p>Status&nbsp;&nbsp;: Kosong </p>';
						              }else if(data[i].status == 1){
						              	html += '<p style="color: #26a69a">Status : Terisi </p>';
						              }
						    html += '</div>'+
						            '<div class="card-action waves-effect col s12">'+
						              '<a id="btnBayar" data='+i+' style="color: #e0f2f1;">Bayar</a>'+
						              '<a id="btnOption" style=" color: #e0f2f1;">Kosongkan</a>'+
						            '</div>'+
						          '</div>'+
						        '</div>';
 	 					}
 	 					$('#showMeja').html(html);
 	 				},
 	 				error : function(xhr,status,error){
 	 					alert(xhr.responseText);
 	 				}
 	 			});

			}

			$('#showMeja').on('click','#btnBayar',function(){
 	 				var index = $(this).attr('data');
 	 				//alert(datameja[index].total);

 	 				if(datameja[index].status == 1){
 	 					if(datameja[index].total > 0){
 	 						string_data = JSON.stringify(datameja[index]);
							Cookies.set('datameja',string_data);
							window.location.replace("<?= base_url() ?>/index.php/kasir/kasir_page"); 	 					
						}else{
 	 						alert('belum pesan makanan');
 	 					}
 	 				}else{
 	 					alert('error');
 	 				}
 	 		});
 	 	});
 	</script>
</body>
</html>