<?php
echo $this->Html->script('publicaciones/add_edit', array('inline' => false));
$op = "A";
$id = $tipo = $titulo = $resumen = $contenido = "";
$estado = 1;
if (isset($data)) {
    $op = "E";
    $id = $data['id'];
    $estado = $data['estado'];
    $tipo = $data['tipo'];
    $titulo = $data['titulo'];
    $resumen = $data['resumen'];
    $contenido = $data['contenido'];
}
?>
<input id="op" type="hidden" value="<?php echo $op ?>" />
<h4 class="card-title">Completar los campos.</h4>
<div class="row">
    <?php echo $this->element('f_input', ['params' => ['name' => 'titulo', 'label' => 'Título o Referencia', 'lg' => '6', 'value' => $titulo, 'validate']]); ?>
    <?php echo $this->element('f_select', ['params' => ['name' => 'tipo', 'label' => 'Tipo publicación?', 'lg' => '3', 'default' => $tipo, 'options' => $tipo_publicacion]]); ?>
    <?php echo $this->element('f_select', ['params' => ['name' => 'estado', 'label' => 'Estado', 'lg' => '3', 'default' => $estado, 'options' => [0 => 'Inactivo', 1 => 'Activo']]]); ?>
</div>
<div class="row">
    <?php echo $this->element('f_text', ['params' => ['name' => 'resumen', 'label' => 'Breve resúmen', 'lg' => '7', 'value' => $resumen]]); ?>

</div>
<div class="row">
    <?php echo $this->element('f_text', ['params' => ['name' => 'contenido', 'label' => 'Contenido', 'lg' => '12', 'value' => $contenido]]); ?>
</div>
