<?php

namespace Framework\Controllers;

use Framework\Core\Controller;
use function Framework\Lib\Dev\debug;

class MainController extends Controller
{
    public function indexAction() {
        $result = $this->model->getNews();
        $vars = [
            'news' => $result
        ];
        $this->view->render('Main page (title)', $vars);
    }
}