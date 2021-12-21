
/*
 Stampare a schermo i dischi musicali (file allegato) in due modi diversi:- Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. Teniamo i dati dei dischi in un file separato.- Utilizzando Html, JS, Vue e Axios (CDN), PHP: Al caricamento della pagina axios chiederà attraverso una chiamata API i dischi a file PHP e li stamperà attraverso Vue.Pensate al CSS solo come fase finale, se vi resta tempo.Nella repo potete creare due cartelle: una per la versione solo PHP e una per la versione AJAX.
*/



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi-PhP</title>
</head>
<body>
    <header>
        <img src="./img/logo.png" alt="">
        <h1>
            dischi
        </h1>

    
    </header>

<?php
include __DIR__ . './partials/templates/main.php';
?>

    

    
</body>
</html>