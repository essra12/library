<?php


switch($_GET['op']){
    case 'Search':search();
    break;

}
/*
mysqli_set_chrset('utf8');
*/
function search(){
global $link;

    include 'check_db_conect.php';

   
    $q=$_GET['q'];
    $sql="SELECT * FROM book WHERE B_name like '%$q%'  ";
$query=mysqli_query($link,$sql);
if(empty($q))
{

   
    

    echo '<script type="text/javascript">alert("you do not search any word ! .")</script>';
    ?>
<script type="text/javascript">
window.location.href="books.php" </script>
<?php
 


    exit();
}
if(mysqli_num_rows($query)==0)
{
   
    echo '<script type="text/javascript">alert("This book is now available   .")</script>';
    ?>
<script type="text/javascript">
window.location.href="books.php" </script>
<?php
    exit();
}
else{
    if(isset($_GET['q']))
    {
while($fetsearsh=mysqli_fetch_object($query)){

  
  
echo '   <div >Search Result </div>
        
<div class="div1">.$q. </div>
<a href="aboutbook.php"> سحر القيادة </a>';



echo '<img class="div2" src="img/ly.png"> </img>
<a href="aboutbook.php">     </a>';

}


}
}


}

?>


<html>
    
    <meta charset="UTF-8">
    <head>
        <style>
           div{
                
                position: absolute;
                top: 100px;
                left: 200px;
                width: 1200px;
                height: 50px;
            text-align: center;
                background-color: #eac445;
                font-size: 30px;
            }
            
            a{
                 position: absolute;
                top: 640px;
                left: 690px;
                font-size: 42px;
                text-decoration:none;
            }
            
            .div1{
                 position: absolute;
                top: 230px;
                left: 580px;
                width: 400px;
                height: 400px;
                background-color:#f4e3a8;
            }


            .div2{
                 position: absolute;
                top: 740px;
                left: 580px;
                width: 400px;
                height: 400px;
                background-color:#f4e3a8;
            }
            .a2{
                 position: absolute;
                top: 1190px;
                left: 660px;
                font-size: 42px;
            }
        </style>
    </head>
    <body style="background-color:#fff8e0;">
    
    <div >Search Result </div>
        
        <img class="div1" src="img/ll21.jpg"> </img>
       <a href="aboutbook.php"> سحر القيادة </a>


       <img class="div2" src="img/ly.png"> </img>
       <a href="aboutbook2.php" class="a2"> الثقة و الاعتزاز بالنفس   </a>



        
    </body>
</html>