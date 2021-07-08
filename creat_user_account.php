<?php


?>


<html>

<head>
<script src="AddJS.js"></script>

    <style>


        .AA{
            position: absolute;
            top: 1px;
            left: 1px;
            width: 1534px;
            height: 750px;
            background-color:#f4f4f4;
        }
.div1{

position: absolute;
top: 100px;
left: 735px;
width: 490px;
height: 570px;
background-color: #f7e2e9;
/*border:3px solid #efa4bc;*/

}
.div2{

position: absolute;
top: 100px;
left: 245px;
width: 490px;
height: 570px;
background-color: white;
/*border:3px solid #efa4bc;*/

}
/*
.div2{

position: absolute;
top: 100px;
left: 270px;
width: 480px;
height: 570px;
background-color: white;

}
*/
.IDN{
    position: absolute;
top: 190px;
left: 580px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;
}


.ID{
    

position: absolute;
top: 190px;
left: 680px;
width: 230px;
height: 35px;
}
.Name{

position: absolute;
top: 240px;
left: 810px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;

}


.uname{

position: absolute;
top: 240px;
left: 890px;
width: 230px;
height: 35px;
}










.Name2{

 position: absolute;
top: 300px;
left: 810px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;


}
.uemail{

position: absolute;
top: 300px;
left: 890px;
width: 230px;
height: 35px;

}


.Name3{

position: absolute;
top: 360px;
left: 790px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;


}
.pass1{
    position: absolute;
top: 360px;
left: 890px;  
width: 230px;
height: 35px;
}



.Name4{

position: absolute;
top: 420px;
left: 790px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;
}
.pass2{
    position: absolute;
top: 420px;
left: 890px;  
width: 230px;
height: 35px;
}



.add{
 position: absolute;
top: 510px;
left: 880px;  
border: none;
            border-radius: 50px;
            width: 220px;
            height: 53px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#d4a1d5,#928f92,#d4a1d5);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;

}
.add:hover{
    background-image:linear-gradient(45deg,#d4a1d5,#907291,#907291);

}
.dis{
    position: absolute;
top: 510px;
left: 720px; 
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#da3e70,#878384,#da3e70);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}
.dis:hover{
    background-image:linear-gradient(45deg,#be144a,#be144a,#878384);

}
.del{
    position: absolute;
top: 510px;
left: 900px;
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#e7a310,#ffffff,#915109);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}
.del:hover{
    background-image:linear-gradient(45deg,#e7a310,#f7cfa2,#b96300);

}
.upd{
    position: absolute;
top: 590px;
left: 720px;
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#e7a310,#cc36ce,#cc36ce);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}
.upd:hover{
    background-image:linear-gradient(45deg,#e7a310,#f7cfa2,#b96300);

}


.buton{

    position: absolute;
    top: 5px;
    left: 5px;
    border: none;
            border-radius: 50px;
            width: 80px;
            height: 30px;
            font-size: 18px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#d4a1d5,#928f92,#d4a1d5);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}

.buton:hover{
    background-image:linear-gradient(45deg,#be144a,#be144a,#878384);
}
    </style>

</head>

<body class="DB">


<form name="myform"   action="con_user_funn.php" method="POST">
<!-- check email -->
    <script>


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




<!-- check pass1 and pass2 -->

<script>


function checkpass(inputvalue)
{
    var PA=document.myform.Userpass1.value;
    if(PA != inputvalue)
    {
        alert(" كلمة السر غير مطابقة ");
    }
}

</script>




<!--
<script>

    function check_Enter() {
    
    var NAME = document.myform.UserName.value
    var email = document.myform.UserEmail.value
    var pass1 = document.myform.Userpass1.value
    var pass2 = document.myform.Userpass2.value

    
    if(NAME==""){
    alert("يرجي ادخال الاسم");
    return false
    }
    else if(email==""){
    alert("  يرجى إدخال الايميل ");
    return false
    }
    else if(pass1==""){
    alert(" يرجي إدخال الرقم السري ");
    return false
    }else if(pass2==""){
        alert("  يرجي ادخال الرقم السري مجدداً ");
    return false
    }
    }
    
    
    
    </script>
-->

<script>

function validation(){

if(Userpass1.length<5 )
alert("id must be at last 5 charactar long");
return false;


}
</script>


<!-- check-name-->

<script>
function check_Name() {
    
    var NAME = document.myform.UserName.value
    if(NAME==""){
    alert("enter your name please ");
    return false
    }
}
</script>

<!-- check pass1 -->

<script>
function check_pass() {
    
    var NAME = document.myform.Userpass1.value
    if(NAME==""){
    alert("enter your password please  ");
    return false
    }
}
</script>


<!-- check id -->
<!--
$_GET<script>
function check_ID() {
    
    var NAME = document.myform.UserID.value
    if(NAME==""){
    alert("يرجي ادخال ID");
    return false
    }
}
</script> 


-->
    

    <!--    <img src="img/EE1.jpg" class="img">-->
<div class="AA"></div>
<div class="div1"></div>
<div class="div2"></div>


<script>
function check(){
var name=document.myform.UserName.value;
 var email=document.myform.UserEmail.value;

if(name==""||email=="")
{
    alert("الرجاء ادخال كامل البيانات ");
    return false;
}
}
</script>


<label class="Name">Name</label>
<input type="text"    onblur="check_Name()"          name="UserName"   class="uname"  required>
<!--<small style=" position: absolute;top: 280px;left: 890px; visiblility:hidden"> error masseeg</small>-->
<br>
<br>
<lable class= "Name2">Email </lable>
<input type="text"   onblur="isCheckEmail(this.value)" name="UserEmail" class="uemail"   required >
<!--<small style=" position: absolute;top: 340px;left: 890px;"> error masseeg</small>-->

<br>
<br>
<lable  class="Name3">Password </lable>

<input type="password" name="Userpass1" onblur=" check_pass()"   class="pass1" required >
<!--<small style=" position: absolute;top: 400px;left: 890px;"> error masseeg</small>-->

<br>
<br>
<lable  class="Name4">Password </lable>
<input type="password" name="Userpass2" class="pass2" onblur="checkpass(this.value)" required>
<!--<small style=" position: absolute;top: 460px;left: 890px;"> error masseeg</small>-->





<input type="submit" value="ADD" name="op" class="add"     >
<!--
<input type="submit" value="Display" name="op" class="dis">
<input type="submit" value="Delete"   name="op" class="del">
<input type="submit" value="Update" name="op" class="upd">

-->



<button class="buton">
    <a  href="login.php" style="color: white;text-decoration: none; " class="a">Back</a>
</button>
<!-- <img src="img/esssra.png" style="position: absolute;top: 60px;left: 710px; width: 150px;height: 90px;" > -->

<div style="position: absolute;top: 180px;left: 310; width: 350;height: 368;border:6px solid #da9bdb;"></div>

<img src="img/EAA.jpg" style="position: absolute;top: 100px;left: 240px; width: 495px;height: 570px;" > 

<P style="position: absolute;top: 90px;left: 890px; font-size:40px;letter-space:3px;"> SING UP <p>
    </form>



    
   

</body>


</html>