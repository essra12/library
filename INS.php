
<?php
switch($_POST['op']){
    case 'SEND':add_fun();
    break;
    case 'View Assessment':dis_fun();
    break;
    
}


function add_fun(){

    global $link;

    include 'check_db_conect.php';
    
    
    $username=mysqli_real_escape_string($link,$_REQUEST['name']);
    $useremail=mysqli_real_escape_string($link,$_REQUEST['email']);
    $usermassege=mysqli_real_escape_string($link,$_REQUEST['massege']);
    
    $sql="INSERT INTO evaluation (Uname,Uemail,Umassege) VALUES ('$username','$useremail','$usermassege');";
    if(mysqli_query($link,$sql)){
        echo " <script> alert(' Your assessment has been added ')</script>  ";
        ?>
        <script type="text/javascript">
        window.location.href="evaluation.php"</script>
        <?php
    }else {
    echo " error added ".mysqli_error($link);
    exit();
    }
    mysqli_close($link);
   
}



function dis_fun(){

    
  global $link;

  include 'check_db_conect.php';


$sql="SELECT Uname,Umassege FROM evaluation";

$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0) {
echo "<table ><tr><th>User Name</th><th>User Assessment</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
  
echo "<tr><td>".$row["Uname"]."</td><td>"
.$row["Umassege"]."</td></tr>";  

} 
 echo "</table>";
} else {
echo "0 results";
}

mysqli_close($link);
  
  }


  
  

  ?>
  <html>

  <head>
  <style>
  table{


   
    border: 2px solid black; 
background-color:#f6e6f7;
font-size:20px;
  }
  table{
    position: absolute;
  top: 230px;
  left: 490px;
  }
  h1{
    position: absolute;
  top: 100px;
  left: 590px;
  font-size:44px;
  }
  </style>
  </head>
  <body>
  <h1> Assessment </h1>
  </body>
  </html>


