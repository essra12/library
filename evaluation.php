<?php






?>


<html>
    
    <head>
        <script src="asscssment.js"> </script>


        <style>
        .div{
            position: absolute;
             top: 1px;
            left: 1px;
        width: 1533px;
        height: 749px;
        background-image:linear-gradient(45deg,#fdfbfd,#fdfbfd,#fbfbfb);
        
        }
        .bb{
             position: absolute;
             top: 540px;
            left: 860px;
            border: none;
            border-radius: 50px;
            width: 240px;
            height: 50px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#ed28c2,#a3a3a3,#fd66ff);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: white;
        }
        .bb:hover{
            background-image:linear-gradient(45deg,#f0d8f0,#ed6eed,#be41c0);
        }
        .pp{
            style="position: absolute;top: 499px;left: 700px;font-size: 28px;font-family:Gabriola;font-weight:bol
        }
        .aa:hover{
            font-weight: bolder;
        }
        .bb1{
             position: absolute;
             top: 600px;
            left: 860px;
            border: none;
            border-radius: 50px;
            width: 240px;
            height: 50px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#ed28c2,#a3a3a3,#fd66ff);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: white;
        }
        .bb1:hover{
            background-image:linear-gradient(45deg,#f0d8f0,#ed6eed,#be41c0);
        }
        </style>
    </head>
    
    
    <body>
        
        
    <script>
/* التحقق من الادخال*/
function check_name() {
var NAME = document.myform.name.value;


 if(NAME==""){
alert("please enter your name");
return false
}



}
</script>

<!-- التحقق من التقييم -->
<script>
function check_evaluation() {
var NAME = document.myform.massege.value;


 if(NAME==""){
alert("please enter your Assessment ");
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




        <form   onsubmit="check_name0()"   name="myform" method="post"  action="INS.php " >
      
<!--
        <script>

function check_nameo(){
var name=document.myform.name.value;
var email=document.myform.email.value;
if(name==""||name==null)
{
    alert("enter your name");
    return false;
}
else if(email==""|| email==null)
{
    alert("enter email ");
    return false;
}
}
</script>
-->


        <div class="div"></div>
        <div style="position: absolute;top: 90px;left: 190px; width: 890px;height: 600px;background-color: white"></div>
        <div style="position: absolute;top: 90px;left: 220; width: 390;height: 350;border:5px solid #d57ed5;"></div>
       <!-- <div style="position: absolute;top: 210px;left: 280px; border: 7px solid #eed776; width: 270px;height: 300px;"></div>-->
        <img src="img/PURPUL.jpeg" style="position: absolute;top: 90px;left: 190px;width: 600px; height: 600px; ">
        <div style="position: absolute;top: 90px;left: 679px; width: 540px;height: 600px;background-color: #e9dde9"></div>
        
        
        <label  style="position: absolute;top: 230px;left: 740px;font-size: 22px;font-family: Gabriola;font-weight:bold">NAME</label>
        <input type="text" name="name" onblur="check_name()" style="position: absolute;top: 230px;left: 850px; width: 250px;height: 35px;"  required>
        
        
        <label  style="position: absolute;top: 280px;left: 740px;font-size: 22px;font-family: Gabriola;font-weight:bold">EMAIL</label>
        <input type="text"   onblur="isCheckEmail(this.value)" name="email" style="position: absolute;top: 280px;left: 850px; width: 250px;height: 35px;"   required>
        
        
        <label  style="position: absolute;top: 340px;left: 720px;font-size: 22px;font-family: Andalus;font-weight:bold">Assessment</label>
        <textarea   name="massege" onblur="check_evaluation()" style="position: absolute;top: 340px; left: 850px; width: 250px; height: 140px;"   required></textarea>
        
        
        
        <input type="submit"   name="op"  onclick="check_Enter()"  value="SEND" class="bb">

        
        <!--<input type="submit"   name="op"  title="عرض التقييمات السابقة "   value=" View Assessment" class="bb1">-->
          


     <div   style="position: absolute;top: 9px;left: 9px;border-radius: 50px; background-image:linear-gradient(45deg,#e98ae9,#eabeea,#e98ae9);

     width: 90px; height: 40px;"></div>
                <a   class="aa" href="aboutbook.php" style="text-decoration: none; font-size:24; color: black; font-family: Gabriola ;position: absolute;top: 9px;left: 32px;"  title="الرجوع للصفحة السابقة  "> BACK</a> 

        
        <!--<p  style="position: absolute;top: 499px;left: 700px;font-size: 28px;font-family:Gabriola;font-weight:bold">Your Message </p>-->
        
        <p  style="position: absolute;top: 30px;left: 820px;font-size: 60px;font-family: Vladimir Script; font-weight: 500">Assessment  </p>
       
        
        
        </form>
       
        
    </body>
    
</html>