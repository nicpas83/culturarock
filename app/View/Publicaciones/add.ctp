<?php // debug();die;?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning font-normal">Nueva Nota</div>
                </div>
                <div>
                    <?php
                    echo $this->Form->create($formHorizontal);
                    echo $this->element('publicaciones/add_edit');
                    ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group pull-right">
                                <?php echo $this->Form->button('Guardar', $guardar); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end() ?>
                </div>
            </div>
        </div>

    </div>
</div>
