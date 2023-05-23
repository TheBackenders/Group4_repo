<?php
<<<<<<< HEAD

use app\controller\UserController;
require(__DIR__."/app/controllers/userController.php");
define('BASE_PATH', '/darbni/newbranch/Group4_repo/');
$request=$_SERVER['REQUEST_URI'] ;
if ($request === BASE_PATH) {  
    $ucontroller = new UserController();
        $ucontroller->searchuser();    
    }
    
    elseif(strpos($request ,BASE_PATH.'deletuser/')===0){
        $id = substr($request, strlen(BASE_PATH . 'deletuser/'));
        $ucontroller = new UserController();
        $ucontroller->deletuser($id);  

    }
   



=======
echo "index";
>>>>>>> 41174f321255f00b8777a4e800e1a726e7a03720
?>