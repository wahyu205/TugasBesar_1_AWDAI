<html>
<<<<<<< HEAD
<head><title>TugasBesar_1_awdai</title>
=======
<head><title>TUGAS BESAR WEB SERVICE A.W.D.A.I.</title>
>>>>>>> b1e373d18e34d971de89bb4c9e6c5b9a4344cc0c
<style>
body
{
background-image:url('');
background-repeat:no-repeat;
margin-right:80px;
}
</style>
<style>
a:link {color:#DC6503;}    /* unvisited link */
a:visited {color:#612915;} /* visited link */
a:hover {color:#612915;}   /* mouse over link */
a:active {color:#F9E4C8;}  /* selected link */
</style>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="jquery-ui.css" />
    <script src="jquery-1.8.3.js"></script>
    <script src="jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script>
    $(function() {
        $( "#menu" ).menu();
    });
    </script>
    <style>
    .ui-menu { width: 150px; }
    </style>
</head>
<body>
<table align='center' width='900' border='0'>
   <tr>
       	<td colspan='2' height='200' align='center' valign='midlle' background="header.png"></td>
   </tr>
   <tr height='400'>
     	<td wight='250' valign='top' bgcolor='#faf9f5'>
       	<h3>Menu</h3>
       <table>
            <tr>
				<td>
				<ul id="menu">
					<li class="ui-state-disabled"><a href="#">Menu</a></li>
					<li><a href="../ws_xml/index.php">Home</a></li>
					<li>
						<a href="#">Akademik</a>
							<ul>
								<li><a href="?bab=1">UNSIL</a></li>
								<li><a href="?bab=2">Fatek UNSIL</a></li>
								<li><a href="?bab=3">Informatika UNSIL</a></li>
								<li><a href="?bab=4">Ilmu Komputer</a></li>
							</ul>
					</li>
					<li>
						<a href="#">Berita</a>
					<ul>
					<li>
						<a href="?bab=6">Sport</a>
					</li>
					<li>
						<a href="?bab=7">Mancanegara</a>
					</ul>
					</li>
					<li><a href="#">Contact</a>
						<ul>
							<li><a href="https://www.facebook.com/zNDREz">Andre</a></li>
							<li><a href="https://www.facebook.com/wahzuzumy">Wahyu</a></li>
							<li><a href="https://www.facebook.com/dezuli">Dede</a></li>
							<li><a href="https://www.facebook.com/Dithya.Prisdiansyah">Aditya</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100000121856039&fref=grp_mmbr_list">Iis</a></li>
						</ul>
					</li>
				</ul>
				</td>
			</tr>
        	</tr>
       </table>
    </td>
    <td width='650' valign='top' bgcolor="#ffffff">
           <?php
			 $bab=isset($_GET['bab'])?($_GET['bab']):'';
			 switch ($bab){
			 case 1 :
			 		include 'unsil.php';
					break;
			 case 2 :
			  		include 'fatek.php';
					break;
			 case 3 :
			  		include 'informatika.php';
					break;
			 case 4 :
			  		include 'ilmukomputer.php';
					break;
			 case 5 :
			  		include '#';
					break;				
			 case 6 :
			  		include 'sport.php';
					break;
			 case 7 :
			  		include 'mancanegara.php';
					break;			
			 case 8 :
			  		include '#';
					break;
			 case 9 :
			  		include 'andre.php';
					break;
			 case 10 :
			  		include 'wahyu.php';
					break;
			 case 11 :
			  		include 'dede.php';
					break;					
			 case 12 :
			  		include 'aditya.php';
					break;			
			 case 13 :
			  		include 'iis.php';
					break;
					
			 }
			 if (!$bab){
			 include 'home.php';
			 }
			  ?>  

    
    </td>
  </tr>
 <tr bgcolor='#faf9f5'>
  <td colspan='2' bgcolor="#db6003"><p align='center'>
   <b>Web ini di Desain oleh Andre, Wahyu, Dede, Aditya, Iis.</b>
   <br>Copyright &copy;2014</br></td>
 </tr>
</table>
 </body> 
</html>
