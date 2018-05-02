<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="public/css/session.css" />
            <!-- Bootstrap core CSS -->
            <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
            <!-- Custom fonts for this template -->
            <link rel="stylesheet" href="public/vendor/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="public/vendor/simple-line-icons/css/simple-line-icons.css">
            <link href="public/vendor/css/lato.css" rel="stylesheet">
     <link href="public/vendor/css/catamaran.css" rel="stylesheet">
     <link href="public/vendor/css/muli.css" rel="stylesheet">
     <link id ="" rel="stylesheet" href="public/css/sidenav.css">


            <script src="public/vendor/jquery/jquery.min.js"></script>

  <title>Form</title>
    <link href="public/vendor/css/new-age.min.css" rel="stylesheet">
</head>
<body style="background-color: #f6f6f6; background-image: url('public/img/login.jpg');" >
<?php
          require 'nav.php';
    ?>
    
    <div id="page-content-wrapper container-fluid" style="height:100%;"> 
    <div style=" color: black; text-align: center" class="container2" >
    
 
     
        <div class="contentHolder">
		<form action="contactoadmin.php" method="post" class="registration" id="registration">
			<div style="background-color:#0375B4; opacity: 0.9; color: white"><h1>Sign in</h1></div>
                      
			<label for="username">
				<span>Username</span>

				<input name="username" type="text" id="username" minlength="1" required>

				<ul class="input-requirements">
				</ul>
			</label>

			<label for="password">
				<span>Password</span>

				<input name="password" type="password" id="password" minlength="1" required>

				<ul class="input-requirements">
				</ul>
			</label>

			<br>

			<input type="submit" name="submit" value="Sign in">

		</form>
	</div>
         
         
    
  <br>
  
    
  <br>
  </div>
  </div>
    <!-- Bootstrap core JavaScript -->
   
    <div id="scripts">

<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="public/scripts/animation.js" charset="utf-8"></script>
<script src="public/vendor/jquery.scrollTo-2.1.2/jquery.scrollTo.min.js"></script>

<!-- Custom scripts for this template -->
<script src="public/vendor/js/new-age.min.js"></script>
<script src="public/scripts/script.js"></script>
<!-- <script src="public/scripts/pushState.js" charset="utf-8"></script> -->
<script src="public/scripts/scrollTo.js"></script>
<script src="public/scripts/animateNav.js" charset="utf-8"></script>
<script src="public/scripts/screen.js"></script>
<script src="public/scripts/sidenav.js"></script>
    </div>
    

    <?php
          require 'footer.php';
        ?>
</body>
     
</html>
