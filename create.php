<?php
include_once 'components/header.php';
?>

<?php
include_once 'components/navbar.php';
?>

    <div class="container jumbotron">
        <div class="container-center">
            <h2>Creación de usuarios</h2>
            <!--<form method="post" action="process.php">-->
            <form>
                <div>
                    <p class="lead">Carnet:</p>
                    <input type="text" class="lead" name="user" id="user" onkeyup="searchId(this.value)">
                    <span class="lead" id="idMessage"></span>
                </div>
                <div>
                    <p class="lead">Nombre: </p>
                    <input type="text" class="lead" name="firstName" id="firstName">
                </div>
                <div>
                    <p class="lead">Apellido: </p>
                    <input type="text" class="lead" name="lastName" id="lastName">
                </div>
                <div>
                    <p class="lead">Contraseña:</p>
                    <input type="password" class="lead" name="password" id="password">
                </div>
                <div class="lead">
                    <input type="hidden" value="4" name="type" id="type">
                    <input type="button" class="btn btn-primary" id="createUser" data-toggle="modal"
                           data-target="#messageModal" onclick="sendData()" value="Guardar">
                </div>
            </form>
        </div>
    </div>

<?php
include_once 'components/footer.php';
?>