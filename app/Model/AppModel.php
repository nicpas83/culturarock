<?php

App::uses('Model', 'Model');

class AppModel extends Model {

    public function dateYMD($dateString) {
        $dateString = str_replace('/', '-', $dateString);
        return date('Y-m-d', strtotime($dateString));
    }

    public function dateDMY($dateString) {
        $date = date('d-m-Y', strtotime($dateString));
        $date = str_replace('-', '/', $date);
        return $date;
    }

    var $controllerAction = null;

    function setControllerAction($action = null) {
        if ($action) {
            $this->controllerAction = $action;
        }
    }

    /**
     *  $quitarClaves = array();
     *  $array = $this->quitarClavesDelArray($array, $quitarClaves);
     */
    public function quitarClavesDelArray($array, $claves) {
        foreach ($claves as $clave) {
            unset($array[$clave]);
        }
        return $array;
    }
    
    public function arrayOrderBy($data, $field) {
        $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
        usort($data, create_function('$a,$b', $code));
        return $data;
    }

}
