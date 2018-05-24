<?php

namespace App\Controllers;


use App\Controller;
use \App\Models\Calculations as CalculatingModel;

class Calculations
    extends Controller
{
    public function actionAll()
    {
        $calculations = CalculatingModel::findByColumn('owner_id', $this->user->id);
        require __DIR__ . '/../template/calculations/all.php';
    }


    public function actionOne()
    {
        $id = trim($_GET['id']);
        $calculation = CalculatingModel::findById($id);
        require __DIR__ . '/../template/calculations/one.php';
    }

    public function actionSave()
    {
        $calculating = new CalculatingModel();
        $calculating->owner_id = $this->user->id;
        $calculating->title = $_POST['title'];
        $calculating->data = $_POST['data'];
        $calculating->save();
        print_r($calculating);
    }

    public function actionDelete()
    {
        $id = trim($_GET['id']);
        $calculation = CalculatingModel::findById($id);
        $calculation->delete();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}