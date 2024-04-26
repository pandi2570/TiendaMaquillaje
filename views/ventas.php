<?php require_once "header.php"; ?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 col-10 mx-auto">
            <div class="input-group w-50 mx-auto">
                <span class="input-group-text">
                    <i class="fa fa-barcode" aria-hidden="true"></i>
                    &nbsp;
                    Codigo:
                </span>
                <input type="number" id="code" class="form-control">
                <button class="btn btn-primary btn-sm" id="btn-code">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <form action="../controller/ventas.php" method="post" class="mt-4">
                <input type="text" value="venta" name="action" readonly hidden>
                <table class="table table-hover table-dordered table-responsive">
                    <thead class="table-primary">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Importe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="lienzo" style="background-color: #fff;">

                    </tbody>
                </table>
                <hr>
                <div class="input-group">
                    <span class="input-group-text">
                        Total: $
                    </span>
                    <input type="text" name="total" id="total" hidden>
                    <input type="text" class="form-control text-center" readonly id="totala" required>
                </div>

                <br>
                <center>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-money-bill-wave"></i>
                        Pagar
                    </button>
                </center>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>
<script src="../src/js/venta.js"></script>
<script>
    let message = "<?php if (isset($_GET['vent'])) echo $_GET['vent']; ?>";

    $(function() {
        if (message == 1) {
            swal("Venta Generada Correcta!", "Martinez Infante Leslei Nevil", 'success').then((value) => {
                window.open("tiket.php?tk=<?php echo $_GET['tk']; ?>");
                location.href = "../controller/mail.php?tk=<?php echo $_GET['tk']; ?>";
            })
        }
    });
</script>