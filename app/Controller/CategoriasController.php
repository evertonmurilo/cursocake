<?php

class CategoriasController extends AppController {
    //put your code here
    public function index() {
        $this->paginate = array('limit' => 10);
        $this->set("Categorias",$this->Paginate());
    }
    
    public function cadastrar() {
        if($this->request->is('post')) {
            $this->Categoria->create();
            if($this->Categoria->save($this->data)) {
                $this->Session->setFlash("Categoria cadastrada com sucesso!");
                $this->request->data = array();
            }
            else {
                $this->Session->setFlash("Ocorreu um erro ao inserir a categoria.");
            }
        }
    }
    
    public function editar($id) {
        if($this->request->is('post') || $this->request->is('put')) {
            $this->Categoria->create();
            if($this->Categoria->save($this->data)) {
                $this->Session->setFlash("Categoria alterada com sucesso!");
                $this->request->data = array();
            }
            else {
                $this->Session->setFlash("Ocorreu um erro ao alterar a categoria.");
            }
        } elseif ($this->request->is('get') && is_numeric($id)) $this->request->data = $this->Categoria->read(null,$id);
    }
    
    public function delete($id) {
        if ($this->request->is('get') && is_numeric($id)) {
            if($this->Categoria->delete($id)) {
                $this->Session->setFlash('Categoria excluída com sucesso!');
            }
            else {
                $this->Session->setFlash("Ocorreu um erro ao excluir a categoria.");
            }
        }
        $this->redirect(array("action"=>"index"));
    }
    
    public function beforeFilter() {
        
    }
    public function beforeRender() {
        
    }
    public function afterFilter() {
        
    }
}
