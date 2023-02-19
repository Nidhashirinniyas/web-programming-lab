<html>
<head>
<title>
sample
</title>
</head>
<body>
<?php
$num = 360;
echo "Number = $num<br>";
$total = 0;
$x=$num;
while ( $x != 0 )
{
$rem = $x % 10;
$total = $total + $rem*$rem*$rem;
$x = $x/10;
}
if ( $num == $total )
{
echo "The given number is armstrong<br>";
}
else
{
echo "the given number is not armstrong<br>";
}
?>
</body>
</html>

