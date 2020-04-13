<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>

<title>
AXCORA POS new point of sale web based system
</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="main/images/logos.jpg">
  <link href="main/css/new/sb-admin-2.min.css" rel="stylesheet"/>
  <link href="main/css/new/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
</head>
<body class="bg-gradient-primary">

  <div class="container">
<!--<font style=" font:bold 16px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>AXCORA POS</center></font>-->
<center><br/>
<div id="login">
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>

    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                   <img class="img-fluid rounded-circle" src="main/images/AXCORA.gif">
				   <p>FREE POS WEB APP</p>
                  </div>
<form class="form-signin" action="login.php" method="post">
<img class="img-fluid rounded-circle" src="main/images/logos.jpg"><br/>

<p class="lead">Login Area</p>
<div class="input-prepend form-group">
  <input type="username" class="form-control form-control-user add-on" type="text" name="username" Placeholder="Username" required/>
</div>
<div class="input-prepend form-group">
  <input type="password" class="form-control form-control-user add-on" name="password" Placeholder="Password" required/>

</div>
		<div class="qwe"><br/>
		 <button class="btn btn-primary btn-user btn-block" href="dashboard.html" type="submit">Login</button>
</div>

		 </form>
 </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <p><a href="http://www.mesinkasir.asia">www.mesinkasir.asia</a></p>
</body>
  <script src="main/js/new/jquery.min.js"></script>
  <script src="main/js/new/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="main/js/new/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="main/js/new/sb-admin-2.min.js"></script>
</html>