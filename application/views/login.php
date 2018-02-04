<?php 
  if(isset($_SESSION['username'])and isset($_SESSION['status'])){
    if($_SESSION['username'] =='admin'){
      redirect(base_url('index.php/makanan'));
    }elseif ($_SESSION['username'] =='kasir') {
      redirect(base_url('index.php/kasir'));
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>RestoranAdmin Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="login-page">
	<div class="container login-page">
			<div class="wrap-login col s7">
        <h2 style="color: black;text-align: center;font-size: 30px;"><i class="medium material-icons">restaurant_menu</i></h2>
				<h2 style="margin-bottom: 50px;color: black;text-align: center;font-size: 30px;">Warung Broto</h2>
				<!-- <div class="alert alert-danger" style="display: none; "> 
				</div> -->
        <?php 
          if(isset($_SESSION['fail'])){
            echo "<p style='color : red; margin-left: 50px;'> Username atau password salah</p>";
            $this->session->unset_userdata('fail');
          }
         ?>
        
				<form method="POST" action="<?= base_url() ?>index.php/login/validate" id="validateForm">
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
					<input type="submit" class="btn" style="width: 100%; margin-bottom: 30px;margin-top: 30px;" value="Login">
				</form>
			</div>
    </div>
	</div>



    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js "></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
</body>
</html>