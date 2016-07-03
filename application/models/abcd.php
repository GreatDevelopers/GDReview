 <?php 
class abcd {

function abc($id=null){

$link = mysql_connect('localhost', 'ucc', 'uCC');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('ucc', $link);
if(!is_null($id)){
$cc=mysql_fetch_array(mysql_query("select name from conf_name where id=$id"));
mysql_close($link);
//echo "no ass";
return $cc;
}
else { //echo "ass";
}
mysql_close($link);

}
}
?>
