<?php
error_reporting(E_ERROR);
require_once "header.php";
require_once "../model/modelProduct.php";
$model = new ModelProd();
$productos = $model->getProductos();

?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 col-10 mx-auto">
            <form action="../controller/productos.php" method="post" enctype="multipart/form-data">
                <input type="text" name="action" value="new" readonly hidden>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        Nombre:
                    </span>
                    <input type="text" class="form-control" name="name" placeholder="Nombre Completo" required="required">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        Marca:
                    </span>
                    <input type="text" class="form-control" name="marca" placeholder="Ej: Natura" required="required">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        Contenido:
                    </span>
                    <input type="number" class="form-control" name="cont" placeholder="Contenido" required="required">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        Precio:
                    </span>
                    <input type="number" class="form-control" name="price" placeholder="Precio" required="required">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        Stock:
                    </span>
                    <input type="text" class="form-control" name="almacen" placeholder="Ej: 5pz" required="required">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        Imagen:
                    </span>
                    <input type="file" class="form-control" name="imagen" placeholder="Foto del Producto" required="required">
                </div>
                <hr style="background-color: #fff; color: #fff; width: 80%; margin: auto;">
                <br>
                <center>
                    <button class="btn btn-primary">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        Guardar
                    </button>
                </center>
            </form>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row" style="height: 60vh; overflow-y: scroll;">
        <table class="table table-bordered table-responsive">
            <thead class="table-primary">
                <tr class="text-center">
                    <th>Nombre producto</th>
                    <th>Marca</th>
                    <th>Contenido</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Stock</th>
                    <th>Controles</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($productos->num_rows > 0) {
                    while ($item = $productos->fetch_assoc()) { ?>
                        <tr class="text-center">
                            <td><?php echo $item['nombre_prenda']; ?></td>
                            <td><?php echo $item['diseñador']; ?></td>
                            <td><?php echo $item['price_ant']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td>
                                <img src="../src/imgs/<?php echo $item['folio_prenda']; ?>.jpeg" height="40px" alt="">
                            </td>
                            <td>
                                <?php echo $item['cantidad']; ?>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="deleteProd(<?php echo $item['folio_prenda']; ?>)">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-primary btn-sm" onclick="addStock(<?php echo $item['folio_prenda']; ?>)">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr class="text-center">
                        <td colspan="6">
                            No hay Productos que mostrar
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once "footer.php"; ?>
<script>
    function deleteProd(id) {
        var opcion = confirm("Seguro deseas eliminar este producto? \n ya no podremos recuperarlo");
        if (opcion == true) {
            location.href = "../controller/delete.php?ID=" + id;
        }
    }

    function addStock(id) {
        swal("Cantidad a sumar?", {
                content: "input",
            })
            .then((value) => {
                valor = value.replace(/[^0-9]/g, '');
                if (valor != "") {
                    location.href = "../controller/addStock.php?ID=" + id + "&Stock=" + valor;
                }
            });
    }
</script>
<script>
    var res = "<?php if (isset($_GET['res'])) echo $_GET['res'] ?>";

    if (res == "1") {
        alert("Producto agreado con exito!");
    } else if (res != "") {
        alert("Ocurrio un error al guardar la información");
    }

    var del = "<?php if (isset($_GET['del'])) echo $_GET['del'] ?>";

    if (del == "1") {
        alert("Producto eliminado con exito!");
    } else if (del != "") {
        alert("Ocurrio un error al eliminar la información");
    }

    var stock = "<?php if (isset($_GET['stock'])) echo $_GET['stock'] ?>";

    if (stock == "1") {
        alert("Stock Actualizado");
    } else if (stock != "") {
        alert("Ocurrio un error al eliminar la información");
    }
</script>