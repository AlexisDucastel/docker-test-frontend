<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<title>docker-test-frontend</title>
<style>
	h2,pre { color: silver; }
</style>
</head>
<body>
  
<h1>Hello there !</h1>
<p>
<?php
echo 'This is '.$_SERVER['SERVER_NAME'].' at '.$_SERVER['SERVER_ADDR'].':'.$_SERVER['SERVER_PORT']."<br>";
echo 'I am running on '.$_SERVER['SERVER_SOFTWARE'].' with PHP version '.phpversion()."<br>";
echo "Are you really coming from ".$_SERVER['REMOTE_ADDR'].' ?<br>';
?>
</p>

<h2>GET info</h2>
<pre>
<?php print_r($_GET); ?>
</pre>

<h2>POST info</h2>
<pre>
<?php print_r($_POST); ?>
</pre>

<h2>Server info</h2>
<pre>
<?php print_r($_SERVER); ?>
</pre>
</body>
</html>