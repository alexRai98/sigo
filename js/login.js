$(document).ready(function() {

    //INgreso Alumno
    $('#logeo').submit(function(e) {
        let user = $('#user').val();
        let pass = $('#contraseña').val();
        $.ajax({
            url: '../Utilidades/verificacionUser.php',
            data: { user, pass },
            type: 'POST',

            success: function(response) {
                console.log(response);
                //Arreglar->siempre ingresa
                if (response != '[]') {
                    let student = JSON.parse(response);
                    let user = '';
                    usuario = student.nombre;
                    alert('welcome ' + usuario);
                    document.location.href = "../Interfaces/ingresasteOrejo.php";
                } else {
                    alert('Error al ingresar\n' +
                        'Verifique usuario y contraseña');
                    $('#contraseña').val('');
                }
            }
        });

        e.preventDefault();
    });
    //Ingreso Profesores
    $('#logeo2').submit(function(e) {
        let userTeach = $('#user').val();
        let passTeach = $('#contraseña').val();
        $.ajax({
            url: '../Utilidades/verificacionUser.php',
            data: { userTeach, passTeach },
            type: 'POST',
            success: function(response) {
                console.log(response);
                // no reconoce el echo 'error'
                if (response) {
                    let teacher = JSON.parse(response);

                    // if ($('#recordar').prop('checked')) {
                    //     document.cookie = "usuario=" + teacher.login + ";";
                    //     document.cookie = "contraseña=" + teacher.clave + ";"
                    //}

                    l = `${teacher.nombre}`
                    alert('Welcome ' + teacher.nombre);
                    document.location.href = "../Interfaces/ingresasteTeacher.php";
                    //para enviar el nombre del usuario
                    $('#navbarDropdownMenuLink').html(l);
                } else {
                    alert('Error al ingresar\n' +
                        'Verifique usuario y contraseña');
                    $('#contraseña').val('');
                }


            }
        });

        e.preventDefault();
    });
    //Registro usuario
    $('#registro').submit(function(e) {
        const enviarDatos = {
            name: $('#ingresoName').val(),
            surname: $('#ingresoApellidos').val(),
            user: $('#ingresoUsername').val(),
            pass: $('#ingresoPassword').val(),
            pass2: $('#ingresoPassword2').val(),

        };
        $.post('../Utilidades/ConsultasAlumno.php', enviarDatos, function(response) {
            console.log(response);
            if (response == 3) {
                alert('verifique que las contraseñas sean iguales');
                $('#ingresoPassword').val('');
                $('#ingresoPassword2').val('');
            } else if (response == 1) {
                alert('Usuario Agregado.');
                $('#registro').trigger('reset');
            } else {
                alert('Error al agregar usuario.');
            }
        });
        e.preventDefault();
    });

});