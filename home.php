<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Home</title>
<style>
p.padding
{
padding-top:25px;
padding-bottom:25px;
padding-right:50px;
padding-left:50px;
color:#612915;
}
</style>

	<style type="text/css">
	@import "jquery.countdown.css";
	#defaultCountdown { width: 240px; height: 45px; }
	#defaultCountUp { width: 240px; height: 45px; }
	</style>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.countdown.js"></script>
	<script type="text/javascript">
<!-- austDay.getFullYear() menghasilkan tahun saat ini ; austDay.getFullYear() +1 menghasilkan tahun depan,misal 2013+1 =2014  -->
<!--0 menghasilkan bulan pertama-->
<!--1 menghasilkan hari pertama-->
	$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 0, 4, 5);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
	});
	</script>
		<script type="text/javascript">
<!-- austDay.getFullYear() menghasilkan tahun saat ini ; misal 2013 -->
<!--0 merupakan bulan pertama,1 merupakan hari pertama-->
	$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear(), 4 ,0);
	$('#defaultCountUp').countdown({since: austDay});
	$('#year').text(austDay.getFullYear());
	});
	</script>
</head>
<body>
<p class="padding">
	<center>
	<font color="#db6003"><h1>Tugas Besar Layanan Web</h1></font>
	<font color="#db6003"><h3>Selamat datang di Web kami. Web ini di susun untuk memenuhi Tugas Besar Layanan Web.<br /></h3></font>
	<table align="center" border=0>
	<tr>
	<td>117006202</td><td>Andre Rizkiana Wandira</td>
	</tr>
	<tr>
	<td>117006205</td><td>Wahyu Kartika Hadi</td>
	</tr>
	<tr>
	<td>117006206</td><td>Dede Zuliana</td>
	</tr>
	<tr>
	<td>117006215</td><td>Aditya Bayu Pradana</td>
	</tr>
	<tr>
	<td>117006219</td><td>Iis Uswatun Hasanah</td>
	</tr>
	</table>
</p>
<br>
	<h3>Counter</h3>
	<h4>Batas Pengumpulan Tugas:</h4>
	<div id="defaultCountdown"></div>
	<h4>Counter ini dibuat sejak:</h4>
	<div id="defaultCountUp"></div>
</body>
</html>
