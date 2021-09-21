<?php

include("conexao.php");
extract($_POST);

try {
  if ($_POST) {

    $sql = "INSERT INTO contato (nome, email, motivo, mensagem) values ('$nome', '$email', '$motivo', '$mensagem')";

    $res = mysqli_query($con, $sql);
    $retorno = array();

    if ($res == false) {

      $retorno['resp'] = true;
      $retorno['msg'] = "Erro ao inserir usuário";

    } else {

      $retorno['resp'] = true;
      $retorno['msg'] = "Usuário inserido com sucesso";

    }
  }
  die(json_encode($retorno));
} catch (Exception $e) {
  echo "Erro";
}
?>