function agregar(id) {
    var precio_venta = document.getElementById('precio_venta_' + id).value;
    var cantidad = document.getElementById('cantidad_' + id).value;
    //Inicia validacion
    if (isNaN(cantidad)) {
        alert('Esto no es un numero');
        document.getElementById('cantidad_' + id).focus();
        return false;
    }
    if (isNaN(precio_venta)) {
        alert('Esto no es un numero');
        document.getElementById('precio_venta_' + id).focus();
        return false;
    }
    //Fin validacion

    $.ajax({
        type: "POST",
        url: "./ajax/agregar_facturacion.php",
        data: "id=" + id + "&precio_venta=" + precio_venta + "&cantidad=" + cantidad,
        beforeSend: function (objeto) {
            $("#resultados").html("Mensaje: Cargando...");
        },
        success: function (datos) {
            $("#resultados").html(datos);
        }
    });
}