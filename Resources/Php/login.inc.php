<?php
if(isset($_POST['submit'])){
    $uname=$_POST['logmail'];
    $pass=$_POST['logpass'];
    
    include './dbh.inc.php';
    $sql="SELECT * FROM credentials WHERE Email=?";
    $stmt=mysqli_stmt_init($Conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "sqlerror";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$uname);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result)){
            $pwdCheck=password_verify($pass,$row['UPassword']);
            if($pwdCheck==false){
                echo "wrongPass";
                exit();
            }
            elseif($pwdCheck==true){
                session_start();

                $_SESSION['username']=$row['Username'];
                $_SESSION['userType']=$row['UType'];;
                $_SESSION['loggedIn'] = "true";

                echo "success";
                exit();
            }
            else{
                echo "wrongPass";
                exit();
            }
        }
        else{
            echo "errorNoUser";
            exit();
        }

    }
   //mysqli_close($Conn);
}else{
   echo "sqlerror123";
   exit();
}