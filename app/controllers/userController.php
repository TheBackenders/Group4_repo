<?php
namespace app\Controllers;
require_once __DIR__ .  '\..\models\userModel.php';
require __DIR__. '\baseController.php';
use app\Models\User;
use app\baseControllers\BaseController;


class UserController extends BaseController{

public function __construct(){
    parent::__construct();
}


public function searchuser(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $search = $_POST['searchKey'];
        $result = $this->model->find('users', $search);
        if($result){
            while($row = $result->fetch_object()){
                $user = new User();
                $user->id = $row->id;
                $user->name = $row->name;
                $user->email = $row->email;
                $arg[] = $user;
            }    
            $this->load_view('searchres',$arg);
        }else{
            $this->load_view('search',[]);
        }
}else{
    $this->load_view('search',[]);  
}
}

public function deletuser( $id){
   $res = $this->model->delet('users', $id);
   if($res){
    echo "success..";
   }else{
    echo "faild..";
   }
}
}