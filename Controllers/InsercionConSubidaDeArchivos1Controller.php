<?php

    if (file_exists("../Db/Con1Db.php")){
        // Llamada a la conexión
        require_once "../Db/Con1Db.php";
        // Llamada al modelo
        require_once "../Models/Insercion1Model.php";
    }
    elseif(file_exists("./Db/Con1Db.php")){

    }

    // Instancia del objeto
    $oData = new Datos;

    $mar_coc = "1"
    $mod_coc = "2";
    $aut_coc = "3";

    // Llamada al método
    $sql = "INSERT INTO coches (mar_coc, mod_coc, aut_coc) VALUES ('$mar_coc', '$mod_coc', '$aut_coc');";

    $data = $oData->insertData1($sql);

    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos
            </div>
        ";
    }
    else
    {
        echo
        "
            <div class='bloque1 negrita'>
                <div class='bloque1'>Marca</div>
                <div class='bloque1'>Modelo</div>
                <div class='bloque1'>Autonomía</div>
            </div>     
        ";
        foreach($data as $row)
        {
            echo
            "
                <div class='bloque0'>    
                    <div class='bloque1'>$row->mar_coc</div>
                    <div class='bloque1'>$row->mod_coc</div>
                    <div class='bloque1'>$row->aut_coc</div>
                </div>
            ";
        }
    }


    


?>