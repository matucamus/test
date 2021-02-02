<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Esto es AJAX</h1>

    <button onclick="sendRequest()">Send Ajax </button>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div id="titulo"></div>
            </div>
        </div>
    </div>

    <!-- <script>
        function sendRequest() {

            var objeto = new XMLHttpRequest();

            objeto.open('GET', '/backend/tabla', true);
            objeto.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            objeto.onreadystatechange = function() {
                console.log(objeto.responseText);
                document.getElementById('titulo').innerHTML = objeto.responseText;
            }

            objeto.send();
        }
    </script> -->

    <script>
        function sendRequest() {

            var objeto = new XMLHttpRequest();

            objeto.open('POST', '/backend/username', true);
            objeto.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            objeto.onreadystatechange = function() {
                console.log(objeto.responseText);
                document.getElementById('titulo').innerHTML = objeto.responseText;
            }

            objeto.send('username=Verguecio');
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>