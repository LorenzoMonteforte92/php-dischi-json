<?php
//creare un API
    //da file server.php convertire php in jason
    //attraverso la sintassi dire al browser che si tratta di un file json
    //echo di json encode per convertire in json e attivare l'API

//usare dati API da vue
    //crea array vuoto
    //fai funzione che efettua chiamata axios all'api e testare con console.log
    //rendere l'array vuoto uguale a response.data
    //chiama funzione nel mounted
    //
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
<div id="app">
<header class="ms-header-bg-color" >
    <div class="container">
        <div class="row p-3">
            <div class="col-2">logo</div>
            <div class="col-10"></div>
        </div>
    </div>
</header>

<main class="ms-main-bg-color" >
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-8 d-flex flex-wrap gap-4">
                <div v-for="singleRecord in records" class="card ms-card-bg-color text-white" style="width: calc(100% / 3 - 1.5rem );">
                <img :src="singleRecord.poster" class="card-img-top p-3" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-text">{{ singleRecord.title }}</h5>
                    <p class="card-text">{{ singleRecord.author }}</p>
                    <p class="card-text">{{ singleRecord.year }}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>

    

</div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>
