<html>
<head>
<title>
sample
</title>
</head>
<body>
<?php $a = "112211";
echo "original number is:$a<br>";
if ( $a == strrev($a) )
{
echo "the given number is palindromic";
}
else
{
echo "the given number is not palindromic";
}
?>
</body>
</html>
