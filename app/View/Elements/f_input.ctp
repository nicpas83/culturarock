<?php
$validate = "";
$validation = "";
$validationMsg = "";
$maxLength = "";
$lg = isset($params['lg']) ? $params['lg'] : '12';
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";
$value = isset($params['value']) ? $params['value'] : "";
$maxLengthValue = isset($params['maxLength']) ? $params['maxLength'] : "";
foreach ($params as $val) {
    if ($val == 'validate') {
        $validate = "*";
        $validation = "data-validation-required-message";
        $validationMsg = "El campo " . $label . " es obligatorio.";
    } 
}
if (!empty($maxLengthValue)) {
    $maxLength = "maxLength";
}

$options = [
    'type' => 'text',
    'value' => $value,
    $validation => $validationMsg,
    $maxLength => $maxLengthValue,
];
?>

<div class="col-lg-<?php echo $lg ?>">
    <div class="form-group">
        <label><?php echo $label ?><span class="text-danger"><?php echo $validate ?></span></label>
        <div class="controls">
            <?php echo $this->Form->input("" . $name . "", $options) ?>
        </div>
    </div>
</div>