<!DOCTYPE html>
<html>
<head> 
<title>BUS A updator</title>
<link rel='stylesheet' href='location updator.css'>
</head>
<body>

<div id="marquee">
	<img src="2.png" height="150px">
	</div>
	<p class="heading"><strong>Route and code Of Bus No. A</strong></p>
<br>
<br>

<table align="left">
		<tr>
			<th>Name</th>
			<th>code</th>
		</tr>
		<tr>
			<td>Master Canteen</td>
			<td>MS</td>
		</tr>
		<tr>
			<td>Keshri Talkies</td>
			<td>KT</td>
		</tr>
		<tr>
			<td>Acharya Vihar</td>
			<td>AV</td>
		</tr>
		<tr>
			<td>Jaydev Vihar</td>
			<td>JV</td>
		</tr>
		<tr>
			<td>Nayapalli</td>
			<td>NY</td>
		</tr>
		<tr>
			<td>Barmunda Bus stand</td>
			<td>BD</td>
		</tr>
		<tr>
			<td>Khandagiri</td>
			<td>KH</td>
		</tr>
		<tr>
			<td>Kaling Vihar</td>
			<td>KV</td>
		</tr>
		<tr>
			<td>GITA college chowk</td>
			<td>GITA</td>
		</tr>
		<tr>
			<td>Janla</td>
			<td>JN</td>
		</tr>
		<tr>
			<td>Gangapada</td>
			<td>GP</td>
		</tr>
		<tr>
			<td>Khordha</td>
			<td>KD</td>
		</tr>	
	</table>


<div class="container">
<img src="logo.png" >
<form method="post" align="right">
<div class="font-input">
<input type="text" name="current" placeholder="Enter Current Stop">
</div>
<div class="font-input">
<input type="text" name="next" placeholder="Enter next Stoppage">
</div>
<div class="font-input">
<a href="map.html">
<input type="submit" onclick="alert('location updated')" value="submit" class="btn-update">
</a>
</div>
</form>

</body>
</html>

<?php

mysql_connect("localhost","root","your_password");
mysql_select_db('location');

if(isset($_POST['submit'])){
	$c = $_POST['current'];
	$n = $_POST['next'];
	
	$query = "insert into locationpage (current,next) values ('$c','$n')";
	
	if(mysql_query($query)){
		
	}
}
?>