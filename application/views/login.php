<!DOCTYPE html>
<html>
<head>
	<title>RestoranAdmin Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">
</head>
<body class="login-page">
	<div class="container login-page">
			<div class="wrap-login col s7">
				<h2 style="margin-bottom: 50px;color: black;text-align: center;font-size: 30px;">Login Warung Broto</h2>
				<!-- <div class="alert alert-danger" style="display: none; "> 
				</div> -->
				<form method="post" action="#">
          <div class="container">
          <div class="row">
  					<div class="input-field s12">
  						<input type="text" class="form-control" id="username" name="username" autocomplete="off" style="color: black;">
              <label for="username">Username</label>
  					</div>
  					<div class="input-field s12">
  						<input id="password" type="password" name="password" autocomplete="new-password" style="color: black;">
              <label for="password">Password</label>
  					</div>
          </div>  
					<div class="register row">
						<label>
							<a href="<?= base_url() ?>/index.php/Register" style="color: #4db6ac">Sign up</a> 
						</label>	
					</div>
					<button type="button" class="btn-login btn  waves-effect btn-info" id="btnLogin" style="width: 100%; margin-bottom: 30px;margin-top: 30px;">Login</button>
				</form>
			</div>
    </div>
	</div>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js "></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
  	
  	<script type="text/javascript">
  		

  		$('.wrap-login #btnLogin').click(function(){
  			var username = $('#username');
  			var password = $('#password');
  			var result = '';

  			if (username.val() == ''){
  				$('#username').parent().addClass('has-error');
  			}else{
  				$('#username').parent().removeClass('has-error');
  				result+= '1';  			}

  			if (password.val() == ''){
  				password.parent().addClass('has-error');
  			}else{
  				password.parent().removeClass('has-error');
  				result+= '2';
  			}

  			if(result == '12'){
  				$.ajax({
  					type : 'ajax',
  					method : 'post',
  					url : '<?= base_url() ?>index.php/Login/cekLogin',
  					data : {username : username.val(), password : password.val()},
  					dataType : 'json',
  					success : function(response){
  						if(response.success){ 
                if (response.user.auth == 1){ 
                      window.location = '<?= base_url() ?>index.php/jadwal';
                } else { 
                      window.location = '<?= base_url() ?>index.php/order';
                } 
                
  						}else {
  							$('.alert').html('Username atau password salah').fadeIn().delay(4000).fadeOut('slow');
  						}
  					},
  					error : function(xhr,status,error){
  						alert(xhr.responseText);
  					}
  				});
  			}
  			
  		});
  	</script>
</body>
</html>