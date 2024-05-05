<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
session_cache_limiter('nocache');
session_start();
header( "Content-Type: text/html; charset=utf-8" );

?>
<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width initial-scale=1.0 minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" name="viewport">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<style>
h3 {
    font-size: 16px;
    border: solid 1px #a0a0a0!important;
    padding: 10px;
    border-radius: 10px;
    background-color: skyblue;
    margin-top: 10px;
}
</style>
</head>
<body>
<h3 style='margin-top:0'>$_GET</h3>
<div style='white-space:pre;margin-top:-30px;'>
<?php
print_r($_GET);
?>
</div>

<h3>$_POST</h3>
<div style='white-space:pre;margin-top:-30px;'>
<?php
print_r($_POST);
?>
</div>

<h3>$_REQUEST</h3>
<div style='white-space:pre;margin-top:-30px;'>
<?php
print_r($_REQUEST);
?>
</div>

<h3>$_SESSION</h3>
<div style='white-space:pre;margin-top:-30px;margin-bottom:100px;'>
<?php
print_r($_SESSION);
?>
</div>

</body>
</html>