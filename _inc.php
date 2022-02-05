<?php session_start();
if(isset($_POST["code"]) && !isset($_SESSION["logged"])){
  if($_POST["code"]=="scraft7769"){
    $_SESSION["logged"]=true;
  }else{
    header("?error");
  }
}else{
  die('<!DOCTYPE html><html><body><form method="POST"><input type="password" name="code"><input type="submit"><br>(Es la misma que SCCJ)</form></body></html>');
}
