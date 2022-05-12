<html>
<head>
<title>Form Feedback</title>
</head>
<body>
<?php #Script handle form

echo "<p> Thank you, <b>".$_POST["name"].
"</b> for the following commenta: <br/>".
$_POST ("commenta")."<p>We wil reply to you at <i>".
$_POST ("email"]." </1></p>";


?>
</body>
</html>