<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Obrigado</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body>
        <div class="container text-center d-flex align-items-center justify-content-center">
            <div class="row">			
                <div class="col mt-5">
                    <?php
                        include 'config.php';
                        $nota = $_POST["radio"];

                        $sql = "INSERT INTO notas (nota) VALUES ('{$nota}')";
                        $res = $conn->query($sql);

                        if($res==true){
                            print '<h1>Obrigado por avaliar</h1>';
                            print '<a class="btn btn-secondary" href="index.php" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>';
                        }
                    ?>
					<a class="btn btn-secondary" href="index.php" role="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
  							<path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
  							<path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
						</svg>
					</a>
                </div>
            </div>
        </div>
    </body>
</html>