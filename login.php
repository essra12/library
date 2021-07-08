
<?php

global $link;
 
include 'check_db_conect.php';



if(isset($_POST['login'])){
    $user=$_POST['name'];
    $pass=$_POST['password'];
    $query="SELECT UserName,UserPass1 FROM crateac WHERE UserName='".$user."' and  UserPass1='".$pass."' ";
$result=mysqli_query($link,$query);
if($result){
while($row=mysqli_fetch_array($result)){

echo '<script type="text/javascript">alert("you are login successfully")</script>';

}
if(mysqli_num_rows($result)>0)
{
    ?>
<script type="text/javascript">
window.location.href="evaluation.php"</script>
<?php

}


echo '<script type="text/javascript">alert("your data is rong")</script>';


}

}
?>




<html>
    
  <head>
  <script src="JS.js"></script>

    <style>
        
        .login{
            
            position: absolute;
            top: 460px;
            left: 845px;
            border: none;
            border-radius: 50px;
            width: 180px;
            height: 46px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#87cfef,#c03f3f,#6cd2ff);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3)
        }
        
        .login:hover{
            
            animation: hover 5s infinite;
        }
        @keyframes hover{
            0%{
                background-position: right;
            }
            100%{
                background-position: left;
            }
        }
        
        .Dd{
            position: absolute;
            top: 10px;
            left: 5px;
            border: none;
            border-radius: 50px;
            width: 70px;
            height: 34px;
            font-size: 19px;
            background-image:linear-gradient(45deg,#87cfef,#87cfef,#ad67d6);
           
       
        }

        .login1{
            
            position: absolute;
            top: 530px;
            left: 845px;
            border: none;
            border-radius: 50px;
            width: 180px;
            height: 46px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#87cfef,#c03f3f,#6cd2ff);
            
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3)
        }
        
        .login1:hover{
            
            animation: hover 5s infinite;
        }
        @keyframes hover{
            0%{
                background-position: right;
            }
            100%{
                background-position: left;
            }
        }

        .name{
            opacity: 0.8;
            background-color: white;
            border-radius: 0%;
            position: absolute;
            top: 280px;
            left: 810px;
            border:none;
            width: 280px;
            height: 40px;
        }
        .name:hover{
            border: 2px solid #df966c;
           
        }
        .pass{
            opacity: 0.8;
            background-color: white;
             border-radius: 5%;
              position: absolute;
              top: 350px;
              left: 810px;
               border: none;
               width: 280px;
               height: 40px;
        }
        .pass:hover{
            border: 2px solid #df966c;
            
        }
        .aa:hover{
            font-weight: bolder

        }
        
    </style>
  </head>  
    
    <body  style="background-image:linear-gradient(45deg,#f8f1d3,#f8f1d3,#fff8db);">
      
      

    <script>

function validation(){

if(password.length<5 )
alert("id must be at last 5 charactar long");
return false;


}
</script>
    
    
    
        <script>
            function check_name(){
                
                var name1=document.myform.name.value;
               
                if(name1==" "){

      alert("enter your name please ");
      return false;
}
 }



<script>



</script>



        </script>
      



      </script>
    
    
    
        <script>
            function check_pass(){
                
                var pass=document.myform.password.value;
               
                if(pass==""){

      alert("enter your password please ");
      return false;
}
 }   
        </script>
      
      
      
      
      
      
      <form  name="myform"    method="post">
      
       <img src="img/nn99.jpg"  style="position: absolute; top: 50px;left: 300px;width: 400px;height: 600px;">
        <div style="   position: absolute;top: 50px;left: 700px;   background-color: #e4f8f0;width: 470px;height: 600px; "></div>
        
        
        <h2  style="position:absolute; top:250px;left: 810px; font-size: 15px;color: #df966c"> UserNmae</h2>
        <h2  style="position:absolute; top:320px;left: 810px; font-size: 15px;color:#df966c"> Password</h2>
        
        
        
        
        <h1  style="position: absolute;top: 140px;left: 825px;font-size: 30px; font-weight: bolder;font-family: Felix Titling ;color:#df966c;">User Login</h1>
        <input      type="text" class="name"  name="name"  onblur="check_name()"  required >
        <input type="password"   class="pass"   name="password"  onblur="check_pass()" required  >
        
        
        <input type="submit" name="login"    value="Login"class="login">
        
        <button class="login1"    >
   
           <a   class="aa" href="creat_user_account.php" style="text-decoration: none; color: white;"  title=" Sing Up  "> Create account </a> 

        </button>

        <div class="Dd"></div>


        
        <a   class="aa" href="aboutbook.php" style="text-decoration: none;  font-size:23px;color: black; font-family: Gabriola ;position: absolute;top: 9px;left: 9px;"  title="الرجوع للصفة السابقة  "> BACK</a> 
        
        <div class="div"></div>
        
        </form>
        
     
        
    </body>
    
    
</html>