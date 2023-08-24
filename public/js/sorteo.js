let equiposA = []
let equiposB = []
let teams = []
const grupoA = document.getElementById("fixtureList");
const grupoB = document.getElementById("listGrupoB")
function shuffleArray(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}

function generarGrupoA() {
  const shuffledTeams = [...equiposA];
  shuffleArray(shuffledTeams);
  
  grupoA.innerHTML = "";
  
  for (let i = 0; i < shuffledTeams.length; i +=2) {
    grupoA.innerHTML += `<li><img src="../storage/${shuffledTeams[i].escudo}" style="width: 50px; height: 50px;">${shuffledTeams[i].nombre} <b>VS</b> <img src="../storage/${shuffledTeams[i+1].escudo}" style="width: 50px; height: 50px;"> ${shuffledTeams[i + 1].nombre}</li>`;
  }
}
function generarGrupoB() {
  const shuffledTeams = [...equiposB];
  shuffleArray(shuffledTeams);
  
  grupoB.innerHTML = "";
  
  for (let i = 0; i < shuffledTeams.length; i +=2) {
    grupoB.innerHTML += `<li><img src="../storage/${shuffledTeams[i].escudo}" style="width: 50px; height: 50px;">${shuffledTeams[i].nombre} <b>VS</b> <img src="../storage/${shuffledTeams[i+1].escudo}" style="width: 50px; height: 50px;"> ${shuffledTeams[i + 1].nombre}</li>`; 
  }
}

function obtenerEquipos() {
    axios.get('equipos')
    .then(res => { 
        equiposA = res.data.splice(0,4)
        equiposB = res.data
        generarGrupoA();
        generarGrupoB();
    })
    .catch(err => {
        console.error(err); 
    })
}


obtenerEquipos()