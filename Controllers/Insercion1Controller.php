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

    $mar_coc = "al";
    $mod_coc = "o";
    $aut_coc = 4;


    // Llamada al método
    $sql = "INSERT INTO coches (mar_coc, mod_coc, aut_coc) VALUES ('$mar_coc', '$mod_coc', $aut_coc)";

    //printf("New record has ID %d.\n", $mysqli->ide_coc);

    $data = $oData->insertData1($sql);

    


    


?>