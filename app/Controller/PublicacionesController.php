<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class PublicacionesController extends AppController {

    public function index() {
//        debug($this->Publicacion->find('all'));die;
        $this->set('publicaciones', $this->Publicacion->find('all'));
    }

    public function view($id = null) {
        $this->set('publicacion', $this->Publicacion->findById($id));
    }

    public function edit($id = null) {

        $this->set('categorias', [
            'Relatos' => 'Relatos',
            'Curiosidades' => 'Curiosidades',
            'Canciones' => 'Canciones',
            'Albumes' => 'Albumes',
        ]);

        $this->set('data', $this->Publicacion->findById($id)['Publicacion']);


        if ($this->request->is('post')) {
//            debug($this->request->data);
//            die;
            $this->request->data['Publicacion']['user_id'] = $this->Auth->user('id');
            if ($this->Publicacion->saveAll($this->request->data)) {
                $this->Flash->success('La Publicación fue creada con éxio.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al grabar la Publicacion.'));
            }
        }
    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Publicacion->delete($id)) {
            $this->Flash->success('La publicación fue eliminada exitosamente.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function add() {

        $this->set('categorias', [
            'Relatos' => 'Relatos',
            'Curiosidades' => 'Curiosidades',
            'Canciones' => 'Canciones',
            'Albumes' => 'Albumes',
        ]);


        if ($this->request->is('post')) {
//            debug($this->request->data);
//            die;
            $this->request->data['Publicacion']['user_id'] = $this->Auth->user('id');
            if ($this->Publicacion->saveAll($this->request->data)) {
                $this->Flash->success('La Publicación fue creada con éxio.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al grabar la Publicacion.'));
            }
        }
    }

}
