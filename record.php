<?php
    $servername = "localhost"; 
    $username = "dani";
    $password = "K@[3G/jHhajtVWN[";
    $dbname = "spesefamiliari";

    $connessione = new mysqli($servername, $username, $password, $dbname); // creiamo una connessione al server con new mysqli 

    if($connessione === false){ // se la connessione non viene eseguita e da come risultato un false stamperà il messaggio di errore con i dati dell'errore. 
        die("Connessione fallita: " . $connessione->connect_error);
    }

    echo "Connessione avvenuta con successo: ". $connessione->host_info;  // $conn->host_info spiega da quale server arriva la connessione e quale tipo di protocollo si sta utilizzando. 
//spiegazione codice: abbiamo specificato 4 parametri di connessione al database e li abbiamo inseriti nel parametro di mysqli 

$sql = "INSERT INTO spesefamiliari(euro,tipoSpesa,mese) VALUES ('200','SPESA CONAD','GENNAIO'), 
('50','ciccio','GENNAIO'),
('7','detersivo','GENNAIO'),
('10','sorriso falso','GENNAIO'),
('20','birra','GENNAIO'),
('100','scommesse','gennaio')
"; // creiamo una variabile con i dati da inserire con INSERIMENTI MULTIPLI DI PIU' VALORI. ATTENZIONE OGNI VALORE VA STACCATO CON UNA VIRGOLA 

if($connessione->query($sql) === true){ //query esegue una query sul database e specifichiamo i dati che inseriamo nella variabile. 
    echo "Persona inserita con successo evvai!";
}else{
    echo "Errore durante inserimento:" . $connessione->error;
}

if($connessione->query($sql) === true){
    $ultimo_elemento = $connessione->insert_id;
    echo "L'ultima persona inserita ha l'id numero: " . $ultimo_elemento;
}else{
    echo "Errore durante ultimo inserimento " .  $connessione->error;
}

$connessione->close();
?>

