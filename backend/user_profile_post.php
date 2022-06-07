<?php
require_once "../database_connection/db_connect.php";
?>
<?php

session_start();

if(isset($_POST['up_save'])){
    echo $id = $_SESSION["s_id"] ;
    echo $first_name = $_POST['first_name'];
    echo $last_name = $_POST['last_name'];
    echo $email = $_POST['email'];
    echo $contact = $_POST['contact'];
    echo $address = $_POST['address'];

   if($_FILES['image']['name']){
    $select_photo = $_FILES['image']['name'] ;
    $photo_explode = explode(".", $select_photo);
    $getting_extension = end($photo_explode);
    $update_photo_name = ($id .".". $getting_extension);
 
    
    $temp_location = $_FILES['image']['tmp_name'];
    $new_location = "uploads/profile_images/" . $update_photo_name;
    move_uploaded_file($temp_location , $new_location);
    $details_update_query = "UPDATE register_members SET author_image ='$update_photo_name' WHERE id = '$id'";
    mysqli_query($db_connect, $details_update_query);
   }

    $details_update_query = "UPDATE register_members SET first_name ='$first_name', last_name ='$last_name', email ='$email', contact ='$contact', address ='$address' WHERE id = '$id'";
     mysqli_query($db_connect, $details_update_query);

     
    $_SESSION["s_first_name"] = $first_name ;
    $_SESSION["s_last_name"] = $last_name ;
    $_SESSION["s_mail"] = $email ;
    $_SESSION["s_contact"] = $contact ;
    $_SESSION["s_address"] = $address ;
    
    $_SESSION["current_name_success"] = "Update name Successfully Done";
    header("location: user_profile.php");
}


?>