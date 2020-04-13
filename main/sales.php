<!DOCTYPE html>
<html>
<head>
	<!-- js -->			
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

<title>
POS POINT OF SALE
</title>
<?php
	require_once('auth.php');
?>
       
		<link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="images/logos.jpg">
	  <link href="css/new/sb-admin-2.min.css" rel="stylesheet"/>
  <link href="css/new/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css"/>

	<link href="bootstrap-responsive.css" rel="stylesheet">

  
  <link rel="stylesheet" href="css/font-awesome.min.css">

    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	<!-- combosearch box-->	
	
	  <script src="vendors/jquery-1.7.2.min.js"></script>
    <script src="vendors/bootstrap.js"></script>

	
	
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->




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
<body>
<?php include('navfixed.php');?>
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>
<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>">Cash</a>

<a href="../index.php">Logout</a>
<?php
}
if($position=='admin') {
?>
	
<div class="container-fluid">
      <div class="row-fluid">


<?php } ?>				

	
		<div class="contentheader">
<h2 class='display-4 text-center'>POINT OF SALE</h2><br/>
					
<form action="incoming.php" method="post" >
											
<input type="hidden" name="pt" value="<?php echo $_GET['id']; ?>" />
<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
<select name="product" style="width:650px; "class="chzn-select" required>
<option></option>
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM products");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option value="<?php echo $row['product_id'];?>"><?php echo $row['product_code']; ?> - <?php echo $row['gen_name']; ?> - <?php echo $row['product_name']; ?> | Expired: <?php echo $row['expiry_date']; ?></option>
	<?php
				}
			?>
</select>
<input type="number" name="qty" value="1" min="1" placeholder="Qty" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" / required>
<input type="hidden" name="discount" value="" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" />
<input type="hidden" name="date" value="<?php echo date("m/d/y"); ?>" />
<button type="submit" class="btn btn-primary rounded-circle btn-md display-3"> + </button>
</form>
<small>Make sure you have completed the transaction and if you exit the cashier's display, make sure the transaction column is empty
	</small>
<table class="table table-bordered" id="resultTable" data-responsive="table">
	<thead>
		<tr>
			<th class="bg-primary text-white"><p class="lead"> Barcode </p></th>
			<th class="bg-primary text-white"><p class="lead"> Category </p></th>
			<th class="bg-primary text-white"><p class="lead"> Product </p></th>
			<th class="bg-primary text-white"><p class="lead"> Price </p></th>
			<th class="bg-primary text-white"><p class="lead"> Qty </p></th>
			<th class="bg-primary text-white"><p class="lead"> Total </p></th>
			<!--<th> Profit </th>-->
			<th class="bg-primary text-white"><p class="lead"> Action </p></th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				$id=$_GET['invoice'];
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM sales_order WHERE invoice= :userid");
				$result->bindParam(':userid', $id);
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td hidden><?php echo $row['product']; ?></td>
			<td><?php echo $row['product_code']; ?></td>
			<td><?php echo $row['gen_name']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td>
			
			<?php
			$ppp=$row['price'];
			echo formatMoney($ppp, true);
			?>
			</td>
			<td><?php echo $row['qty']; ?></td>
			<td>
			<?php
			$dfdf=$row['amount'];
			echo formatMoney($dfdf, true);
			?>
			</td>
<!--<td>
			<?php
			$profit=$row['profit'];
			echo formatMoney($profit, true);
			?>
			</td>-->
			<td class='text-center' width="90"><a href="delete.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_GET['id']; ?>&qty=<?php echo $row['qty'];?>&code=<?php echo $row['product'];?>" class="btn rounded-circle btn-sm btn-center btn-danger"> x </a></td>
			</tr>
			<?php
				}
			?>
			<tr>
			<th> </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<th>  </th>
			<td>Total Sale: </td>
			<!--<td> Total Profit: </td>-->
			<th>  </th>
		</tr>
			<tr>
				<th colspan="5"><strong style="font-size: 12px; color: #222222;"><p class="lead">Grand Total :</p></strong></th>
				<td class="bg-warning text-white" colspan="1"><strong style="font-size: 12px; color: #222222;"><p class="lead">
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
				$sdsd=$_GET['invoice'];
				$resultas = $db->prepare("SELECT sum(amount) FROM sales_order WHERE invoice= :a");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['sum(amount)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</p></strong></td>
	<!--<td colspan="1"><strong style="font-size: 12px; color: #222222;">
			<?php 
				$resulta = $db->prepare("SELECT sum(profit) FROM sales_order WHERE invoice= :b");
				$resulta->bindParam(':b', $sdsd);
				$resulta->execute();
				for($i=0; $qwe = $resulta->fetch(); $i++){
				$asd=$qwe['sum(profit)'];
				echo formatMoney($asd, true);
				}
				?>
		
				</td>-->
		
				<th></th>
			</tr>
		
	</tbody>
</table><br>
<a rel="facebox" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&totalprof=<?php echo $asd ?>&cashier=<?php echo $_SESSION['SESS_FIRST_NAME']?>"><button class="btn btn-primary btn-large btn-block"><strong><p class="lead"><strong> PAYMENT </strong></p></strong></button></a>
<div class="clearfix"></div>
</div>
</div>
</div>
</body>
<?php include('footer.php');?>
</html>