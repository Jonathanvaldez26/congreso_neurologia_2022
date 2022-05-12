<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;

class Transmision{


    public static function getLineaPrincialAll(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM especialidades
sql;

        return $mysqli->queryAll($query);
    }

    public static function getTransmisionById($id){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM transmision
        WHERE id_transmision = $id
sql;

        return $mysqli->queryOne($query);
    }

    public static function getProgrsoTransmision($id,$num_transmision){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM progresos_transmision
        WHERE id_transmision = $num_transmision AND id_registrado = $id
sql;

        return $mysqli->queryOne($query);
    }

    public static function insertProgreso($registrado,$transmision){
        $mysqli = Database::getInstance(1);
        $query=<<<sql
        INSERT INTO progresos_transmision (id_transmision, id_registrado, segundos, fecha_ultima_vista) 
        VALUES ('$transmision','$registrado','0', NOW())
sql;
  
      $id = $mysqli->insert($query);
  
      return $id;
    }

    public static function insertChat($data){
        $mysqli = Database::getInstance(1);
        $query=<<<sql
        INSERT INTO chat (id_registrado, chat, 	fecha, tipo, id_tipo, sala) 
        VALUES (:id_registrado,:chat,NOW(),:tipo,:id_tipo,:sala)
sql;
        $parametros = array(
            ':id_registrado'=>$data->_id_registrado,
            ':chat'=>$data->_chat,
            ':tipo'=>$data->_tipo,
            ':id_tipo'=>$data->_id_tipo,
            ':sala'=>$data->_sala
        );      
  
        $id = $mysqli->insert($query, $parametros);
    
        return $id;
    }


    public static function getChatByID($data){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT c.*, reg.nombre, reg.apellidop, reg.apellidom
        FROM chat c
        INNER JOIN registrados reg ON (reg.id_registrado = c.id_registrado)
        WHERE c.tipo = :tipo and c.sala = :sala and c.id_tipo = :id_tipo;
sql;

        $parametros = array(
            ':tipo'=>$data->_tipo,
            ':sala'=>$data->_sala,
            ':id_tipo'=>$data->_id_tipo
        );
        return $mysqli->queryAll($query, $parametros);
    }
    

    public static function updateProgreso($id_transmision, $registrado, $segundos){
        $mysqli = Database::getInstance();
        $query=<<<sql
            UPDATE progresos_transmision SET segundos = '$segundos'
            WHERE id_transmision = '$id_transmision' AND id_registrado = '$registrado'
sql;
        return $mysqli->update($query);
    }

    public static function updateProgresoFecha($id_transmision, $registrado, $segundos){
        $mysqli = Database::getInstance();
        $query=<<<sql
            UPDATE progresos_transmision SET segundos = '$segundos', fecha_ultima_vista = NOW()
            WHERE id_transmision = '$id_transmision' AND id_registrado = '$registrado'
sql;
        return $mysqli->update($query);
    } 

    public static function getPais(){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM especialidades
sql;

        return $mysqli->queryAll($query);
    }
}