<?php
namespace App\Modules\Demo\Controllers;
use App\Controllers\BaseController;


class Main extends BaseController
{
    public function __construct(){

    }

    public function index(){
        $data = [
            'title' => 'Demo title'
        ];
        $this->render_module('main', $data);
    }

    public function cuba(){
        return redirect()->to('/login');
    }
}