<?php 
//edit cambio nuevo
session_start();
if( !isset( $_SESSION['token'] ) || time() - $_SESSION['login_time'] > 1800)
    header('Location: formulario.php');
include 'functions.php';?>
<?php include 'header.php';?>
<div class="container">
    <h3>Búsqueda de Cliente</h3>
    <hr class="verde">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <form action="resultado.php" method="post">
                <div class="form-group">
                    <label for="search">Coloca el número de Cliente:</label>
                    <input type="text" name="search" id="search" class="form-control" autocomplete="off">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="rfc" id="rfc" class="form-check-input"> 
                    <label for="rfc" class="form-check-label">Buscar por RFC</label>
                </div>
                <input type="submit" value="Buscar" class="btn btn-primary float-right">
            </form>
    
        </div>
        <div class="col"></div>

    </div>
</div>
<?php include 'footer.php';?>
