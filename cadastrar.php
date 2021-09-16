<?php

include("conexao.php");

  if ($_POST) {
    extract($_POST);
    
    $sql = "INSERT INTO contato (nome, email, motivo, mensagem) values ('$nome', '$email', '$motivo', '$mensagem')";

    $res = mysqli_query($con, $sql);

    if ($res == false) {
      die ("Erro ao inserir usuario");
    } else {
      die ("Usuario inserido com sucesso");
    }
  }
?>