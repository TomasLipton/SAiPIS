<?php

namespace App\Controllers;

use App\Controller;
use \App\Models\Calculations as CalculatingModel;
use \App\Models\User as UserModel;

class Index
    extends Controller
{
    protected function actionDefault()
    {
        require __DIR__ . '/../template/home.php';
    }

    protected function actionAdminPanel(){
        $calculations = CalculatingModel::findAll();
        foreach ($calculations as $calculation){
            $calculation->owner = UserModel::findById($calculation->owner_id);
        }
        $users['all'] = UserModel::findAll();
        $users['admins'] = UserModel::findByColumn('role', 'admin');
        $users['default'] = UserModel::findByColumn('role', 'user');
        require __DIR__ . '/../template/adminPanel.php';
    }
}