<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title></title>
</head>

<body>

<?php

if($_POST["username"]=="kamal" && $_POST["password"]=="2002")
{
SESSION_START();
$_SESSION["log.html"]="yes";
echo "you have correct";
header('location:home-page/index.html');
}
else
{
SESSION_START();
$_SESSION["login"]="no";
header('location:login.php');
}
?>

</body>

</html>
