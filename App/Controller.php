<?php

namespace App;

use App\Models\User;
use App\Controllers\User as UserController;

abstract class Controller
{

    protected $settings;
    protected $user;

    public function __construct()
    {
        $this->settings = require_once __DIR__ . '/settings.php';
        $this->user = User::findById($_SESSION['user']['id']);
    }

    public function action($name)
    {
        if (true || User::isIn() || 'Auth' == $name) {
            $name = 'action' . $name;
            $this->$name();
        } else {
            UserController::showLoginForm();
        }
    }

}