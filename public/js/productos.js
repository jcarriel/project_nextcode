function stock(stockP,campo) {
    // alert(stockP);
    // alert(campo);
    var cantidad = $(campo).val();
    if (cantidad>stockP) {
        alert("Solo existen "+stockP+" en stock");
        $(campo).val(stockP);
    } else if (cantidad==0){
        alert("Debe elegir al menos 1 producto");
        $(campo).val(1);
    }
}

function agregar(id, campo) {
    let precio_venta = $('#precio_venta').val();
    let cantidad = $(campo).val();
    alert(cantidad + '   ' + precio_venta);

    //Inicia validacion
    if (isNaN(cantidad)) {
        alert('Esto no es un numero');
        document.getElementById(campo).focus();
        return false;
    }
    if (isNaN(precio_venta)) {
        alert('Esto no es un numero');
        document.getElementById('precio_venta').focus();
        return false;
    }

    let total= precio_venta*cantidad;
    //Fin validacion
    $.ajax({
        type: "REQUEST",
        dataType: "json",
        url: "/query/"+id,
        // beforeSend: function (objeto) {
        //     $("#resultados").html("Mensaje: Cargando...");
        // },
        success: function (datos) {
            $('#mitabla tbody:last').append('<tr>');
            $.each(datos, function (i, item) {
                $('#mitabla tbody:last').each(function () {
                    $(this).append('<td>'+item+'</td>');
                });
            });
            $('#mitabla tbody:last').each(function () {
                $(this).append('<td>' + cantidad + '</td>');
            });
            $('#mitabla tbody:last').each(function () {
                $(this).append('<td>' + total + '</td>');
            });
            $('#mitabla tbody:last').each(function () {
                $(this).append('<td><button class="btn btn-xs btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">< path d = "M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" /><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" /></svg ></button></td>');
            });
            $('#mitabla tbody:last').append('</tr>');
        },
        error: function (response, status, error) {
            alert(error);
        }
    });
}