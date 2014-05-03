<html>
<head>
<title>ilmukomputer.com</title>
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
</head>
<body>
<p class="padding">
<h1>IlmuKomputer.com</h1>
<h2>Ikatlah Ilmu Dengan Menuliskannya</h2>
<?php
$html = "";
$url = "http://ilmukomputer.org/feed/";
$xml = simplexml_load_file($url);
 
for($i = 0; $i < 5; $i++){
 
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;
 
    $html .= "<a href='$link'><h3>$title</h3></a>";
    $html .= "$description";
    $html .= "<br />$pubDate<hr />";
}
echo $html;
?>
 </p>
 </body>
 </html>
