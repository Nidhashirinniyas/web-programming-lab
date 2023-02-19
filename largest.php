<html>
<head>
<title>
sample
</title>
</head>
<body>
<?php
function cal( $a , $b )
{
$i = $a;
$j = $b;
function largest( $i , $j)
{
if ( $i > $j){
echo "$i is the largest number<br>";
}
else{
}
echo "$j is largest number<br>";
}
$retval =[ "largest" => largest($a,$b)];
return $retval;
}
$x = 22;
echo "$x<br>";
$y = 45;
echo "$y<br>";
cal($x , $y);
?>
87
</body>
</html>
