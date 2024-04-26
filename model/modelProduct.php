<?php
require_once "settings.php";

class ModelProd extends Settings
{

    public function newProducto($object)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $name = strtoupper($object['name']);
            $marca = strtoupper($object['marca']);
            $query = $con->prepare("INSERT INTO prendas (nombre_prenda, diseñador, price_ant, price, cantidad) VALUES (?,?,?,?,?)");
            $query->bind_param('sssss', $name, $marca, $object['cont'], $object['price'], $object['almacen']);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }

    public function getLastProd()
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT folio_prenda FROM prendas ORDER BY folio_prenda DESC LIMIT 1");
            $query->execute();
            $res = $query->get_result();

            $query->close();

            if ($res->num_rows > 0) {
                $res = $res->fetch_assoc();
                return $res['folio_prenda'];
            }
            return -2;
        }
        return -1;
    }


    public function getProductos()
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT * FROM prendas");
            $query->execute();
            $res = $query->get_result();

            $query->close();

            if ($res->num_rows > 0) {
                return $res;
            }
            return -2;
        }
        return -1;
    }

    public function deleteProducto($ID)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("DELETE FROM prendas WHERE folio_prenda = ?");
            $query->bind_param('s', $ID);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }

    public function getStock($ID)
    {
        $con = Settings::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT cantidad FROM prendas WHERE folio_prenda = ?");
            $query->bind_param('s', $ID);
            $query->execute();
            $res = $query->get_result();

            $query->close();

            if ($res->num_rows > 0) {
                $res = $res->fetch_assoc();
                return $res['cantidad'];
            }
        }
        return $res;
    }

    public function addStock($ID, $stock)
    {
        $con = Settings::conexion();
        $cantAnt = self::getStock($ID);
        $cantAct = $cantAnt + $stock;
        if ($con != false) {
            $query = $con->prepare("UPDATE prendas SET cantidad = ? WHERE folio_prenda = ?");
            $query->bind_param('ss',$cantAct, $ID);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }

    public function resStock($ID)
    {
        $con = Settings::conexion();
        $cantAnt = self::getStock($ID);
        $cantAct = $cantAnt - 1;
        if ($con != false) {
            $query = $con->prepare("UPDATE prendas SET cantidad = ? WHERE folio_prenda = ?");
            $query->bind_param('ss',$cantAct, $ID);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }
}
