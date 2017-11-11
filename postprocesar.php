<?php
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.

$dir_subida = './archivos/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);


if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.";
} else {
		echo '<pre>';
    echo "¡Error al subir el fichero!\n";
    echo 'Más información de depuración:';
		print_r($_FILES);

		print "</pre>";
}

