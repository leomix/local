<?php
session_start();
include 'functions.php';
if(!isset($_POST['search'])){
    echo 'busqueda vacia';
    exit;
}
$result = jwt_request(BASEURL.'/ws/ac/buscarINERFC',$_SESSION['token'],$_POST);
?>
<?php include 'header.php';?>
<div class="container">
    <h3>Resultado de la Búsqueda</h3>
    <a href="buscador.php" class="btn btn-primary float-right top-3em" style="width:30%;"> Buscar otro Cliente </a>
    <hr class="verde">

    <div class="row">
        <div class="col"></div>
        <div class="col-8">
        <?php if(empty($result)){
            echo '<h5> no se obtuvieron resultados</h5>';
            exit;
        }?>
            <h5>Se encontró al cliente:</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="scope" style="width: calc(100%/3);">ID</th>
                        <th class="scope" style="width: calc(100%/3);">Nombre</th>
                        <th class="scope" style="width: calc(100%/3);">RFC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$result->id?></td>
                        <td><?=$result->nombreCompleto?></td>
                        <td><?=$result->rfc?></td>
                    </tr>
                </tbody>
            </table>
            <a href="verDatos.php?id=<?=$result->id?>" class="btn btn-primary float-right" style="width:50%">Ver Datos</a>
        </div>
        <div class="col"></div>

    </div>
</div>
<?php include 'footer.php';?>

