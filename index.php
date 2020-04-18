<html>
<head>
<style>
	#box
	{
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;
	}
	h2
	{
		text-align: center;
	}
	table
	{
		margin:0px auto;
	}
</style>
</head>
<body>
<form align="center" action="index.php" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<table>
<tr>
	<td>
		Enter Amount in USD$:<input type="text" name="amount"><br>
	</td>
</tr>
	
<tr>
<td><center><br>
<input type='submit' name='submit' value="Covert"></center>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{	
$amount = $_POST['amount'];
{
echo "<center><b>Your Converted Amount in INR is:</b><br></center>";
echo "<center>" . $amount*76.52 . "</center>";
}
}
?>
</body>
</html>