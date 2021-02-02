


// todo lo maneja javascript

$(function () {
    console.log('Jquery Ok');
    $('#task-result').hide();
    obtenertareas();
    let editar = false;



    $('#search').keyup(function () {
        let search = $('#search').val();
        console.log(search);
        $.ajax({
            'url': '/accion/search',
            type: 'POST',
            data: { search },
            success: function (response) {
                //console.log(response);
                let tareas = JSON.parse(response);
                let template = '';

                tareas.forEach(tarea => {
                    //console.log(tareas);
                    template += `<li>
                    ${tarea.name} 
                    </li>`

                });

                $('#container').html(template);
                $('#task-result').show();

            }
        })
    });


    $('#task-form').submit(function (e) {

        //almacena los datos enviados por POST en un Objeto postData

        const postData = {

            //capturo los datos del id=""
            name: $('#name').val(),
            description: $('#description').val(),
            id: $('#taskid').val()


        };

        let url = editar === false ? '/accion/add' : '/accion/edit';

        //enviar mediante POST enviandole postData
        $.post(url, postData, function (response) {

            console.log(response);

            //resetaer el formulario 
            $('#task-form').trigger('reset');

            //ejecutar listar tareas para ver el nuevo dato ingresado
            obtenertareas();
        });

        console.log(postData);
        e.preventDefault();

    });

    function obtenertareas() {
        $.ajax({
            url: '/accion/listar',
            type: 'GET',
            success: function (response) {

                console.log(response);

                //convertir el JSON a un arreglo
                let tareas = JSON.parse(response);

                let template = '';

                tareas.forEach(task => {
                    template += `
                        <tr tareaID="${task.id}">
                            <td>${task.id}</td>
                            <td>
                                <a href="#" class="class-item"> ${task.name}</a>
                            </td>
                            <td>${task.description}</td>
                            <td>
                                <button class="btn btn-danger delete">Eliminar</button>
                            </td>
                        </tr>
                    
                    `
                })

                $('#tasks').html(template);
            }
        });
    }


    $(document).on('click', '.delete', function () {

        if (confirm('Vas a eliminar el registro?')) {
            let elemento = $(this)[0].parentElement.parentElement;

            let id = $(elemento).attr('tareaID');

            console.log(id);

            $.post('/accion/delete', { id }, function (response) {

                console.log(response);

                //resetaer el formulario 
                //$('#task-form').trigger('reset');

                //ejecutar listar tareas para ver el nuevo dato ingresado
                obtenertareas();
            });

        }

    });

    $(document).on('click', '.class-item', function () {

        let elemento = $(this)[0].parentElement.parentElement;

        let id = $(elemento).attr('tareaID');

        // console.log(id);

        // console.log('editar');

        $.post('/accion/editar', { id }, function (response) {
            console.log(response);
            let tarea = JSON.parse(response);

            $('#taskid').val(tarea.id);
            $('#name').val(tarea.name);
            $('#description').val(tarea.description);

            editar = true;


        })


    })



});
