<?php

declare(strict_types=1);
namespace app\Models;
require_once __DIR__ . '\BaseModel.php';
use app\baseModels\baseModel;

class User extends baseModel{

    public int $id;
    public string $name;
    public string $email;

    public function __construct(){
        parent::__construct();
    }

}