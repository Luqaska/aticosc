<?php session_start();
if(!isset($_SESSION["logged"])){
  if(isset($_POST["code"])){
    if($_POST["code"]=="scraft7769"){
      $_SESSION["logged"]=true;
    }else{
      header("?error");
    }
  }else{
    die('<!DOCTYPE html><html><body><form method="POST"><input type="password" name="code"><input type="submit"><br>(Es la misma que SCCJ)</form></body></html>');
  }
}else{
$pages_nav = [
  ["Home", "index.php"]
]; ?>
<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Lucas" />
<link rel="icon" href="sarpado.png" />
<title><?= $p ?> | ATICO.0rg.us</title>
<style>

/* Body */
body {
	text-align: justify;
	background: #036c96;
	color: white;
	margin: 10px 22%;
	font-family: sans-serif;
}

/* Header */
header, nav, main {
	border: solid 1px white;
}
header {
	border-radius: 10px 10px 0 0;
	background: #686868;
	color: white;
	padding: 1px 30px;
	font-family: serif;
}
header a {
	color: white;
	text-decoration: none;
}

/* Navbar */
nav {
	background: black;
	padding: 0 10px;
}
#sarpado {
	image-rendering: pixelated;
	width: 30px;
	height: auto;
	margin: 0 8px 0 0;
}
nav a {
	text-decoration: none;
	color: white;
	margin: 0 2px 0 0;
	padding: 1px 5px;
}
nav a:hover {
	color: black;
	background: white;
}
nav a:active {
	color: white;
	background: orange;
}
nav, main {
	margin: 10px 0;
}

/* Main */
main {
	background: black;
	padding: 10px;
}

/* Footer */
footer {
	background: white;
	color: black;
	border-radius: 0 0 10px 10px;
	padding: 3px 10px;
}

/* Mobile */
@media only screen and (max-width: 650px) {
	body {
		margin: 10px 11%;
	}
}
</style>
</head>
<body>
<header>
	<h1><a href="index.php"><img src="sarpado.png" id="sarpado" /><span id="text">ATICO<span style="font-size:medium">.0rg.us</span></span></a></h1>
</header>
<nav>
<?php foreach($pages_nav as $element){
	if($element[0] == $p){
		$b = ['<b class="active">', '</b>'];
	}else{
		$b = ['', ''];
	}
	echo "$b[0]<a href=\"$element[1]\">$element[0]</a>$b[1]";
} ?>
</nav>
<?php }
