<?php
require_once "../database_connection/db_connect.php";
?>

<?php
session_start();

$flag = false;
$firstname = $_POST["firstname"];
$secname = $_POST["secname"];
$mail_address = $_POST["email"];
$password = $_POST["password"];
$country = $_POST["country"];
$checkbox = $_POST["checkbox"];
// $c_password = $_POST["c_password"];
$pass_num_match = preg_match("@[0-9]@", $password) ;
$pass_uppercase_match = preg_match("@[A-Z]@", $password) ;
$pass_lowercase_match = preg_match("@[a-z]@", $password) ;
$pass_specialchar_match = preg_match("@[^\w]@", $password) ;

/* ==============================
        alart code Connect
 ================================*/

 $_SESSION["login_status"]=" Good Job Sir, $firstname";
 header("location: login.php");



/* ==============================
        alart code Connect
 ================================*/

/* ==============================
         username code
 ================================*/

if($firstname){
    if(ctype_alpha($firstname)){
        $_SESSION["user_old"] = $firstname;
}else{
    $flag = true ;
    $_SESSION["user_error"] = "your first name should be a alphabatic";
    header("location: register.php");
}
}else{
    $flag = true ;
    $_SESSION["user_error"] = "first name required!";
    header("location: register.php");
}

if($secname){
    if(ctype_alpha($secname)){
        $_SESSION["user_old"] = $secname;
}else{
    $flag = true ;
    $_SESSION["user_last"] = "your last name should be a alphabatic";
    header("location: register.php");
}
}else{
    $flag = true ;
    $_SESSION["user_last"] = "last name required!";
    header("location: register.php");
}

/* ==============================
         username code
 ================================*/

/* ==============================
         email address code
 ================================*/
if(filter_var($mail_address, FILTER_VALIDATE_EMAIL )){
    $_SESSION["email_old"] = $mail_address;
    
}else{
    $flag = true ;
    $_SESSION["email_error"] = "valid e-mail required!";
    header("location: register.php");
}

/* ==============================
         email address code
 ================================*/

/* ==============================
         password code
 ================================*/
if($password){
    if(strlen($password) >= 8){
        if($pass_num_match ){
            if($pass_uppercase_match ){
                if($pass_lowercase_match ){
                    if($pass_specialchar_match ){
                        $_SESSION["pass_old"] = $password;
                       
                    }else{
                        $flag = true ;
                        $_SESSION["pass_error"] = "Password must be a one special charecter!";
                        header("location: register.php");
                    }
                }else{
                    $flag = true ;
                    $_SESSION["pass_error"] = "Password must be a one lowercase";
                    header("location: register.php");
                }
            }else{
                $flag = true ;
                $_SESSION["pass_error"] = "Password must be a one uppercase";
                header("location: register.php");
            }
        }else{
            $flag = true ;
            $_SESSION["pass_error"] = "Password must be a one number";
            header("location: register.php");
        }
    }else{
        $flag = true ;
        $_SESSION["pass_error"] = "Password must be minimum 8 characters length*";
        header("location: register.php");
    }
}else{
    $flag = true ;
    $_SESSION["pass_error"] = "password required!";
    header("location: register.php");
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
    header("location: register.php");
 }
  /* ==============================
         checkbox code
 ================================*/

/* ==============================
        Database code Connect
 ================================*/

 if($flag){
    header("location: register.php");
 }else{
    $password = md5($password);
        $duplicatemail_query = "SELECT COUNT(*) AS validity FROM register_members WHERE email = '$mail_address'";
        $duplicatemail_query_connect = mysqli_query($db_connect, $duplicatemail_query);

          if(mysqli_fetch_assoc($duplicatemail_query_connect)["validity"] == 1){
            header("location: register_post.php");
            $_SESSION["duplicatemail_error_msg"] = "Sir, Your E-mail address already EXIST";
            
          }else{
            $insert_db = "INSERT INTO register_members (first_name, last_name , email , password , country ) VALUE ('$firstname', '$secname' ,'$mail_address','$password','$country')";
            $db_quary = mysqli_query($db_connect, $insert_db);
          }
 }

/* ==============================
        Database code Connect
 ================================*/
    



?>