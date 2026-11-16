
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema CRUD</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .conteudo {
            margin-top: 40px;
        }

        .cabecalho {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 45px 20px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 30px;
        }

        .cabecalho h1 {
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 12px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .icone {
            font-size: 45px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .rodape {
            text-align: center;
            margin-top: 35px;
            padding: 20px;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <?php include_once("menu.php"); ?>

    <div class="container conteudo">

        <!-- Cabeçalho -->
        <div class="cabecalho">
            <h1>
                <i class="fa fa-database"></i>
                Sistema de Cadastro
            </h1>

            <p class="lead mb-0">
                Bem-vindo ao sistema de gerenciamento de funcionários e clientes!
            </p>
        </div>

        <div class="row">

            <!-- Funcionários -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center p-4">

                        <i class="fa fa-users icone"></i>

                        <h4 class="card-title">Funcionários</h4>

                        <p class="card-text text-muted">
                            Cadastre, consulte, edite e remova os funcionários
                            registrados no sistema.
                        </p>

                        <a href="funcionario/adicionar.php"
                           class="btn btn-primary">
                            <i class="fa fa-arrow-right"></i>
                            Acessar Funcionários
                        </a>

                    </div>
                </div>
            </div>

            <!-- Clientes -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center p-4">

                        <i class="fa fa-address-book icone"></i>

                        <h4 class="card-title">Clientes</h4>

                        <p class="card-text text-muted">
                            Cadastre novos clientes, consulte seus dados,
                            edite informações e remova registros.
                        </p>

                        <a href="cliente/adicionar.php"
                           class="btn btn-success">
                            <i class="fa fa-arrow-right"></i>
                            Acessar Clientes
                        </a>

                    </div>
                </div>
            </div>

        </div>

        <!-- Rodapé -->
        <div class="rodape">
            <p class="mb-0">
                <i class="fa fa-code"></i>
                Sistema CRUD desenvolvido com PHP, MySQL e Bootstrap.
            </p>
        </div>

    </div>

</body>
</html>
