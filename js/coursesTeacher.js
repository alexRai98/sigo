$(document).ready(function() {

    //INgreso Alumno
    let id = '3';
    $.ajax({
        url: '../Utilidades/consultasCusos.php',
        data: { id },
        type: 'POST',
        success: function(response) {

            let cursos = JSON.parse(response);
            console.log(cursos);
            let curse = '';
            cursos.forEach(curso => {
                console.log(curso);
                curse += `<div class="card">
                <div class="card-header">
                            <div class="nav justify-content-relative">
                                <h4 class="my-2"><a href="../Interfaces/curso.php?curso=${curso.curso}&id=${curso.id}" class="text-primary">${curso.curso}</a></h4>
                            </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">${curso.descrip}</h5>
                    <p class="card-text">Cantidad de Alumnos: </p>

                </div>
            </div>`
            });
            $('#container').html(curse);

        }
    });

});