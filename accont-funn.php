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
    
    
    $username=mysqli_real_escape_string($link,$_REQUEST['UserName']);
    $useremail=mysqli_real_escape_string($link,$_REQUEST['UserEmail']);
    $userpass1=mysqli_real_escape_string($link,$_REQUEST['Userpass1']);
    $userpass2=mysqli_real_escape_string($link,$_REQUEST['Userpass2']);
    
    $sql="INSERT INTO createaccount  (UserName,UserEmail,Userpass1,Userpass2) VALUES ('$username','$useremail','$userpass1','$userpass2');";
    if(mysqli_query($link,$sql)){
        echo "record added successfully ";
    }else 
    echo " no".mysqli_error($link);
    
    mysqli_close($link);

}


function dis_fun(){

    
    global $link;
    //إستدعاء ملف الاتصال بقاعدة البيانات 
    include 'check_db_conect.php';

    $sql="SELECT UserName,UserEmail,Userpass1, Userpass2 FROM createaccount";/*check */

$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>User Name</th> <th>User email</th><th>password1</th><th>password2</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
	  
	echo "<tr><td>".$row["UserName"]."</td><td>".$row["UserEmail"].
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

$sql = "update createaccount SET UserName='essra sowan' where Userpass1=172038 ";

if (mysqli_query($link, $sql)) {
	
     echo "Record updated successfully";
	 
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($link);


}


function delet_fun(){
    global $link;
//إستدعاء ملف الاتصال بقاعدة البيانات 
include 'check_db_conect.php';





$sql = "Delete from createaccount where Userpass1=172038";

if (mysqli_query($link, $sql)) {
	
      echo "Record deleted successfully";
	 
} else {
	
     echo "Error Deleted record: " . mysqli_error($conn);
}
mysqli_close($link);
}
?>



