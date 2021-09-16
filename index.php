<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Aula 14/09</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body>
  <div style="text-align:center;">
    <form action="" method="POST" enctype="multipart/form-data">
      <p>Nome
        <input type="text" id="nome">
      </p>
      <p>E-mail
        <input type="text" id="email">
      </p>
      <p>Motivo
        <input type="text" id="motivo">
      </p>
      <textarea id="mensagem">Mensagem</textarea><br>
      <button type="button" class="btn btn-primary" onclick="enviar()">Enviar</button>
    </form>
  </div>

  <script type="text/javascript">
    function enviar() {
      let nome, email, motivo, mensagem;

      nome = document.getElementById("nome").value;
      email = document.getElementById("email").value;
      motivo = document.getElementById("motivo").value;
      mensagem = document.getElementById("mensagem").value;

      axios.post("cadastrar.php",
                  {nome: "nome"});
    }
  </script>
</body>

</html>