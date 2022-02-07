<?php

namespace Framework\Core;

use Framework\Lib\Db;

abstract class Model
{
    public $db;

    public function __construct() {
        $this->db= new Db();
    }
}