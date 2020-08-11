$(".table tbody").on("click", ".btn", function() {
  var currow = $(this).closest("tr");
  var col1 = currow.find("td:eq(0)").text();
  var col2 = currow.find("td:eq(1)").text();
  var col3 = currow.find("td:eq(2)").text();
  var col4 = currow.find("td:eq(3)").text();
  var col5 = currow.find("td:eq(4)").text();
  var col6 = currow.find("td:eq(5)").text();

  parametros = {
    "id": col1,
    "fecha": col2,
    "listaProductos": col3,
    "subtotal": col4,
    "iva": col5,
    "total": col6
  };
  $.ajax({
    data: parametros,
    url: "/pdf/detalle_index.php",
    type: "POST",
    success: function (html) {
      //window.location.href = "/pdf/detalle_index.php?listaProductos=" + col3;
      $("#pdf").html(html);
    },
    error: function (error) {
      //alert(error);
    },
  });
});