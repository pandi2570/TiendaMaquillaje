<?php

require_once "settings.php";
require_once "modelProduct.php";

class ModelVentas extends Settings
{

    public function getTicket()
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT folio_venta FROM ventas ORDER BY folio_venta DESC LIMIT 1");
            $query->execute();
            $aux = $query->get_result();

            $query->close();

            if ($aux->num_rows > 0) {
                $res = $aux->fetch_assoc();

                return $res['folio_venta'];
            }
        }
        return 1;
    }

    public function newVenta($cash)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("INSERT INTO ventas (total) VALUES (?)");
            $query->bind_param('s', $cash);
            $res = $query->execute();
            $query->close();

            return $res;
        }
    }



    public function addCompra($tiket, $code, $import)
    {
        $modelAux = new ModelProd();
        $cant = 1;
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("INSERT INTO detalle_venta (fk_tiket, fk_prenda, cant, importe) VALUES (?,?,?,?)");
            $query->bind_param('ssss', $tiket, $code, $cant, $import);
            $res = $query->execute();
            $query->close();
            $modelAux->resStock($code);

            return $res;
        }
    }

    public function existe($ID)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT * FROM prendas WHERE prendas.folio_prenda = ?");
            $query->bind_param('s', $ID);
            $query->execute();

            $res = $query->get_result();

            $query->close();

            if ($res->num_rows > 0) {
                $aux = $res->fetch_assoc();
                return json_encode($aux);
            }
            return -1;
        }
    }

    public function getVenta($number)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT dv.*, p.nombre_prenda FROM detalle_venta AS dv INNER JOIN prendas AS p on p.folio_prenda = dv.fk_prenda WHERE dv.fk_tiket = ?");
            $query->bind_param('s', $number);
            $query->execute();

            $res = $query->get_result();

            $query->close();
            if ($res->num_rows > 0) {
                return $res;
            } else {
                return -2;
            }
        }
        return -1;
    }


    public function getTVenta($number)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT total FROM ventas WHERE folio_venta = ?");
            $query->bind_param('s', $number);
            $query->execute();

            $res = $query->get_result();

            $query->close();
            if ($res->num_rows > 0) {
                $aux = $res->fetch_assoc();
                return $aux['total'];
            } else {
                return -2;
            }
        }
        return -1;
    }

    public function getFrecuencias()
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT p.nombre_prenda, count(dv.fk_prenda) as numero FROM detalle_venta AS dv INNER JOIN prendas AS p ON p.folio_prenda = dv.fk_prenda GROUP BY dv.fk_prenda");
            $query->execute();
            $aux = $query->get_result();

            $query->close();

            if ($aux->num_rows > 0) {
                while($item = $aux->fetch_assoc()){
                    $json[] =array(
                        "label" => $item['nombre_prenda'],
                        "cantidad" => $item['numero']
                    );
                }
                return json_encode($json);
            }
            else{
                return -2;
            }
        }
        return 1;
    }

    public function getStoker()
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT p.nombre_prenda, p.cantidad FROM prendas AS p");
            $query->execute();
            $aux = $query->get_result();

            $query->close();

            if ($aux->num_rows > 0) {
                while($item = $aux->fetch_assoc()){
                    $json[] =array(
                        "label" => $item['nombre_prenda'],
                        "cantidad" => $item['cantidad']
                    );
                }
                return json_encode($json);
            }
            else{
                return -2;
            }
        }
        return 1;
    }
}
