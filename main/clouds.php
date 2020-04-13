<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
ABOUT AXCORAPOS
</title>
    <link rel="shortcut icon" href="images/logos.jpg">
	  <link href="css/new/sb-admin-2.min.css" rel="stylesheet"/>
  <link href="css/new/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css"/>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<?php
	require_once('auth.php');
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='HC-'.createRandomPassword();
?>

 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	
</head>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>

<a href="../index.php">Logout</a>
<?php
}
if($position=='admin') {
?>
	


	<div class="span10">
<main>
<div class="masthead-followup row m-0 border border-white text-center lead">
  <div class="col-12 col-md-12 p-3 p-md-3">
<h3 class="p-3 md-3">LEST GET START</h3>
<p>Upgrade online clouds system with free website domain name, hosting, and you pos clouds app.</p>
  </div>
  <div class="col-12 col-md-3 p-3 p-md-5">
<h3>ORDER</h3>
<img class="img-fluid" src="images/MON.png"/>
<p>order / upgrade to online app</p>
  </div>
  <div class="col-12 col-md-3 p-3 p-md-5">
<h3>INSTALL</h3>
<img class="img-fluid" src="images/dab.png"/>
<p>Progress installation app</p>
</div>
<div class="col-12 col-md-3 p-3 p-md-5">
<h3>ONLINE</h3>
<img class="img-fluid" src="images/oshop.png"/>
<p>Ready to use axcorapos app</p>
</div>
<div class="col-12 col-md-3 p-3 p-md-5">
<h3>BONUS</h3>
<img class="img-fluid" src="images/dash.png"/>
<p>Develope & Design website</p>
</div>
<div class="col-12 col-md-12 p-3 p-md-3">
<p>All in one clouds solutions with axcorapos technology , creative website landing page and clouds app pos , no need installation in you device because this app install in clouds based so you can accsess app with simple solutions just open web browser and visit you app with other device like android iphone and windows or another os. support with barcode and cloud print for print out this is new generation point of sale.</p>
<a class="btn btn-rounded-pill btn-danger" href="images/AXCORAPOS Eng.pdf"><img src="images/pdf.png" width="25"/>Download E-Catalog</a>
</div>
<div class="col-12 col-md-12 p-3 p-md-5 bg-light text-secondary">
<h3 class="border p-3 md-5">Clouds features</h3>
<p>With upgrade clouds web based you have a special features like supplier , purchase order , inventori stock management , report detail ,backoffice for update website and more.</p>
<hr/><p>Special for clouds web app</p>
<img class="img-fluid shadow rounded" src="images/supplier based.png"/>
<p>Supplier based for databased supplier</p><hr/>
<img class="img-fluid shadow rounded" src="images/add supplier.png"/>
<p>Create new supplier dbased</p><hr/>
<img class="img-fluid shadow rounded" src="images/purchase order.png"/>
<p>Create purchase order</p><hr/>
<img class="img-fluid shadow rounded" src="images/delete data.png"/>
<p>Delete data & Transaction menu</p><hr/>
<img class="img-fluid shadow rounded" src="images/inventori management.png"/>
<p>Inventori stock management & report</p><hr/>
<img class="img-fluid shadow rounded" src="images/reportss.png"/>
<p>Income profit report</p><hr/>
<img class="img-fluid shadow rounded" src="images/incomeprofit.png"/>
<p>Income profit report list</p><hr/>
<img class="img-fluid shadow rounded" src="images/profit by periode.png"/>
<p>Income profit report by periode</p><hr/>
<img class="img-fluid shadow rounded" src="images/office.png"/>
<p>Backoffice admin system</p>
<hr/>
Interest with this clouds app ??<br/>
<a class="btn btn-rounded-pill btn-outline-primary" href="images/AXCORAPOS Eng.pdf"><img src="images/lapbeli.png" width="25"/>Order Now !!</a>

</div>
<div class="col-12 col-md-12 p-3 p-md-3 bg-dark text-white">
<div class="border p-3 md-5">
<h3>Contact Us</h3>
<p>If you need more information for this app you can contact us click the icon link in bottom.</p>
<p><a class="btn btn-danger" href="mailto:hockeycorpmarketing@gmail.com"><img src="images/mail.png" width="25"/> Sent email</a> or 
<a class="btn btn-success" href="https://wa.me/6285646104747"><img src="images/wa.png" width="30"/> WhatsApp Now</a></p>
</div>
</div>

</div>
</main>

  
  <?php
}
?>

<div class="clearfix"></div>
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<?php include('footer.php'); ?>
</body>
</html>
