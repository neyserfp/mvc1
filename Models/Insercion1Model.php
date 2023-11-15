<?php

    class Datos
    {

        private $mysqli;
        private $data;
        private $ide_coc;
        private $mar_coc;
        private $mod_coc;
        private $aut_coc;

        public function __construct()
        {
            $this->mysqli=Connection::conn1();
            $this->data=array();
        }

        // Devuelve datos de la BD (select)
        public function insertData1($sql)
        {
            if(!$this->mysqli->query($sql))
            {
                echo "La operación no se ha podido realizar";
                // echo "Detalle del error en la consulta (getData1) - ";
                // echo "Número de error: " . $this->mysqli->errno . " - ";
                // echo "Descripción del error: " . $this->mysqli->error;
            }
            else
            {
                $result=$this->mysqli->query($sql);
                while($rows=$result->fetch_object())
                {
                    $this->data[]=$rows;
                }
                $this->mysqli->close();
                return $this->data;
            }
        }

    }

?>