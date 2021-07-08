<?php


?>


<html>

<head>


    <style>


        .img{
            position: absolute;
            top: 1px;
            left: 1px;
            width: 1534px;
            height: 750px;
        }
.div1{

position: absolute;
top: 80px;
left: 815px;
width: 560px;
height: 600px;
background-color: #f4d6df;
border-radius: 10%;
opacity: 0.8;
border:3px solid #8f4e84;
}

.IDN{
    position: absolute;
top: 190px;
left: 880px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;
}


.ID{
    

position: absolute;
top: 190px;
left: 980px;
width: 230px;
height: 35px;
}
.Name{

position: absolute;
top: 250px;
left: 880px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;

}


.uname{

position: absolute;
top: 250px;
left: 980px;
width: 230px;
height: 35px;
}


.Name2{

 position: absolute;
top: 310px;
left: 880px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;


}
.uemail{

position: absolute;
top: 310px;
left: 980px;
width: 230px;
height: 35px;

}


.Name3{

position: absolute;
top: 370px;
left: 880px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;


}
.pass1{
    position: absolute;
top: 370px;
left: 980px;  
width: 230px;
height: 35px;
}



.Name4{

position: absolute;
top: 430px;
left: 880px;
font-size: 20px;
font-family: Calisto MT;
font-weight: bold;
}
.pass2{
    position: absolute;
top: 430px;
left: 980px;  
width: 230px;
height: 35px;
}



.add{
 position: absolute;
top: 510px;
left: 830px;  
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#d27ec4,#850970,#959294);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;

}
.add:hover{
    background-image:linear-gradient(45deg,#888388,#f4d6df,#9d1e9f,#c0c0c0);

}
.dis{
    position: absolute;
top: 510px;
left: 1020px; 
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#d27ec4,#850970,#959294);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}
.dis:hover{
    background-image:linear-gradient(45deg,#888388,#f4d6df,#9d1e9f,#c0c0c0);

}
.del{
    position: absolute;
top: 510px;
left: 1200px;
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#d27ec4,#850970,#959294);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}
.del:hover{
    background-image:linear-gradient(45deg,#888388,#f4d6df,#9d1e9f,#c0c0c0);

}
.upd{
    position: absolute;
top: 590px;
left: 1020px;
border: none;
            border-radius: 50px;
            width: 160px;
            height: 43px;
            font-size: 25px;
            font-family: Andalus;
            color:#fff;
            background-image:linear-gradient(45deg,#d27ec4,#850970,#959294);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}
.upd:hover{
    background-image:linear-gradient(45deg,#888388,#f4d6df,#9d1e9f,#c0c0c0);

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
            background-image:linear-gradient(45deg,#d27ec4,#850970,#959294);
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            font-weight: bolder;
            color: #ffffff;
}

.buton:hover{
    background-image:linear-gradient(45deg,#888388,#f4d6df,#9d1e9f,#c0c0c0);
}
.buton1{

position: absolute;
top: 5px;
left:1450px;
border: none;
        border-radius: 50px;
        width: 80px;
        height: 30px;
        font-size: 18px;
        font-family: Andalus;
        color:#fff;
        background-image:linear-gradient(45deg,#d27ec4,#850970,#959294);
        background-size: 800px;
        background-position: right;
        box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        font-weight: bolder;
        color: #ffffff;
}

.buton1:hover{
background-image:linear-gradient(45deg,#888388,#f4d6df,#9d1e9f,#c0c0c0);
}

    </style>

</head>

<body class="DB">

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
    alert("يرجي ادخال الاسم");
    return false
    }
}
</script>

<!-- check pass1 -->

<script>
function check_pass() {
    
    var NAME = document.myform.Userpass1.value
    if(NAME==""){
    alert("يرجي ادخال الرقم السري ");
    return false
    }
}
</script>


<!-- check id -->$_GET<script>
function check_ID() {
    
    var NAME = document.myform.UserID.value
    if(NAME==""){
    alert("يرجي ادخال ID");
    return false
    }
}
</script>


    <form name="myform"    action="con_fun.php" method="POST">

        <img src="img/E11.jpg" class="img">

<div class="div1"></div>


<lable  class="IDN">UserID </lable>
<input type="text" name="UserID" onblur="check_ID()" class="ID"  >




<label class="Name">Name</label>
<input type="text" name="UserName"  onblur="check_Name() " class="uname">
<br>
<br>
<lable class= "Name2">Email </lable>
<input type="text" name="UserEmail" class="uemail" onblur="isCheckEmail(this.value)">

<br>
<br>
<lable  class="Name3">Password </lable>
<input type="password" name="Userpass1" onblur=""  onblur="check_pass()" class="pass1" >
<br>
<br>
<lable  class="Name4">Password </lable>
<input type="password" name="Userpass2" class="pass2" onblur="checkpass(this.value)" >





<input type="submit" value="ADD" name="op" class="add"   onclick="check_Enter()">
<input type="submit" value="Display" name="op" class="dis">
<input type="submit" value="Delete"   name="op" class="del">
<input type="submit" value="Update" name="op" class="upd">





<button class="buton">
    <a  href="books.php" style="color: white;text-decoration: none; " class="a">Back</a>
</button>
<!-- <img src="img/esssra.png" style="position: absolute;top: 60px;left: 710px; width: 150px;height: 90px;" >-->
<P style="position: absolute;top: 60px;left: 1020px; font-size:40px;letter-space:3px;"> SING UP <p>



<button class="buton1">
    <a  href="login1.php" style="color: white;text-decoration: none; " class="a">login</a>
</button>
    </form>


</body>


</html>