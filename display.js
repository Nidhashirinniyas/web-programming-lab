<html>
<body>
<img onmouseover="bigImg(this)" onmouseout="normalImg(this)"
border="0" src="flower.jpeg" alt="flower" width="350" height="300">
<p>The function bigImg() is triggered when the user moves the mouse
pointer overthe image.</p>
<p>The function normalImg() is triggered when the mouse pointer is
moved out of the image.</p> <script> function bigImg(x) {
x.style.height = "64px";
x.style.width = "64px";
} function normalImg(x)
{ x.style.height =
"32px";
x.style.width = "32px";
}
</script>
</body>
</html>
