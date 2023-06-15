<?php
session_start();
if(!isset($_SESSION['counter'])){
    $_SESSION['counter']=0;
}
if(!isset($_COOKIE['counter'])){
    setcookie('counter',0,time() + 86400);
}
$_SESSION['counter']++;
setcookie('counter',$_COOKIE['counter']+1,time() + 86400);

echo "Session Counter ".$_SESSION['counter'].'<br>';
echo "Cookie Counter ".$_COOKIE['counter'];

?>
