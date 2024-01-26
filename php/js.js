$(document).ready(function () {

    $("#miBoton").click(function () {
        $.ajax({
            type: "POST",
            url: "php/registro.php",
            data: { FUNCION: 'funcion1' },  // Nuevo parámetro
            success: function (response) {
                alert(response); // Muestra la respuesta del archivo PHP
            }
        });
    });

    $("#miBoton1").click(function () {
        $.ajax({
            type: "POST",
            url: "php/registro.php",
            data: { FUNCION: 'funcion2' },  // Nuevo parámetro
            success: function (response) {
                alert(response); // Muestra la respuesta del archivo PHP
            }
        });
    });
});