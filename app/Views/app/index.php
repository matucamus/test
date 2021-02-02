<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap.min.css">

    <title>App con Ajax y Codeigniter4</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand"> App Tareas</a>

        <ul class="navbar-nav ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <input type="search" name="search" id="search" class="form-control mr-sm-2" placeholder="Busca tu tarea">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"> Buscar</button>
            </form>

        </ul>
    </nav>

    <div class="container p-4">

        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form class="" id="task-form">

                            <input type="hidden" id="taskid">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="nombre" class="form-control">

                            </div>
                            <div class="form-group">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Descripcion"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block text-center">Guardar Tarea</button>

                        </form>
                    </div>
                </div>

            </div>

            <div class="col-7">


                <div class="card my-4" id="task-result">
                    <div class="card-body">
                        <ul id="container">

                        </ul>
                    </div>
                </div>

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Descripcion</td>
                        </tr>
                    </thead>
                    <tbody id="tasks"></tbody>
                </table>
            </div>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>

