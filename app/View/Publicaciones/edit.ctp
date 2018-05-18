<?php
//debug($proceso);
//debug($items);die;       
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Editar Proceso de Compra</div>
                    <h2 class="ribbon-content text-justify"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur, mi sit amet placerat vehicula, lorem elit ultricies nunc, sed lacinia ipsum orci ac ipsum.
                    </h2>
                </div>

                <?php
                echo $this->Form->create($formHorizontal);
                echo $this->element('procesos/add_edit');
                ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php echo $this->Form->button('Actualizar', ['class' => 'btn btn-info']); ?>
                        </div>
                    </div>
                </div>

                <?php echo $this->Form->end() ?>

            </div>
        </div>
    </div>
</div>