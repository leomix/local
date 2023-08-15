<?php
session_start();
include 'functions.php';
if(!isset($_GET['id'])){
    echo 'busqueda vacia';
    exit;
}
$result = getCurl(BASEURL.'/ws/ac/buscarId/'.$_GET['id'],$_SESSION['token'],[]);
?>
<?php include 'header.php';?>
<div class="container">
    <h3>Datos del Cliente</h3>
    <a href="buscador.php" class="btn btn-primary float-right top-3em" style="width:30%;"> Buscar otro Cliente </a>
    <hr class="verde">
    <div class="row">
        <div class="col">
        <?php if(empty($result)){
            echo '<h5> No se obtuvieron resultados</h5>';
            exit;
        }
        $cliente = $result->cliente;
        $vencidos = $result->vencidos;
        ?>
            <h5></h5>
            <!--<?php if(!@$cliente->hayNegociacion){?>
                <a href="setNegociacion.php?id=<?=$cliente->id?>" class="btn btn-warning  float-right m-2" onclick="return confirm('¿Deseas iniciar negociación con este cliente?')">Solicitar negociación</a>
            <?php }else{?>
                <div class="alert alert-warning" role="alert"> Negociación en proceso </div>
            <?php }?>-->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="scope" style="width: calc(100%/5);">ID</th>
                        <th class="scope" style="width: calc(100%/5);">Nombre</th>
                        <th class="scope" style="width: calc(100%/5);">RFC</th>
                        <th class="scope" style="width: calc(100%/5);">Categoria</th>
                        <th class="scope" style="width: calc(100%/5);">Asesor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$cliente->id?></td>
                        <td><?=$cliente->nombreCompleto?></td>
                        <td><?=$cliente->rfc?></td>
                        <td><?=$cliente->catFecha?></td>
                        <td>[<?=$cliente->idAsesor?>]<?=$cliente->nombre?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <h5>Productos Vencidos:</h5>
            <?php if(empty($vencidos)){
                echo '<h5> No se obtuvieron resultados</h5>';
                exit;
            }?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="scope" style="width: calc(100%/5);">ID</th>
                        <th class="scope" style="width: calc(100%/5);">Tipo de Producto</th>
                        <th class="scope" style="width: calc(100%/5);">Cierre</th>
                        <th class="scope" style="width: calc(100%/5);">Fecha Vencimiento</th>
                        <th class="scope" style="width: calc(100%/5);">Estado de Pago</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vencidos as $v){?>
                    <tr>
                        <td><?=$v->id?></td>
                        <td><?=$v->producto?></td>
                        <td><?=$v->cierreContrato?></td>
                        <td><?=date('d-m-Y',strtotime($v->fecha_vencimiento))?></td>
                        <td><?=getStatusPago($v->pagadoCliente)?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<script type="text/javascript">
 $(document).ready(function() {
    $('body').bind('cut copy paste', function(event) {
    event.preventDefault();
    });
 });
 document.oncontextmenu = new Function("return false");
 /** TO DISABLE SCREEN CAPTURE **/
document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        // alert('Screenshots disabled!');
    }
});

/** TO DISABLE PRINTS WHIT CTRL+P **/
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
        // alert('This section is not allowed to print or export to PDF');
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }
});
 </script>
<?php include 'footer.php';?>

