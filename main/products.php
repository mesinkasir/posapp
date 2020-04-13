<html>
<head>
<title>
PRODUCT BASED
</title>

<?php 
require_once('auth.php');
?>
     <link rel="shortcut icon" href="images/logos.jpg">
	  <link href="css/new/sb-admin-2.min.css" rel="stylesheet"/>
  <link href="css/new/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css"/>

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
 
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
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
</head>
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

<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt22').value = result;				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var txtSecondNumberValue = document.getElementById('txt33').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt55').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt4').value;
			 var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt5').value = result;
				}
			
        }
</script>


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


<?php include('navfixed.php');?>
<div class="container-fluid">
   
			

<a  href="addproduct.php" class="btn btn-primary btn-lg" style="float: left;">Add Produk</a>
<br/><br/>
<?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM products ORDER BY qty_sold DESC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>

				<div style="text-align:center;">
			Total Products:  <?php echo $rowcount;?>
			</div>
			




<input type="text" class='rounded' name="filter" value="" id="filter" placeholder="Scan barcode / search produk" autocomplete="off" />
<br><br>

<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th class="bg-primary text-white" width="12%"> Barcode </th>
			<th class="bg-primary text-white" width="10%"> Category </th>
			<th class="bg-primary text-white" width="16%"> Product </th>
			<th class="bg-primary text-white" width="5%"> Action </th>
		</tr>
	</thead>
	<tbody>
		
			<?php
			function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.0f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				include('../connect.php');
				$result = $db->prepare("SELECT *, price * qty as total FROM products ORDER BY product_id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				$total=$row['total'];
				$availableqty=$row['qty'];
				if ($availableqty < 10) {
				echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
				}
				else {
				echo '<tr class="record">';
				}
			?>
		

			<td><?php echo $row['product_code']; ?></td>
			<td><?php echo $row['gen_name']; ?></td>
			<td><?php echo $row['product_name']; ?></td>

			</td>			<td><a rel="facebox" title="Edit product" href="editproduct.php?id=<?php echo $row['product_id']; ?>"><button class="btn btn-primary">Edit / Update </button> </a>
			</td>
			</tr>
			<?php
				}
			?>
		
		
		
	</tbody>
</table>
</div>
</div>


<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Anda yakin akan menghapus produk ini!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php');?>

</html>