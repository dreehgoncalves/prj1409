<?php

include("conexao.php");

try {
  if ($_POST) {
    extract($_POST);

    $pos = strpos($email, '@');
    if ($pos == false) {
      throw new Exception("Email inválido");
    }

    $sql = "INSERT INTO contato (nome, email, motivo, mensagem)
            values ('$nome', '$email', '$motivo', '$mensagem')";
    $res = mysqli_query($con, $sql);
    $retorno = array();

    if ($res == false) {
      throw new Exception("Erro ao inserir");  

    } else {
      $retorno['resp'] = true;
      $retorno['msg'] = "erro ao inserir";
    }
  }
  die(json_encode($retorno));
} catch (Exception $e) {

  $retorno = array();
  $retorno['resp'] = false;
  $retorno['msg'] = $e->getMessage();
  die(json_encode($retorno));
}
?>