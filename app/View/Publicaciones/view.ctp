<?php
//echo date('d-n H:i:s'); die;
// debug($items);die;
?>
<div class="row">
    <div class="col-12">
        <div class="ribbon-wrapper card col-md-7 pull-left">
            <div class="ribbon ribbon-warning"><?php echo $publicacion['Publicacion']['titulo'] ?> </div>  
            <!--<p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>-->                    
            <?php echo $publicacion['Publicacion']['resumen'] ?>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?php echo $publicacion['Publicacion']['contenido'] ?>

        </div>
    </div>
</div>

