var contador = 0;
var total = 0;

function addProd(code) {
  $.ajax({
    url: "",
  });
}

function getProd(code) {
  action = "getInfo";
  $.ajax({
    url: "../controller/ventas.php",
    type: "post",
    data: { action, code },
    success: function (response) {
      //console.log(response);
      if (response.trim() == "-1") {
        alert("Ingresa un codigo valido");
        $("#code").val("");
        $("#code").focus();
      } else {
        data = JSON.parse(response);
        //console.log(data);
        if (contador == 0) {
          $("#lienzo").empty();
        }
        contador++;
        total += parseFloat(data.price);
        $("#lienzo").append(
          "<tr>" +
            "<td class='w-25 mx-auto'>" +
            "<input type='text' name='codigo[]' value='" +
            data.folio_prenda +
            "' class=' w-25 form-control text-center'>" +
            "</td>" +
            " <td>" +
            data.nombre_prenda +
            " Cont.: " +
            data.price_ant +
            "</td>" +
            "<td>" +
            "<input type='text' name='price[]' value='" +
            data.price +
            "' class=' form-control text-center'>" +
            "</td>" +
            "<td>" +
            "    <button class='btn btn-danger btn-sm'>" +
            "        <i class='fa fa-times' aria-hidden='true'></i>" +
            "    </button>" +
            "</td>" +
            "</tr > "
        );

        aux = total.toLocaleString(undefined, {
          minimumFractionDigits: 2,
          maximumFractionDigits: 2,
        });
        $("#total").val(total);
        $("#totala").val(aux);
        $("#code").val("");
        $("#code").focus();
      }
    },
  });
}

$(function () {
  if (contador == 0) {
    $("#lienzo").html(
      "<tr class='text-center'>" +
        "<td colspan='4'>" +
        "Sin Venta" +
        "</td>" +
        "</tr>"
    );
  }

  $("#code").keyup(function (evt) {
    codigo = $("#code").val();
    if (evt.which == 13) {
      if (codigo == "") alert("Ingresa un codigo valido");
      else {
        getProd(codigo);
      }
    }
  });
});
