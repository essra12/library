<?php

switch($_POST['op']){

    case 'ADD':add_fun();
    break;
    case 'Update':  update_fun();
    break;
    case 'Delete':delet_fun();
    break;
    case 'Display':dis_fun();
    break;
}



function add_fun(){

    global $link;



    include 'check_db_conect.php';
    
    $userID=mysqli_real_escape_string($link,$_REQUEST['UserID']);
    $username=mysqli_real_escape_string($link,$_REQUEST['UserName']);
    $useremail=mysqli_real_escape_string($link,$_REQUEST['UserEmail']);
    $userpass1=mysqli_real_escape_string($link,$_REQUEST['Userpass1']);
    $userpass2=mysqli_real_escape_string($link,$_REQUEST['Userpass2']);
    
    $sql="INSERT INTO crateac  (UserID,UserName,UserEmail,Userpass1,Userpass2) VALUES ('$userID','$username','$useremail','$userpass1','$userpass2');";
    if(mysqli_query($link,$sql)){
        echo '<script type="text/javascript">alert("you have created your account successfully .")</script>';
        ?>
<script type="text/javascript">
window.location.href="crate.php" </script>
<?php
    }else 
    echo " no".mysqli_error($link);
    
    mysqli_close($link);

}


function dis_fun(){

    
    global $link;
    //إستدعاء ملف الاتصال بقاعدة البيانات 
    include 'check_db_conect.php';
    $sql="SELECT UserID,UserName,UserEmail,Userpass1, Userpass2 FROM crateac";/*check */

$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0) {
  echo "<table> <tr>    <th>UserID</th>      <th>UserName</th>     <th>Useremail</th>      <th>password1</th>   <th>password2</th>   </tr>";
  while($row = mysqli_fetch_assoc($result)) {
	  
	echo  "<tr><td>".$row["UserID"]. "</td><td>".$row["UserName"]. "</td><td>".$row["UserEmail"].
	"</td><td>".$row["Userpass1"]."</td><td>".$row["Userpass2"]."</td></tr>";  
  
  } 
   echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($link);
    
    }



function update_fun(){

global $link;
include 'check_db_conect.php';

$userID=mysqli_real_escape_string($link,$_REQUEST['UserID']);
$username=mysqli_real_escape_string($link,$_REQUEST['UserName']);
$useremail=mysqli_real_escape_string($link,$_REQUEST['UserEmail']);
$userpass1=mysqli_real_escape_string($link,$_REQUEST['Userpass1']);
$userpass2=mysqli_real_escape_string($link,$_REQUEST['Userpass2']);

$sql = "update crateac SET UserName='$username',UserEmail='$useremail',Userpass1='$userpass1',Userpass2='$userpass2' where UserID='$userID' ";

if (mysqli_query($link, $sql)) {
	
    
     echo '<script type="text/javascript">alert("Record updated successfully .")</script>';
     ?>
     <script type="text/javascript">
     window.location.href="crate.php" </script>
     <?php
    } else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($link);


}


function delet_fun(){
    global $link;
//إستدعاء ملف الاتصال بقاعدة البيانات 
include 'check_db_conect.php';

$userID=mysqli_real_escape_string($link,$_REQUEST['UserID']);
$username=mysqli_real_escape_string($link,$_REQUEST['UserName']);
$useremail=mysqli_real_escape_string($link,$_REQUEST['UserEmail']);
$userpass1=mysqli_real_escape_string($link,$_REQUEST['Userpass1']);
$userpass2=mysqli_real_escape_string($link,$_REQUEST['Userpass2']);


$sql = "Delete from crateac where UserID='$userID'";

if (mysqli_query($link, $sql)) {
	
   
      echo '<script type="text/javascript">alert("Record deleted successfully.")</script>';
      ?>
      <script type="text/javascript">
      window.location.href="crate.php" </script>
      <?php

} else {
	
     echo "Error Deleted record: " . mysqli_error($conn);
}
mysqli_close($link);
}
?>

<html>

    <head>
    <style>
    table {


     
      border: 2px solid black; 
background-color:#f6e6f7;

    }
    table{
      position: absolute;
    top: 200px;
    left: 460px;
    font-size:18px;
    }
    h1{
        position: absolute;
    top: 90px;
    left: 610px;  
    }
    </style>
    </head>
    <body>
<h1 >  Display Users</h1>

    </body>
    </html>

