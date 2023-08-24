<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/axios.min.js"></script>
    <script src="../js/equipos.js"></script>
    <title>Registrar Equipos</title>
</head>
<body>
    <div class="container">
        <div class="row bg-success">
            <h1 class="text-center text-white">Futsal CIES</h1>
        </div>
        <div class="row">
            <h1 class="text-center">Registrar Equipos</h1>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre del equipo</label>
                <input type="text" class="form-control" id="txtNombre">
            </div>
            <div class="mb-3">
                <label for="txtProgramaFormacion" class="form-label">Programa de formacion</label>
                <input type="text" class="form-control" id="txtProgramaFormacion">
            </div>
            <div class="mb-3">
                <label for="fileEscudo" class="form-label">Programa de formacion</label>
                <input type="file" class="form-control" id="fileEscudo">
                <div class="text-center m-3">
                    <img src="data:image/png;base64,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" alt="" id="imagePreview" style="width:200px;height: 200px;">
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" onclick="registrarEquipo()">Registrar Equipos</button>
                <a href="/sorteo" class="btn btn-primary">Ir al Sorteo</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody id="listaEquipos">
                  
                </tbody>
              </table>
        </div>
        <div class="row bg-success" class="d-flex align-items-center">
            <h3 class="text-center text-white">Todos los derechos reservados</h3>
        </div>
    </div>
</body>
<script>
const imageInput = document.getElementById('fileEscudo');
const imagePreview = document.getElementById('imagePreview');
imageInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    
    reader.onload = function(e) {
      imagePreview.src = e.target.result;
    }
    
    reader.readAsDataURL(file);
  } else {
    imagePreview.src = '';
  }
});
</script>
</html>