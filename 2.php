<?php
?>
    <head>
        <title>2</title>
    </head>
    <form action="" method="get">
        Username <input type="text" name="username" ></br>
        Password <input type="password" name="password"></br>
        <input type="submit" name="go">
    </form>
<?php

if(isset($_GET['go'])) {
        checkUsername($_GET['username']);
        checkPassword($_GET['password']);
    }

    function checkUsername($user) {
        $str = "";
        $fls = false;
        if(strlen($user) < 8) {
            $fls = true;
            $str = $str."Username Harus lebih dari 8 char"."</br>";
        }
        if(!preg_match('/[A-Z]/', $user)){
            $fls = true;
            $str = $str."Username Harus ada huruf kapital"."</br>";
        }
        if(!preg_match('/[a-z]/', $user)){
            $fls = true;
            $str = $str."Username Harus ada huruf kecil"."</br>";
        }
        if(!strpos($user, '_')) {
            $fls = true;
            $str = $str."Username Harus ada Underscore(_)"."</br>";
        }
        if($fls) 
            echo $str;
        else {
            echo "username valid"."</br>";
        }
    }

    function checkPassword($pass) {
        $str = "";
        $fls = false;
        if(strlen($pass) < 8) {
            $fls = true;
            $str = $str."Password Harus lebih dari 8 char"."</br>";
        }
        if(!preg_match('/[A-Z]/', $pass)){
            $fls = true;
            $str = $str."Password Harus ada huruf kapital"."</br>";
        }
        if(!preg_match('/[a-z]/', $pass)){
            $fls = true;
            $str = $str."Password Harus ada huruf kecil"."</br>";
        }
        if(!preg_match('/[1-9]/', $pass)){
            $fls = true;
            $str = $str."Password Harus ada Angka"."</br>";
        }
        if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass)) {
            $fls = true;
            $str = $str."Password Harus ada Special Character"."</br>";
        }
        if($fls) 
            echo $str;
        else {
            echo "password valid";
        }
    }
?>