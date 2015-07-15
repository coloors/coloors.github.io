<?php

$file = 'loader.exe';


$con = mysql_connect('localhost','toolboox_dbusr','xU6edaSe');

if (!$con) {
    die('No se pudo conectar freegao0: ' . mysql_error());
}

$db_selected = mysql_select_db('toolboox_bo', $con);
if (!$db_selected) {
    die ('No se puede usar portales_portals: ' . mysql_error());
}
mysql_query("set names 'utf8'");


$sql = "select distinct(uri) as uri from software where idPortal != 63";

$con = mysql_query($sql);
while($data = mysql_fetch_array($con))
{

 if (!copy($file, $data['uri'].'.exe')) {
    echo '<b>' .$data['uri'].' - file </b> <br>';
 }else{
      echo $data['uri'].' - ok <br>';
 }
  



}
