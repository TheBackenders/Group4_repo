<?php
namespace app\BaseControllers;
require_once __DIR__ .  '\..\models\userModel.php';
use app\Models\User;

class BaseController{
    protected $model;

    public function __construct(){
        $this->model = new User();
    }
    
    public function load_view($view, $args){
        require_once __DIR__ . '\..\..\views\\'. $view. '.html';
    }

}