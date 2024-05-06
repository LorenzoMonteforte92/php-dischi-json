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

//selezionare un singolo disco
    //nel server va specificato che di base response chiama tutto l'oggetto
    //se si chiama il queryparam index allora l'indice viene salvato in una variabile e il response sarà uguale a $record[$recordIndex]
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
            <div class="col-2 text-white"><img src="./img/logo.svg" alt=""></div>
            <div class="col-10"></div>
        </div>
    </div>
</header>

<main class="ms-main-bg-color" >
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center">
      <div class="card ms-card-bg-color text-white" style="width: 100%;" >
                <img :src="selectedRecord.poster" class="card-img-top p-3" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-text">{{ selectedRecord.title }}</h5>
                    <p class="card-text">{{ selectedRecord.author }}</p>
                    <p class="card-text">{{ selectedRecord.year  }}</p>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-8 d-flex flex-wrap gap-4">
                <div @click="selectSingleRecord(index)" v-for="singleRecord, index in records" class="card ms-card-bg-color text-white" style="width: calc(100% / 3 - 1.5rem );" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>
