<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama Kasir</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
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
	<ul id="dropdown1" class="dropdown-content ">
	  <li ><a href="#!" >Logout</a></li>
	</ul>
	 <nav class="white">
	    <div class="nav-wrapper">
	    	<ul>
	    		<li><a href="#" class="brand-logo" style="color: #4db6ac; margin-left: 20px; font-size: 25px;">WarungBroto</a></li>
	    	</ul>    	
	    	
	      	
	      	<ul class="right hide-on-med-and-down">
		      	<!-- Dropdown Trigger -->
		      	<li><a href="#!" class="dropdown-button" data-activates="dropdown1" data-beloworigin="true"><i class="material-icons" style="color: #4db6ac;">more_vert</i></a></li>
		   	</ul>
	    </div>
	  </nav>
	  <div class="row" style="margin-top: 60px;">
	  		<h4 style="text-align: center;color: rgb(77, 182, 172);">Daftar Meja</h4>
	  </div>

	  

	  <div class="row" style="margin-top: 60px;">
	  	
	  	<div class="col s8 offset-s2" id="showMeja">
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
 	 							'<div class="col s3 m3 " style="margin-bottom: 20px;">'+
						          '<div class="card " style="background-color: #4db6ac; ">'+
						            '<div class="card-content white-text">'+
						              '<span class="card-title">Meja '+data[i].no_meja+'</span>'+
						              '<p>Total : Rp '+data[i].total+'</p>';
						              if(data[i].status == 0){
						              	html += '<p>status : kosong </p>';
						              }else if(data[i].status == 1){
						              	html += '<p>status : isi </p>';
						              }
						    html += '</div>'+
						            '<div class="card-action waves-effect col s12">'+
						              '<a id="btnBayar" data='+i+'>Bayar</a>'+
						              '<a id="btnOption">Option</a>'+
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