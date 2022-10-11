<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Default Home'
        ];
        $this->render('home', $data);
    }
}
