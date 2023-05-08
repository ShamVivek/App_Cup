<?php
if (isset($_POST['submit'])) { //checking if button has been clicked to arrive at this page
    //getting data from form via POST method
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pwd'];
    $uType = "USER";
    $ExistingUsername = false;
    $ExistingEmail = false;

    //Connection to database
    include "./dbh.inc.php";
    //Search for Existing Username and Email
    //$sql = "SELECT Username,Email FROM credentials WHERE Username=?,Email=?";
    $sql = "SELECT * FROM credentials";
    $stmt = mysqli_stmt_init($Conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "sqlerror";
        exit();
    } else {
        //mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            //Search for existing email
            if ($email == $row["Email"]) {
                $ExistingEmail = true;
            }
            //Search for existing Username
            if ($uname == $row["Username"]) {
                $ExistingUsername = true;
            }
        }
        //Inform that Email or Username is already taken
        if ($ExistingEmail) {
            echo "errorEmailTaken";
            exit();
        } elseif ($ExistingUsername) {
            echo "errorUnameTaken";
            exit();
        }

        //Insert into Database
        $sql = "INSERT INTO credentials (Username,Email,UPassword,UType) VALUES (?, ?, ?,?)";
        $stmt = mysqli_stmt_init($Conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "sqlerror";
            exit();
        } else {
            $hashpwd = password_hash($pass, PASSWORD_DEFAULT); //hashing the password so no one can read it in database
            mysqli_stmt_bind_param($stmt, "ssss", $uname, $email, $hashpwd, $uType);
            mysqli_stmt_execute($stmt); //executing the prepared statement
            

            //Searching Session
            session_start();
            $_SESSION['username'] = $uname;
            $_SESSION['userType'] = "USER";
            $_SESSION['loggedIn'] = "true";
echo "success";
            exit();
        }

    }

    // mysqli_stmt_close($stmt);
    //mysqli_close($Conn);
} else {
    echo "sqlerror";
    exit();
}