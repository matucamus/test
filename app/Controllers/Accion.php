<?php

namespace App\Controllers;

use App\Models\ModelTareas;

class Accion extends BaseController
{
    public function __construct()
    {
        $this->tarea = new ModelTareas();
    }

    public function search()
    {
        //captura lo enviado de Ajax por el metodo POST y busca en qsl
        $search = $_POST['search'];
        $data = $this->tarea->like('name', $search)->findAll();
        echo json_encode($data);
    }

    public function add()
    {
        //insertar lo que manda ajax por el metodo POST abreviado -->tremendo
        $this->tarea->insert($_POST);
    }
    public function edit()
    {
        //edita lo que manda ajax por el metodo POST abreviado -->tremendo
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $data = [
            'name' => $name,
            'description' => $description
        ];

        $this->tarea->update($id, $data);
    }

    public function listar()
    {
        //lista todo con el metodo findAll y lo devuelve en un JSON
        //$data = $this->tarea->findAll();
        echo json_encode($this->tarea->findAll());
    }

    public function delete()
    {
        //funcion para eliminar

        $this->tarea->delete($_POST['id']);
    }

    public function editar()
    {
        //funcionpara buscar datos

        echo json_encode($this->tarea->find($_POST['id']));
    }
}
