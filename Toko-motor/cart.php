<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="home.php">Speed Shop</a></h1>
            <ul>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body style='background-color:	#DCDCDC'>
<center>
	<br/>
	<div style='width: 350px;
	background: #fff;
	margin: 30px auto;
	padding: 30px 20px;
	;'>
	<h3>Pembelian</h3>
	<form method="post" action="halaman_terimakasih.php">
		<table>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="number" name="nama"></td>
			</tr>
				<td>Pembayaran</td>
				<td valign="top"> 
			     <label><input type="checkbox" class="radio" name="bidang" value="Gizi">Gopay</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Gigi">Dana</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Kandungan">ATM</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Virus">Paypal</label><br>
                 <label><input type="checkbox" class="radio" name="bidang" value="Mukjizat">COD</label><br>
			    </td>
			</tr>
            <tr>
				<td>No WA</td>
				<td><input type="number" name="nama"></td>
</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="nama"></td>
			</tr>
				<td><input type="submit" value="submit"><td>
			</tr>		
		</table>
</div>
	</form>
</center>
<center><a href="halaman_user.php"><button>KEMBALI</button></a></center>
</body>
<script type="text/javascript">
	// the selector will match all input controls of type :checkbox
	// and attach a click event handler 
	$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
</html>