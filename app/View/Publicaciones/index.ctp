<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Publicaciones</div>
                    <p class="ribbon-content"></p>                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Filtros de búsqueda: </h4>
                <?php echo $this->Form->create(); ?>
                <?php //echo $this->Form->input('categoria', ['type' => 'select', 'options' => $categorias, 'class' => 'form-control select2', 'data-width' => "100%", 'label' => false, 'div' => false]); ?>
                <?php //echo $this->Form->button('Buscar', $buscar);?>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-block">
                <div class="table-responsive m-t-40">
                    <table id="procesosIndex" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Resúmen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($publicaciones as $publicacion) { ?>
                                <tr>
                                    <td><a href="<?php echo $this->Html->url(['controller' => 'publicaciones', 'action' => 'view',$publicacion['Publicacion']['id']]) ?>"><?php echo $publicacion['Publicacion']['titulo'] ?></a></td>
                                    <td><?php echo $publicacion['Publicacion']['categoria'] ?></td>
                                    <td><?php echo $publicacion['Publicacion']['resumen'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>    

            </div>
        </div>
    </div>
</div>



