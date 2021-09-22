<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Aula 14/09</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilo.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="nome">Nome:</label><br>
      <input type="text" id="nome" class="form-control" placeholder="Seu nome" required="" autofocus=""><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" class="form-control" placeholder="Seu email" required="" autofocus=""><br>

      <label for="motivo">Motivo:</label><br>
      <input type="text" id="motivo" class="form-control" placeholder="Motivo" required="" autofocus=""><br>

      <label for="mensagem">Mensagem:</label><br>
      <textarea id="mensagem" class="form-control"></textarea><br>

      <button type="button" class="btn btn-lg btn-primary btn-block" onclick="enviar()">Enviar</button>
    </form>
  </div>

  <script type="text/javascript">
    function enviar() {
      let nome, email, motivo, mensagem;

      nome = document.getElementById("nome").value;
      email = document.getElementById("email").value;
      motivo = document.getElementById("motivo").value;
      mensagem = document.getElementById("mensagem").value;

      $.post("cadastrar.php", {
          nome: nome,
          email: email,
          motivo: motivo,
          mensagem: mensagem
        },
        function(data) {
          if (data.resp == false) {
            window.alert(`Ocorreu um erro:"${data.msg}`);
          } else {
            window.alert(data.msg);
            location.reload();
          }
        },
          "JSON")
    }
  </script>
</body>

</html>