let maxEquipos

function registrarEquipo(){
    const formData = new FormData();
    formData.append('nombre',txtNombre.value)
    formData.append('programa_formacion',txtProgramaFormacion.value)
    formData.append('escudo',fileEscudo.files[0])
    if(maxEquipos>=8){
        Swal.fire({
            title: 'Registro de equipos',
            text: 'Limite de equipos para el torneo superados',
            icon: 'error',               
            confirmButtonColor: '#3085d6',             
            confirmButtonText: 'Aceptar'
        }).then((result) => {
            if (result.isConfirmed) {
               location.reload()
            }
        })
    }else{
        axios.post('equipos',formData,{
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        })
        .then(res => {
            console.log(res)
            if (res.data.estado) {
                Swal.fire({
                    title: 'Registro de equipos',
                    text: res.data.mensaje,
                    icon: 'success',               
                    confirmButtonColor: '#3085d6',             
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                       location.reload()
                    }
                })
            }
        })
        .catch(err => {
            console.error(err); 
        })
    }
}

function read(){
    axios.get('equipos')
    .then(res => {
        console.log(res.data)
        maxEquipos = res.data.length
        let tabla = ''
        res.data.forEach((element,index) => {
            tabla += `<tr>
            <th scope="row">${index+1}</th>
            <td>${element.nombre}</td>
            <td>${element.programa_formacion}</td>
            <td>
            <img src="../storage/${element.escudo}" alt="escudo" style="width:50px;height:50px;">
            </td>
          </tr>`
        });
        listaEquipos.innerHTML = tabla
    })
    .catch(err => {
        console.error(err); 
    })
}
read()