<?php
if ($_SERVER['REMOTE_ADDR'] == '192.168.0.1') {
    vote();
} elseif (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == "usuario" && $_SERVER['PHP_AUTH_PW'] == "senha") {
    vote(); // Permite que usuários autenticados acessem a função vote
} else {
    if (isset($_SERVER['PHP_AUTH_USER'])) {
        // Usuário forneceu credenciais, mas elas estão erradas
        authenticationFailed();
    } else {
        // Usuário não forneceu credenciais, exiba prompt de autenticação
        authenticate();
    }
}

function authenticationFailed() {
    header("HTTP/1.0 401 Unauthorized"); ?>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title>Acesso Negado</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
        </head>
        <body>
            <div class="container text-center d-flex align-items-center justify-content-center">
                <div class="row">			
                    <div class="col mt-5">
                        <h1>Acesso Negado</h1>
                        <p>Usuário ou senha incorretos. Tente novamente.</p>
                        <form method="post">
                            <button type="submit"  name="retryAuthentication" class="btn btn-warning">Tentar Novamente</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html><?php
    exit;
}

function authenticate() {
    header("WWW-Authenticate: Basic realm='Avaliacao'");
    header("HTTP/1.0 401 Unauthorized");
    canceled();
    exit;
}

function vote() { ?>   
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title>Avaliação</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
        </head>
        <body>
            <div class="container text-center d-flex align-items-center justify-content-center">
                <div class="row">			
                    <div class="col mt-5">
                        <div class="text-center">
                            <img src="images/logo.png" width="200" class="" alt="logo">
                        </div>
                        <h1>Avalie nosso atendimento</h1>
                        <form action="obrigado.php" name="form" class="myform" onsubmit="return validateForm()" method="POST">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio3" value="3">
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio4" value="4">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio" id="inlineRadio5" value="5">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                            <div class="mb-3">
                                <button type="submit"  name="submit" class="btn btn-primary">Avaliar</button>
                            </div>
                            <div id="alert" class="alert alert-danger" role="alert">
                                Você deve atribuir uma nota
                            </div>
                            <div id="alert-hidden" class="alert alert-dark" role="alert">
                                &#160;
                            </div>
                        </form>
                        <script>
                            function validateForm() {
                                var x = document.forms["form"]["radio"].value;
                                if (x == "") {
                                    document.getElementById("alert-hidden").style.display = 'none';
                                    document.getElementById("alert").style.display = 'block';
                                    return false;
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
            <script src="js/bootstrap.bundle.min.js"></script>
        </body>
    </html><?php 
}

function canceled() { ?>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title>Acesso Negado</title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
        </head>
        <body>
            <div class="container text-center d-flex align-items-center justify-content-center">
                <div class="row">			
                    <div class="col mt-5">
                        <h1>Acesso Negado</h1>
                        <p>Faça login para continuar.</p>
                        <form method="post">
                            <button type="submit"  name="retryAuthentication" class="btn btn-warning">Tentar Novamente</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html><?php
}
?>
