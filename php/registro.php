<?php
// Comprobar si se está realizando una solicitud Ajax
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['FUNCION'])) {
    $FUNCION = $_POST['FUNCION'];

    switch ($FUNCION) {
        case 'funcion1':
            funcionUno();
            break;
        case 'funcion2':
            funcionDos(" JHEREMY");
            break;
        default:
            echo "Función no reconocida.";
    }
}

function funcionUno() {
    echo "Esta es la función uno.";
}

function funcionDos($parametro) {
    echo "Esta es la función dos. El parámetro es: " . $parametro;
}

function funcionTres($nombre, $apellido) {
    return "Esta es la función tres. Nombre: $nombre, Apellido: $apellido";
}
?>
