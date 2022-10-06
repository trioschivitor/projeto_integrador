<?php

session_start();
include_once "config.php";

if(isset($_POST['submit']) and !empty($_POST['login']) and !empty($_POST['senha'])){
      
      $login = $_POST['login'];
      $senha = $_POST['senha'];
      
      $sql = "SELECT * FROM cad_pj WHERE login='$login'";
      $resultado = $conexao->query($sql);
      $nome = $resultado->fetch_assoc();
      $w = $nome['$senha'];
        // if(password_verify($senha,$nome["senha"])){
        if(!$senha){
        
          $_SESSION["login"] = $login;
          $_SESSION["senha"] = $senha;
          header("Location:sistema.php");
         }else{
          
         unset($_SESSION['login']);
         unset($_SESSION['senha']);
         header("Location:loginbolinha.php?msg='$w'");
        
       }
     
}

?>