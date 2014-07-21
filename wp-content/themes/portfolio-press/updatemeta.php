<?php
define('WP_USE_THEMES', false);
require('../../../wp-config.php');

$conn = @mysql_connect("localhost", DB_USER,DB_PASSWORD);
if (!$conn){
    die("Fail to connect" . mysql_error());
}

mysql_select_db(DB_NAME, $conn);
mysql_query("set names 'utf8'"); 

$post_id=$_POST["post_id"];
$meta_key=$_POST["meta_key"];
$meta_value=$_POST["meta_value"];

$sql = "SELECT * FROM wp_postmeta where post_id=".$post_id." and meta_key='".$meta_key."';";
echo $sql."<br/>";
$result = mysql_query($sql);
if (mysql_fetch_array($result)) {
  $sql = "update wp_postmeta set meta_value='".$meta_value."' where post_id=".$post_id." and meta_key='".$meta_key."';";
}
else {
  $sql = "insert into wp_postmeta(post_id, meta_key, meta_value) values(".$post_id.", '".$meta_key."', '".$meta_value."');";  
}

echo $sql."<br/>";
if(mysql_query($sql,$conn)){
    echo "update succeed";
} else {
    echo "update failed".mysql_error();
}
?>
