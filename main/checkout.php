<html>
<head>
<title>PEMBAYARAN</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	  <link href="css/new/sb-admin-2.min.css" rel="stylesheet"/>
  <link href="css/new/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css"/>
      <link href="css/bootstrap-responsive.css" rel="stylesheet">
<script>
function suggest(inputString){
		if(inputString.length == 0) {
			$('#suggestions').fadeOut();
		} else {
		$('#country').addClass('load');
			$.post("autosuggestname.php", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					$('#suggestions').fadeIn();
					$('#suggestionsList').html(data);
					$('#country').removeClass('load');
				}
			});
		}
	}

	function fill(thisValue) {
		$('#country').val(thisValue);
		setTimeout("$('#suggestions').fadeOut();", 600);
	}

</script>

	
</head>
<body onLoad="document.getElementById('country').focus();" class="text-center">
<form action="savesales.php" method="post">
<div id="ac"><br>
<h4 class='text-primary'>PAYMENT </h4><hr>
<input type="hidden" name="date" value="<?php echo date("m/d/y"); ?>" />
<input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
<input type="hidden" name="amount" value="<?php echo $_GET['total']; ?>" />
<input type="hidden" name="ptype" value="<?php echo $_GET['pt']; ?>" />
<input type="hidden" name="cashier" value="<?php echo $_GET['cashier']; ?>" />
<input type="hidden" name="profit" value="<?php echo $_GET['totalprof']; ?>" />

<input type="text" size="25" value="" name="cname" id="country" onkeyup="suggest(this.value);" onblur="fill();" class="rounded" autocomplete="on" placeholder="Customer/Note" style="width: 350px; height:35px;  margin-bottom: 15px;" />
     <br><br>
      <div class="suggestionsBox" id="suggestions" style="display: none;">
        <div class="suggestionList" id="suggestionsList"> &nbsp; </div>
      </div>
<?php
$asas=$_GET['pt'];
if($asas=='credit') {
?>Due Date: <input type="date" name="due" placeholder="Kembalian"/><br><br>
<?php
}
if($asas=='cash') {
?>

<input type="number" class='rounded' name="cash" placeholder="Input Payment" style="width: 350px; height:35px;  margin-bottom: 15px;"  required/><br><br>
<?php
}
?><button class="btn btn-primary btn-block btn-lg"> PROCESS </button><br/>

</div>
</form>
</body>
</html>