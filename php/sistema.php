<?php

//  session_start(); 
//   include_once 'config.php';

// if(isset($_SESSION['login']) and isset($_SESSION['senha'])){

//   $login = ucfirst($_SESSION['login']);

// }else{
//   header('Location:loginbolinha.php');
//   unset($_SESSION['login']);
//   unset($_SESSION['senha']);
// }

if(isset($_POST["submit"])){
   
  $tiposanguineo = $_POST['tiposanguineo'];
  
  $sql = "SELECT * FROM cad_pf WHERE tiposanguineo LIKE '%tiposanguineo%' ";

  $resultado = $conexao->query($sql);
 }

?>  




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Document</title>
 
  <style>
    body{
      font-family: Arial, Helvetica, sans-serif;
      background: white;
    }
    .tabela{
      background-color: rgba(206, 107, 107);
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 80px;
    border-radius: 15px;
    color: white;

    }
  </style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Banco de Dados</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" arial-expanded="false"></button>
  </div>
  <div class="d-flex">
    <a href="../gotasdevida.html" class="btn btn-danger me-5">Sair</a>
  </div>
  
</nav>
   <?php
      echo "<h1>Bem vindo </h1>";
   ?>

<form class="tabela" action="sistema.php">
    <h1>Escolha o tipo sanguíneo:</h1>
    <br>
    <input type="checkbox" name="tiposanguineo" id="a+" value="a+">
    <label for="a+">A+</label><br>
    <input type="checkbox" name="tiposanguineo" id="a-" value="a-">
    <label for="a-">A-</label><br>
    <input type="checkbox" name="tiposanguineo" id="b+" value="b+">
    <label for="b+">B+</label><br>
    <input type="checkbox" name="tiposanguineo" id="b-" value="b-">
    <label for="b-">B-</label><br>
    <input type="checkbox" name="tiposanguineo" id="ab+" value="ab+">
    <label for="ab+">AB+</label><br>
    <input type="checkbox" name="tiposanguineo" id="ab-" value="ab-">
    <label for="ab-">AB-</label><br>
    <input type="checkbox" name="tiposanguineo" id="o+" value="o+">
    <label for="o+">O+</label><br>
    <input type="checkbox" name="tiposanguineo" id="o-" value="o-">
    <label for="o-">O-</label><br>
    
    <br>
    <button type="submit" name="submit">Enviar</button>
    <br>
    <?php
    if(!empty($resultado)){
      echo "Seus dados foram salvos com sucesso!";
    }

    ?>


  </form>
</body>
</html>
