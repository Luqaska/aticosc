<?php $route = "/blog.php";
$route = count(str_split($route));
$url = str_split($_SERVER['REQUEST_URI']);
$i=0; while($i < $route){
  unset($url[$i]);
  $i++;
}
$url = implode("", $url);
echo '<title>Atico.0rg.us Blog</title><style>body{margin:0;}</style><iframe frameborder="0" width="100%" height="100%" src="https://aticoblog.lu700.repl.co/'.$url.'"></iframe>';
