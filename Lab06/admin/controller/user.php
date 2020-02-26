<?php
    include_once 'model/user.php';
    $userObj=new USER();
    $action="index";
        if(isset($_GET['act']))
            $action=$_GET['act'];
        switch($action){
            case "index":
                include '../view/admin/account/login.php';
                break;

            case "login":
                if (isset($_POST['btn_login']) && $_POST['btn_login']) {
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];

                    if ($userObj->checkuser($user,$pass)) {
                        $_SESSION['admin']=$user;
                        header('Location: index.php');
                    }else{
                        echo "<center style='font-weight:bold;font-size:20px;color:red;'>Sai tên đăng nhập hoặc mật khẩu</center>";
                    }
                }
                include '../view/admin/account/login.php';
                break;

            case "changepassword":
                if (isset($_POST['btn-changepassword']) && $_POST['btn-changepassword']) {
                    $oldPass=$_POST['oldPass'];
                    $newPass=$_POST['newPass'];
                    echo $oldPass;
                    echo $newPass;
                }
                include '../view/admin/account/changepassword.php';
                break;

             case "logout":
                unset($_SESSION['admin']);
                header('Location: index.php');
                break;
        }
?>