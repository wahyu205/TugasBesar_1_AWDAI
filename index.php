<html>
<head><title>membuat dan menampilkan layout dengan tabel</title>
<style>
body
{
background-image:url('background.jpg');
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
           		<td  background=''><a href='../ws_xml/index.php'>Home</a></td>
         	</tr>
         	<tr>
           		<td background=''><a href='?bab=1'>Dashboard Baris_xml</a></td>
         	</tr>         	
         	<tr>
           		<td background=''><a href='?bab=2'>Dashboard Baris_db</a></td>
        		</tr>
        	   <tr>
           		<td background=''><a href='?bab=3'>Dashboard Batang_xml</a></td>
         	</tr>
         	<tr>
           		<td background=''><a href='?bab=4'>Dashboard Batang_db</a></td>
           	<tr>
           		<td background=''><a href='?bab=5'>Dashboard Lingkaran_xml</a></td>
         	</tr>
         	<tr>
           		<td><a href='?bab=6'>Dashboard lingkaran_db</a></td>
        		</tr>
        		<tr>
           		<td><a href='?bab=7'>Counter Waktu</a></td>
        		</tr>
        	</tr>
       </table>
    </td>
    <td width='650' valign='top' bgcolor="#ffffff">
           <?php
			 $bab=isset($_GET['bab'])?($_GET['bab']):'';
			 switch ($bab){
			 case 1 :
			 		include 'baris_xml.html';
					break;
			 case 2 :
			  		include 'baris_db.php';
					break;
			 case 3 :
			  		include 'batang_xml.html';
					break;
			 case 4 :
			  		include 'batang_db.php';
					break;
			 case 5 :
			  		include 'lingkaran_xml.html';
					break;
				
			 case 6 :
			  		include 'lingkaran_db.php';
					break;
			 case 7 :
			  		include 'counter.php';
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
