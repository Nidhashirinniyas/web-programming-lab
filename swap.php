<html>
<head>
<title>
sample
</title>
</head>
<body>
<?php
$a = 24; $b = 48;
echo "first number=$a<br>"; echo "second number=$b<br>"; echo "<br>";
$c = $a;
$a = $b; $b = $c;
echo "After swapping:<br>";
echo "first number=$a<br>";
echo "second number=$b<br>";
?>
</body>
</html>
