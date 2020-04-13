<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditproduct.php" method="post">
<h4 class="text-center">Edit Product</h4>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Barcode  </span><input style="width:265px;" type="text" name="code" value="<?php echo $row['product_code']; ?>" Required/><br>
<span>Category </span><input style="width:265px;" type="text" name="gen" value="<?php echo $row['gen_name']; ?>" /><br>
<span>Product </span><textarea style="width:265px;" name="name" ><?php echo $row['product_name']; ?> </textarea><br>
<span>Reception </span><input style="width:265px;" type	="date" name="date_arrival" value="<?php echo $row['date_arrival']; ?>" /><br>
<span>Expiry Date </span><input style="width:265px;" typ="date" name="exdate" value="<?php echo $row['expiry_date']; ?>" /><br>
<span>Sell Pirce </span><input style="width:265px;" type="text" id="txt1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum();" Required/><br>
<span>Buy Price </span><input style="width:265px;" type="text" id="txt2" name="o_price" value="<?php echo $row['o_price']; ?>" onkeyup="sum();" Required/><br>
<span>Profit </span><input style="width:265px;" type="text" id="txt3" name="profit" value="<?php echo $row['profit']; ?>" readonly><br>
<span>Supplier </span>
<select name="supplier">
	<option><?php echo $row['supplier']; ?></option>
	<?php
	$results = $db->prepare("SELECT * FROM supliers");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>Stock : </span><input type="number" style="width:265px;" min="0" name="qty" value="<?php echo $row['qty']; ?>" /><br>
<!--<span>Quantity</span><input type="number" style="width:265px;" min="0" name="sold" value="<?php echo $row['qty_sold']; ?>" /><br>-->

<hr>
<button class="btn btn-primary btn-block"> Save</button>

</div>
</form>
<?php
}
?>