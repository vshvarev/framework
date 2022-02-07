<?php

namespace Framework\Controllers;

use Framework\Core\Controller;

class AccountController extends Controller
{
    public function loginAction() {
        if (!empty($_POST)) {
            $this->view->message('success', 'welcome');
        }
        $this->view->render('Login page');
    }
    public function registerAction() {
        $this->view->render('Register page');
    }
}