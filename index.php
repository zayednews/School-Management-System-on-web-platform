<?php
?>
<!DOCTYPE html>
<html>
<head>
<title >SMS</title>
<meta charset="UTF-8">
<style>
span { width:100%; display:inline-block; }
span.align-right { text-align:right; }

span a { font-size:16px; }
h1 {
    background: yellow; 
    transition: background .2s; 
}
</style>
<script type="text/javascript">
var colors = ['green', 'orange', 'yellow'];
var active = 0;
setInterval(function(){
    document.querySelector('h1').style.background = colors[active];
    active++;
    if (active == colors.length) active = 0;
}, 5000);
</script >
</head>
<body>

<h1 style="text-align:center;color:black"><b>School Management System</b></h1>

<span class="align-right">
<a href="login.php"><b>LOGIN</b></a>
</span>

 <img src="sms.png" height="820" width="1720"> 
</body>
</html>