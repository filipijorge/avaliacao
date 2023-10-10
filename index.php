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
					<!--input type="submit"  value="votar"-->
				</form>
				<script>
					function validateForm() {
						var x = document.forms["form"]["radio"].value;
						if (x == "") {
							alert("Você deve atribuir uma nota");
							return false;
						}
					}
				</script>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
