<?
session_name("rutorrent");
session_start();
unset($_SESSION['login']);
//eval(getPluginConf("login"));
$me = "";
//$jResult .= "plugin.me = '';";
$ret=$_GET["return"];
header("Location: $ret");
?>
