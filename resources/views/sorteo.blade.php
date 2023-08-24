<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/axios.min.js"></script>
    <title>Sorteo de equipos</title>
</head>
<body>
    <div class="row bg-success">
        <h1 class="text-center text-white">Futsal CIES</h1>
    </div>
    <h2 class="text-center">Sorteo</h2>
    <hr>
    <h2 class="text-center">Equipos</h2>
    <ul id="teamList"></ul>
    <div class="row"> 
        <div class="col-6">
            <h2>Grupo A</h2>
            <ul id="fixtureList"></ul>
        </div>
        <div class="col-6">
            <h2 >Grupo b</h2>
            <ul id="listGrupoB"></ul>
        </div>
    </div>
    <div class="row bg-success" class="d-flex align-items-center">
        <h3 class="text-center text-white">Todos los derechos reservados</h3>
    </div>
</body>
<script src="../js/sorteo.js"></script>
</html>
