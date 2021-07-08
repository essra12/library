
<?php

switch($_POST['op']){

    case 'ADD':add_fun();
    break;
}


function add_fun(){

    global $link;



    include 'check_db_conect.php';
    
    
    $username=mysqli_real_escape_string($link,$_REQUEST['UserName']);
    $useremail=mysqli_real_escape_string($link,$_REQUEST['UserEmail']);
    $userpass1=mysqli_real_escape_string($link,$_REQUEST['Userpass1']);
    $userpass2=mysqli_real_escape_string($link,$_REQUEST['Userpass2']);
    
    $sql="INSERT INTO crateac  (UserName,UserEmail,Userpass1,Userpass2) VALUES ('$username','$useremail','$userpass1','$userpass2');";
    if(mysqli_query($link,$sql)){
        echo '<script type="text/javascript">alert("you have created your account successfully .")</script>';
        ?>
<script type="text/javascript">
window.location.href="evaluation.php" </script>
<?php
    }else 
    echo " no".mysqli_error($link);
    
    mysqli_close($link);

}

?>