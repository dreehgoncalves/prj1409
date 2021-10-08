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