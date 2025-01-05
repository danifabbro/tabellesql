<?php
    $servername = "localhost"; 
    $username = "dani";
    $password = "K@[3G/jHhajtVWN[";
    $dbname = "spesefamiliari";

    $connessione = new mysqli($servername, $username, $password, $dbname);

    if($conn === false){
        die("Connessione fallita: " . $connessione->connect_error);
    }

    echo "Connessione avvenuta con successo: ". $conn->host_info;  // $conn->host_info spiega da quale server arriva la connessione e quale tipo di protocollo si sta utilizzando. 
//spiegazione codice: abbiamo specificato 4 parametri di connessione al database e li abbiamo inseriti nel parametro di mysqli 
?>

