<?php
require_once "../database_connection/db_connect.php";
?>
<?php
 session_start();

$mail_address=$_POST["email"];
$password=$_POST["password"];
$checkbox = $_POST["checkbox"];
$pass_num_match=preg_match("@[0-9]@", $password);
$pass_uppercase_match=preg_match("@[A-Z]@", $password);
$pass_lowercase_match=preg_match("@[a-z]@", $password);
$pass_specialchar_match=preg_match("@[^\w]@", $password);

  /* ==============================
        logout view code Connect
 ================================*/
 $_SESSION["logoutnotview"] = $mail_address ;

 /* ==============================
       logout view code Connect
 ================================*/

/* ==============================
         email address code
 ================================*/
if(filter_var($mail_address, FILTER_VALIDATE_EMAIL)) {}

else {
   
    $_SESSION["email_error"]="valid e-mail required!";
    header("location: login.php");
}

/* ==============================
         email address code
 ================================*/

/* ==============================
         password code
 ================================*/
if($password) {
    if(strlen($password) >=8) {
        if($pass_num_match) {
            if($pass_uppercase_match) {
                if($pass_lowercase_match) {
                    if($pass_specialchar_match) {}

                    else {
                        $_SESSION["pass_error"]="Password must be a one special charecter!";
                        header("location: signin.php");
                    }
                }

                else {
                    $_SESSION["pass_error"]="Password must be a one lowercase";
                    header("location: signin.php");
                }
            }

            else {
                $_SESSION["pass_error"]="Password must be a one uppercase";
                header("location: signin.php");
            }
        }

        else {
            $_SESSION["pass_error"]="Password must be a one number";
            header("location: signin.php");
        }
    }

    else {
        $_SESSION["pass_error"]="Password must be minimum 8 characters length*";
        header("location: signin.php");
    }
}

else {
    $_SESSION["pass_error"]="password required!";
    header("location: signin.php");
}

/* ==============================
         password code
 ================================*/

   /* ==============================
         checkbox code
 ================================*/
 if($checkbox){

}else{
   $flag = true ;
   $_SESSION["check_error"] = "select checkbox required!";
   header("location: login.php");
}
 /* ==============================
        checkbox code
================================*/

 /* ==============================
        Database code Connect
 ================================*/

// $db_connect = mysqli_connect("localhost", "root", "", "loginform");
$password = md5($password);
$count_db = "SELECT COUNT(*) AS 'result' FROM register_members WHERE email = '$mail_address' AND password = '$password'";
$db_quary=mysqli_query($db_connect, $count_db);

if(mysqli_fetch_assoc($db_quary)['result'] == 1 ) {
    // $_SESSION["s_password"] = $password ;
    $_SESSION["s_mail"] = $mail_address ;
    $select_query = "SELECT id, first_name , last_name , country , contact , address FROM register_members WHERE email = '$mail_address'";
    $selected_query_connect = mysqli_query($db_connect, $select_query);
    $after_assoc = mysqli_fetch_assoc($selected_query_connect);
    $_SESSION["s_id"] = $after_assoc['id'] ;
    $_SESSION["country"] = $after_assoc['country'] ;
    $_SESSION["s_contact"] = $after_assoc['contact'] ;
    $_SESSION["s_address"] = $after_assoc['address'] ;
    $_SESSION["s_first_name"] = $after_assoc['first_name'] ;
    $_SESSION["s_last_name"] = $after_assoc['last_name'] ;
    
    // $_SESSION["s_num"] = $after_assoc["phone_numbers"] ;

    header("location: ../backend\dashboard.php");
}

else {

    $_SESSION["login_error_status"] = "**Incorrect Data Detected!**";
    header("location: login.php");
}

/* ==============================
        Database code Connect
 ================================*/

?>