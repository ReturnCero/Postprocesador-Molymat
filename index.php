<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Molymat</title>

	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/Login-Form-Dark.css">
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<div class="login-dark">
    <form enctype="multipart/form-data" action="postprocesar.php" method="POST">
      <h2 class="sr-only">Postprocesador</h2>
    	<input type="hidden" name="MAX_FILE_SIZE" value="3000000000000" />
      <div class="form-group">
      	<label for="fichero_usuario">Archivo:</label>
        <input class="form-control" name="fichero_usuario" type="file" value="">
      </div>
      <div class="form-group">
      	<label for="lenguaje">Postprocesador:</label>
        <select name="lenguaje" class="form-control">
        	<option value="fanuc">Fanuc</option>
        	<option value="heidegen">Heidegen</option>
        </select>
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Postprocesar</button>
      </div>
    </form>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>