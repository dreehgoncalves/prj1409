<?php
    $cnpj = $_GET['cnpj'];
    $url = "https://www.receitaws.com.br/v1/cnpj/$cnpj";
    $retorno = file_get_contents($url);
    die($retorno);
?>