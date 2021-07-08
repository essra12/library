<?php

$name = $email = $massege  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $massege = test_input($_POST["massege"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>









<html>
    
    <head>
        <style>
        .div{
        padding: 1px;
        width: 1500px;
        height: 735px;
        background-image:linear-gradient(45deg,#eed776,#f9e07a,#fff6d2);
        
        }
        .bb{
             position: absolute;
             top: 540px;
            left: 780px;
            border: none;
            border-radius: 50px;
            width: 240px;
            height: 50px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#f8e288,#f8d131,#ffffff);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #808080;
        }
        .bb:hover{
            
            animation: hover 5s infinite;
        }@keyframes hover{
            0%{
                background-position: right;
            }
            100%{
                background-position: left;
            }
        }
        .pp{
            style="position: absolute;top: 499px;left: 700px;font-size: 28px;font-family:Gabriola;font-weight:bol
        }
        .aa:hover{
            font-weight: bolder
        }
        .name1:hover{
            border: 3px solid #c1601e;
        }
        .email1:hover{
            border: 3px solid #c1601e;
        }
        .mm1:hover{
            border: 3px solid #c1601e;
        }
        </style>
    </head>
    
    
    <body>
        
        
    <script>
/* التحقق من الادخال*/
function check_Enter() {
var NAME = document.myform.name.value;


 if(NAME==""){
alert("please enter your name");
return false
}



}
</script>


<!-- check message -->
<script>
function check_masseege() {
var NAME = document.myform.massege.value;


 if(NAME==""){
alert("please enter your message");
return false
}



}
</script>

<script>

/*التحقق من الايميل */
function isCheckEmail(inputValue) {
var foundAt = false
var foundDot = false
var atPosition = -1
var dotPosition = -1
for (var i = 0; i <= inputValue.length; i++) {

if (inputValue.charAt(i) == "@") {
foundAt = true
atPosition = i
}
else if (inputValue.charAt(i) == ".") {
foundDot = true
dotPosition = i
}
}
if ((dotPosition == -1) ||(atPosition == -1) || (atPosition > dotPosition)) {

alert("Sorry, you entered an invalid e-mail address. Please try again.")
return false } }




</script>


<script>
function massege(){
alert("Thank you for your communication whit us ^-^ ")

}

</script>

<script>
function mmg(){
alert("We Will Respond To You As Soon As Possible .");
}
 </script>



        <form   name="myform" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " >
       
        <div class="div"></div>
        <div style="position: absolute;top: 120px;left: 210px; width: 890px;height: 600px;background-color: white"></div>
        <div style="position: absolute;top: 210px;left: 280px; border: 7px solid #eed776; width: 270px;height: 300px;"></div>
        <img src="img/lo2.png" style="position: absolute;top: 250px;left: 320px;">
         <div style="position: absolute;top: 120px;left: 670px; width: 490px;height: 600px;background-color: #eed776"></div>
        
        
        <label  style="position: absolute;top: 260px;left: 700px;font-size: 22px;font-family: Gabriola;font-weight:bold">NAME</label>
        <input type="text" name="name"  onblur="check_Enter()"  class="name1" style="position: absolute;top: 260px;left: 780px; width: 250px;height: 35px;">
        
        
        <label  style="position: absolute;top: 310px;left: 700px;font-size: 22px;font-family: Gabriola;font-weight:bold">EMAIL</label>
        <input type="text"   onblur="isCheckEmail(this.value)" name="email" class="email1" style="position: absolute;top: 310px;left: 780px; width: 250px;height: 35px;">
        
        
        <label  style="position: absolute;top: 370px;left: 680px;font-size: 22px;font-family: Andalus;font-weight:bold">Message</label>
        <textarea   name="massege"  onblur="check_masseege()"  class="mm1" style="position: absolute;top: 370px; left: 780px; width: 250px; height: 140px;"></textarea>
        
        
        
        <input type="submit" onclick="mmg()"    name="contact" value="SEND" class="bb">
          
       <a   class="aa" href="books.php"  onclick="massege()" style="text-decoration: none;  font-size:23px;color: black; font-family: Felix Titling ;position: absolute;top: 9px;left: 9px;"  title="الرجوع للصفة الرئيسية  "> BACK</a> 
     
         
        
        <!--<p  style="position: absolute;top: 499px;left: 700px;font-size: 28px;font-family:Gabriola;font-weight:bold">Your Message </p>-->
        
        <p  style="position: absolute;top: -40px;left: 500px;font-size: 65px;font-family: Vladimir Script; font-weight: 500">Countact Us </p>
       
        
        
        </form>
        <div style="position: absolute;top: 744px;left: 9px; border: 2px solid #eed776; width: 1498px;height: 150px;"></div>
       
        <?php
        
echo "   <p  class='pp' > &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp <b>Your Input</b> </p>";

echo "&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp NAME &nbsp &nbsp &nbsp  &nbsp &nbsp ".$name;
echo "<br>";
echo  "&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp EMAIL &nbsp &nbsp &nbsp  &nbsp &nbsp".$email;
echo "<br>";
echo "&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp Message  &nbsp &nbsp &nbsp  &nbsp &nbsp".$massege;
echo "<br>   ";
        
?>
    </body>
    
</html>