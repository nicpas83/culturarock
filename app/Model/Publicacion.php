<?php

App::uses('AppModel', 'Model');

class Publicacion extends AppModel {

    public $useTable = 'publicaciones';
    
    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo Titulo es obligatorio'
        ),
        
    );
    

    

}
