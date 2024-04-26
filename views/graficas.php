<?php require_once "header.php" ?>
<style>
    canvas {
        border: 1px dotted red;
        color: #fff;
        overflow: hidden;
    }

    .chart-container {
        display: block;
        position: relative;
        margin: auto;
        height: auto;
        width: 40vw;
        background-color: #fff;
    }
</style>

<center>
    <br>
    <h1>Frecuancia de venta de Producto</h1>

    <hr>
    <br>
</center>

<div class="chart-container">
    <canvas id="myChart"></canvas>
</div>
<center>
    <br>
    <h1>Cantidad de stock en almacen</h1>

    <hr>
    <br>
</center>
<div class="chart-container">
    <canvas id="myChart_2"></canvas>
</div>

<?php require_once "footer.php" ?>
<script src="../src/libs/chart.js"></script>
<script>
    var labels = [];
    let datas = [];

    var labels_2 = [];
    let datas_2 = [];

    $(function() {
        const ctx = document.getElementById('myChart');
        const ctx_2 = document.getElementById('myChart_2');
        $.ajax({
            url: "../controller/getGraphics.php",
            type: 'post',
            data: {},
            success: function(response) {

                aux = JSON.parse(response);
                $.each(aux, function(key, item) {
                    labels.push(item.label);
                    datas.push(item.cantidad)
                });

                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        label: "Frecuencia de productos",
                        labels: labels,
                        datasets: [{
                            label: '# Frecuencia',
                            data: datas,
                            borderWidth: 2,
                        }]
                    },
                    autoPadding: true,
                    hoverOffset: 2
                });
            }
        });

        $.ajax({
            url: "../controller/getStock.php",
            type: 'post',
            data: {},
            success: function(response) {
                console.log(response);
                aux = JSON.parse(response);
                $.each(aux, function(key, item) {
                    labels_2.push(item.label);
                    datas_2.push(item.cantidad)
                });

                new Chart(ctx_2, {
                    type: 'doughnut',
                    label: "Cantidad de Stock",
                    data: {
                        labels: labels_2,
                        datasets: [{
                            label: '# Productos',
                            data: datas_2,
                            borderWidth: 2,
                        }]
                    },
                    autoPadding: true,
                    hoverOffset: 2
                });
            }
        });

        window.addEventListener('beforeprint', () => {
            ctx.resize(600, 600);
        });
    })
</script>