function imprime() {
  $(".table tbody").on("mouseover", ".btn", function() {
  var currow = $(this).closest("tr");
  var col1 = currow.find("td:eq(0)").text();
  var col2 = currow.find("td:eq(1)").text();
  var colBSCS = currow.find("td:eq(2)").text();
  var col3 = currow.find("td:eq(3)").text();
  var col4 = currow.find("td:eq(4)").text();
  var col7 = currow.find("td:eq(8)").text();
  var col8 = currow.find("td:eq(9)").text();
  var col9 = currow.find("td:eq(10)").text();
  var col10 = currow.find("td:eq(11)").text();

  
  var table = $("#mitabla").tableToJSON({
    ignoreColumns: [5],
  });
  table = JSON.stringify(table);

  parametros = {
    "establecimiento": establecimiento,
    "punto_emision": punto_emision,
    "empresa": empresa,
    "cliente": cliente,
    "subtotal": subtotal,
    "impuestos": impuestos,
    "total": total,
    "listaProductos": table,
  };
  $.ajax({
    data: parametros,
    url: "/pdf/factura_detalle.php",
    type: "POST",
    success: function (html) {
      //window.location.href = "/pdf/factura_detalle.php?listaProductos=" + table;
      $("#pdf").html(html);
    },
    error: function (error) {
      //alert(error);
    },
  });
}
