<?php namespace App\Controllers;

use App\Models\ModelTareas;

class Home extends BaseController
{
	public function index()
    {
        $tareas = new ModelTareas();
        $data = [
            'tareas' => $tareas->findAll()
        ];
        return view('app/index', $data);
    }

}
