<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 14/09</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilo.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <div class="contato">
    <form action="" method="POST" enctype="multipart/form-data">
      <!--<h3>Formulário de contato</h3>

      <label for="nome">Nome</label><br>
      <input type="text" id="nome" class="form-control" placeholder="Seu nome" required="" autofocus=""><br>

      <label for="email">Email</label><br>
      <input type="email" id="email" class="form-control" placeholder="Seu email" required="" autofocus=""><br>

      <label for="motivo">Motivo</label><br>
      <input type="text" id="motivo" class="form-control" placeholder="Motivo" required="" autofocus=""><br>

      <label for="mensagem">Mensagem</label><br>
      <textarea id="mensagem" class="form-control"></textarea><br>

      <p>Informações de endereço</p>

      <label for="CEP">CEP</label><br>
      <input type="number" id="cep" class="form-control" placeholder="cep" required="" autofocus=""><br>
      <button type="button" class="btn btn-lg btn-primary btn-block" onclick="buscarCep()">Buscar</button><br>

      <label for="logradouro">Logradouro</label><br>
      <input type="text" id="logradouro" class="form-control" placeholder="Logradouro" required="" autofocus=""><br>

      <label for="numero">Numero</label><br>
      <input type="number" id="motivo" class="form-control" placeholder="Numero" required="" autofocus=""><br>

      <label for="bairro">Bairro</label><br>
      <input type="text" id="bairro" class="form-control" placeholder="Bairro" required="" autofocus=""><br>

      <label for="cidade">Cidade</label><br>
      <input type="text" id="cidade" class="form-control" placeholder="Cidade" required="" autofocus=""><br>

      <label for="uf">UF</label><br>
      <select id="uf" name="uf" class="form-control">
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
        <option value="EX">Estrangeiro</option>
      </select><br>
      <button type="button" class="btn btn-lg btn-primary btn-block" onclick="enviar()">Enviar</button><br>
    </form>
  </div>-->
      <div class="cnpj">
        <form action="" method="POST" enctype="multipart/form-data">
          <h3>Informações da empresa</h3>

          <label for="CNPJ">CNPJ</label><br>
          <input type="number" id="cnpj" class="form-control" placeholder="00.000.000/0000-00" required="" autofocus=""><br>
          <button type="button" class="btn btn-lg btn-primary btn-block" onclick="buscarCNPJ()">Buscar</button><br>

          <label for="data">Data de abertura</label><br>
          <input type="text" id="data" class="form-control" required="" autofocus=""><br>

          <label for="nome_empresarial">Nome Empresarial</label><br>
          <input type="text" id="nome_empresarial" class="form-control" placeholder="" required="" autofocus=""><br>

          <label for="nome_fantasia">Nome Fantasia</label><br>
          <input type="text" id="nome_fantasia" class="form-control" placeholder="" required="" autofocus=""><br>

          <label for="tipo">Tipo</label><br>
          <input type="text" id="tipo" class="form-control" placeholder="" required="" autofocus=""><br>

          <label for="situacao">Situação</label><br>
          <input type="text" id="situacao" class="form-control" placeholder="" required="" autofocus=""><br>

          <label for="status">Status</label><br>
          <input type="text" id="status" class="form-control" placeholder="" required="" autofocus=""><br>

          <label for="logradouro">Logradouro</label><br>
          <input type="text" id="logradouro" class="form-control" placeholder="Logradouro" required="" autofocus=""><br>

          <label for="cep">CEP</label><br>
          <input type="text" id="cep" class="form-control" placeholder="CEP" required="" autofocus=""><br>

          <label for="numero">Numero</label><br>
          <input type="number" id="numero" class="form-control" placeholder="Numero" required="" autofocus=""><br>

          <label for="bairro">Bairro</label><br>
          <input type="text" id="bairro" class="form-control" placeholder="Bairro" required="" autofocus=""><br>

          <label for="cidade">Cidade</label><br>
          <input type="text" id="cidade" class="form-control" placeholder="Cidade" required="" autofocus=""><br>

          <label for="uf">UF</label><br>
          <input type="text" id="uf" class="form-control" placeholder="UF" required="" autofocus=""><br>

          <label for="telefone">Telefone</label><br>
          <input type="text" id="telefone" class="form-control" placeholder="telefone" required="" autofocus=""><br>

          <label for="email">Email</label><br>
          <input type="text" id="email" class="form-control" placeholder="Email" required="" autofocus=""><br>

          <label for="cap_social">Capital Social</label><br>
          <input type="text" id="cap_social" class="form-control" placeholder="Capital Social" required="" autofocus=""><br>

          <button type="button" class="btn btn-lg btn-primary btn-block" onclick="enviar()">Enviar</button><br>
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
                window.alert(`Ocorreu um erro:"${data.msg}"`);
              } else {
                window.alert(data.msg);
                location.reload();
              }
            },
            "JSON")
        }

        function buscarCep() {
          let cep;
          cep = document.getElementById("cep").value;
          if (cep != "") {
            $.get("https://viacep.com.br/ws/" + cep + "/json",
              function(data) {
                if (data.erro) {
                  window.alert("CEP inválido");
                } else {
                  document.getElementById("logradouro").value = data.logradouro;
                  document.getElementById("uf").value = data.uf;
                  document.getElementById("bairro").value = data.bairro;
                  document.getElementById("cidade").value = data.localidade;
                  document.getElementById("nome_empresarial").value = data.nome;
                  document.getElementById("nome_fantasia").value = data.fantasia;
                  $("#numero").focus();
                }
              },
              "json");
          } else {
            window.alert("Preencha o CEP!");
          }
        }

        function buscarCNPJ() {
          let cnpj;
          cnpj = document.getElementById("cnpj").value;
          if (cnpj != "") {
            $.get("carrega_cnpj.php", {
                cnpj: cnpj
              },
              function(data) {
                if (data.erro) {
                  window.alert("CNPJ inválido");
                } else {
                  document.getElementById("data").value = data.data_situacao;
                  document.getElementById("logradouro").value = data.logradouro;
                  document.getElementById("uf").value = data.uf;
                  document.getElementById("bairro").value = data.bairro;
                  document.getElementById("cidade").value = data.municipio;
                  document.getElementById("cep").value = data.cep;
                  document.getElementById("telefone").value = data.telefone;
                  document.getElementById("data").value = data.abertura;
                  document.getElementById("email").value = data.email;
                  document.getElementById("tipo").value = data.tipo;
                  document.getElementById("situacao").value = data.situacao;
                  document.getElementById("status").value = data.status;
                  document.getElementById("numero").value = data.numero;
                  document.getElementById("nome_empresarial").value = data.nome;
                  document.getElementById("nome_fantasia").value = data.fantasia;
                  document.getElementById("cap_social").value = data.capital_social;
                  $("nome_empresarial").focus();
                }
              },
              "json");
          } else {
            window.alert("Preencha o CEP!");
          }
        }
      </script>
</body>

</html>