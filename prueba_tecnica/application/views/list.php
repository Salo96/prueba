<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud aplication</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Prueba Tecnica</a>
        </div>
    </div>

    <div class="container" style="padding-top: 10px;">

        <div class="row">
            <div class="col-md-12">
                <?php
                    $success=$this->session->userdata('success');
                    if($success){
                ?>
                <div class="alert alert-success">
                    <?=$success?>
                </div>
                <?php }
                    $error=$this->session->userdata('error');
                    if($error){
                ?>
                <div class="alert alert-danger">
                    <?=$error?>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <h3>Mostrar Producto</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?=base_url().'index.php/Controller_product/create'?>" class="btn btn-primary">Crear Producto</a>
                        <a href="#" class="btn btn-primary">Importar Arcchivo</a>
                        <a href="#" class="btn btn-primary">Exportar Arcchivo</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Producto</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>

                    <?php
                        if(!empty($product)){
                            foreach($product as $products){
                        
                    ?>

                    <tr>
                        <td><?=$products['id_producto']?></td>
                        <td><?=$products['nombre_producto']?></td>
                        <td><?=$products['descripcion']?></td>
                        <td><?=$products['cantidad']?></td>
                        <td>
                            <a href="<?=base_url().'index.php/Controller_product/edit/'.$products['id_producto']?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                        <a href="<?=base_url().'index.php/Controller_product/delete/'.$products['id_producto']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>

                    <?php
                        }//fin del foreach
                        }else{?>
                    <tr>
                    <td colspan="5"> no tienes datos aún</td>
                    </tr>

                    <?php }?>

                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>