<?php

namespace Framework\Models;

use Framework\Core\Model;

class Main extends Model
{
    public function getNews()
    {
        $result = $this->db->row('SELECT title, content FROM post');
        return $result;
    }
}