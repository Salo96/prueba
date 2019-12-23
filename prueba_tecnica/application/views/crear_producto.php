<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud aplication</title>
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap.min.css';?>">
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Prueba Tecnica</a>
        </div>
    </div>

    <div class="container" style="padding-top: 10px;">
        <h3>Crear Usuario</h3>
        <hr>
        <form method="post" name="createUser" action="<?php echo base_url().'index.php/controller_product/create'; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="producto">Nombre del producto</label>
                        <input type="text" name="producto" class="form-control" value="<?=set_value('producto')?>">
                        <?php
                            if(form_error('producto')){
                                echo "<div class='alert alert-danger'>El campo producto no es valido</div>";
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" class="form-control" value="" style="height:100px;"><?=set_value('descripcion')?></textarea>
                        <?php
                            if(form_error('descripcion')){
                                echo "<div class='alert alert-danger'>El campo descripcion no es valido</div>";
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" value="<?=set_value('cantidad')?>">
                        <?php
                            if(form_error('cantidad')){
                                echo "<div class='alert alert-danger'>El campo cantidad no es valido</div>";
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Crear</button>
                        <a href="<?=base_url().'index.php/Controller_product/index'?>" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

   

</body>
</html>