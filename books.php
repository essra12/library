<?php
/*
global $link;

include 'check_db_conect.php';


if(isset($_GET['SR']))
{
$searh=$link->prepare("SELECT * FROM crateac where UserName like :value");
$searh_value="%".$_GET['searh']."%";

$searh->bindparam("value",$searh_value);
$searh->execute();
foreach($searh as $data){

    ?>
    <script type="text/javascript">
    window.location.href="aboutbook.php"</script>
    <?php

}

}
*/
?>





<html>

<head>
 <meta charset="UTF-8">


   
  
  




<title> the books </title>
<style>
.img1{
width: 600px;
height: 650px;
position:absolute;
top:1px;
left: 4px;
}

.h2{
font-size: 80px;
position: absolute;
top: 750px;
left: 650px;
font-family:'Courier New', Courier, monospace;

}
.p1{
    position: absolute;
    top: 850px;
    left: 600px;
    font-size: 30px;
}
.h3{
position: absolute;
top: 950px;
left: 700px;
font-size: 45px;

}

.esr{
  
  position: absolute;
top: 5px;
left: 150px;
    width: 100px;
    height: 40px;
    background:#e8c843;
    border:none;
  color:black;
    font-size:21;


}
.esr:hover{
  font-weight: bolder;
}
/* options  */

.D1{
  background-color: #f0ecec;
  width: 1520px;
  height: 650px;
  opacity: 0.6;
  position: absolute;
  top: 1px;
  left: 1px;
}

.home{
  position: absolute;
  top: 4px;
  left: 830px;
  font-size: 25px;
  color:black;
  font-weight: bolder;
  
height: 48px;
width: 88px;
 text-decoration: none;
}
.home:hover{
 color:black;
  background-color: #f3dc7e;
height: 48px;
width: 80px;
}
.catalog{
  position: absolute;
  top: 4px;
  left: 950px;
  font-size: 25px;
  color:black;
  font-weight: bolder;
  
height: 48px;
width: 130px;
 text-decoration: none;
}
.catalog:hover{
 color:black;
  background-color: #f3dc7e;
height: 48px;
width: 130px;
}
.aouthor{
   position: absolute;
  top: 4px;
  left: 1098px;
  font-size: 25px;
  color:black;
  font-weight: bolder;
   text-decoration: none;
}
.aouthor:hover{
 color:black;
  background-color: #f3dc7e;
opacity: 0.9;
height: 48px;
width: 140px;
}
.quote{
  position: absolute;
  top: 4px;
  left: 1260px;
  font-size: 25px;
   color:black;
  font-weight: bolder;
   text-decoration: none;
}
.quote:hover{
 color:black;
  background-color: #f3dc7e;
opacity: 0.9;
height: 48px;
width: 134px;
}
.home1{
   position: absolute;
  top: 4px;
  left: 1410px;
  font-size: 25px;
   color:black;
  font-weight: bolder;
  
  text-decoration: none;
}
.home1:hover{
 color:black;
  background-color: #f3dc7e;
opacity: 0.9;
height: 48px;
width: 90px;
}

/* welcome*/
.m1{
  position: absolute;
  top: 1px;
  left: 1px;
  width: 125px;
  height: 55px;
}
.m2{
  position: absolute;
  top: 750px;
  left: 10px;
  width: 580px;
  height: 550px;
}


/* suggestions */


/*  image for book suggestions    1*/

.BK2{
    position: absolute;
    top: 1650px;
    left: 200px;
    width: 250px;
    height: 360px;
 background-color: #f0ecec;
    text-decoration: none;
    color: black;
      border-radius: 10%;
 
}
.bk2:hover{
     position: absolute;
    top: 1630px;
    left: 200px;
  border-bottom: solid 5px #e3bc39;
}

.md1{
  
        width: 250px;
        height: 260px;
       
}
.BK3{
    position: absolute;
    top: 1650px;
    left: 500px;
    width: 250px;
    height: 360px;
   background-color: #f0ecec;
    text-decoration: none;
    color: black;
    border-radius: 10%;
}
.bk3:hover{
     position: absolute;
  top: 1630px;
    left: 500px;
  border-bottom: solid 5px #e3bc39;
}

.BK4{
    position: absolute;
    top: 1650px;
    left: 800px;
   width: 250px;
    height: 360px;
  background-color:  #f0ecec;
    text-decoration: none;
    color: black;
     border-radius: 10%;
}
.bk4:hover{
     position: absolute;
 top: 1630px;
    left: 800px;
 border-bottom: solid 5px #e3bc39;
}
.BK5{
    position: absolute;
    top: 1650px;
    left: 1100px;
    width: 250px;
    height: 360px;
   background-color: #f0ecec;
    color: black;
    text-decoration: none;
    border-radius: 10%;
}

.bk5:hover{
     position: absolute;
 top: 1630px;
    left: 1100px;
  border-bottom: solid 5px #e3bc39;
}
/* buttom   view  */
.buttom{
 position: absolute;
 top: 2530px;
 left: 600px;
 background-color: #e3bc39;
 width: 280px;
 height: 70px;
 font-size: 20px;
 color: white;
 font-weight: bolder;
 border:none;
}
.buttom:hover{
 background-color: #9b9b9b;
}

  /* catalog */
 
  


  /* buttonc contact Us */
  .buttomC{
    position: absolute;
    top: 3170px;
    left: 997px;
 background-color: #e3bc39;
 width: 220px;
 height: 60px;
 font-size: 20px;
 color: white;
 font-weight: bolder;
 border:none;
}
.buttomC:hover{
 background-color: gray;
}

  /* catalog */
 
  .BK9:hover{
    padding: 2px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    
  }

 .BK10:hover{
  padding: 2px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    
  }
  .BK11:hover{
    padding: 2px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      }
  .BK12:hover{
    padding: 2px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      }
.BK13:hover{
  padding: 2px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
      }
/* aouthers */


.imA1{
  padding: 1px;
  width: 198px;
  height: 180px;
  position: absolute  ;
  top: 4510px; 
  left: 200px;
  border-radius: 50%
}
.imA1:hover{
  position: absolute  ;
  top: 4490px; 
  left: 200px;
  border:2px solid #e3bd3e
  }


  .imA2{
  padding: 1px;
  width: 198px;
  height: 180px;
  position: absolute  ;
  top: 4510px; 
  left: 440px;
  border-radius: 50%
}
.imA2:hover{
  position: absolute  ;
  top: 4490px; 
  left: 440px;
 border:2px solid #e3bd3e
}

.imA3{
  padding: 1px;
  width: 198px;
  height: 180px;
  position: absolute  ;
  top: 4510px; 
  left: 700px;
  border-radius: 50%
}
.imA3:hover{
  position: absolute  ;
  top: 4490px; 
  left: 700px;
  border:2px solid #e3bd3e
}


.imA4{
  padding: 1px;
  width: 198px;
  height: 180px;
  position: absolute  ;
  top: 4510px; 
  left: 950px;
  border-radius: 50%
}
.imA4:hover{
  position: absolute  ;
  top: 4490px; 
  left: 950px;
  border:2px solid #e3bd3e
}


.imA5{
  padding: 1px;
  width: 198px;
  height: 180px;
  position: absolute  ;
  top: 4510px; 
  left: 1200px;
  border-radius: 50%
}
.imA5:hover{
  position: absolute  ;
  top: 4490px; 
  left: 1200px;
  border:2px solid #e3bd3e
}





/* اقتباسات button */
.b2{
 position: absolute;
 top: 5290px;left: 730px;
 background-color:#eab501;
 color: black; width: 200px;
 height: 60px;
 font-size: 20px;
 border:none;
}
.b2:hover{
 background-color: #d0d0d0;
 font-weight: bolder;
}
/*  1 اقتراحات الكتب */
.one{
  position: absolute;
    top: 1250px;
    left: 200px;
    width: 250px;
    height: 360px;
}
.one:hover{
 position: absolute;
    top: 1240px;
    left: 200px;
    border: 1px solid gray;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);
}
/**/
.one1{
  position: absolute;
    top: 1250px;
    left: 500px;
    width: 250px;
    height: 360px;
}
.one1:hover{
 position: absolute;
    top: 1240px;
    left: 500px;
    
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

}
/**/
.one2{
  position: absolute;
    top: 1250px;
    left: 800px;
    width: 250px;
    height: 360px;
}
.one2:hover{
 position: absolute;
    top: 1240px;
    left: 800px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

}
/**/
.one3{
  position: absolute;
    top: 1250px;
    left: 1100px;
    width: 250px;
    height: 360px;
}
.one3:hover{
 position: absolute;
    top: 1240px;
    left: 1100px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);

}
/*  1 اقتراحات الكتب */
.one4{
  position: absolute;
    top: 1680px;
    left: 200px;
    width: 250px;
    height: 360px;
}
.one4:hover{
 position: absolute;
    top: 1660px;
    left: 200px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);
}
.one5{
  position: absolute;
    top: 1680px;
    left: 500px;
    width: 250px;
    height: 360px;
}
.one5:hover{
 position: absolute;
    top: 1660px;
    left: 500px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);
}
.one6{
  position: absolute;
    top:1680px;
    left: 800px;
    width: 250px;
    height: 360px;
}
.one6:hover{
 position: absolute;
    top: 1660px;
    left: 800px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);

}
.one7{
  position: absolute;
    top: 1680px;
    left: 1100px;
    width: 250px;
    height: 360px;
}
.one7:hover{
 position: absolute;
    top: 1660px;
    left: 1100px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);

}
.one8{
  position: absolute;
    top: 2100px;
    left: 200px;
    width: 250px;
    height: 360px;
}
.one8:hover{
 position: absolute;
    top: 2080px;
    left: 200px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);

}
.one9{
  position: absolute;
    top: 2100px;
    left: 500px;
    width: 250px;
    height: 360px;
}
.one9:hover{
 position: absolute;
    top: 2080px;
    left: 500px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);

}
.one10{
  position: absolute;
    top:  2100px;
    left: 800px;
    width: 250px;
    height: 360px;
}
.one10:hover{
 position: absolute;
    top: 2080px;
    left: 800px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);

}
.one11{
  position: absolute;
    top:  2100px;
    left: 1100px;
    width: 250px;
    height: 360px;
}
.one11:hover{
 position: absolute;
    top: 2080px;
    left: 1100px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.29);
}
/*  icon */

.i1:hover{
  border: 1px solid #ccccc9;

 position: absolute;
 top: 5910px;
 left: 570px;
 box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

}
.i2:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  border: 1px solid #ccccc9;

 position: absolute;
 top: 5910px;
 left: 570px;
}
.i3:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  border: 1px solid #ccccc9;

 position: absolute;
 top: 5910px;
 left: 570px;
}
.i4:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  border: 1px solid #ccccc9;

 position: absolute;
 top: 5910px;
 left: 570px;
 
}
.i5:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  border: 1px solid #ccccc9;

 position: absolute;
 top: 5910px;
 left: 570px;
}
.i6:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  border: 1px solid #ccccc9;

 position: absolute;
 top: 5910px;
 left: 570px;
}
.i7:hover{
 border: 1px solid #ccccc9;
 box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

 position: absolute;
 top: 5910px;
 left: 570px;
}
.help:hover{
 cursor: grabbing;
 font-weight: bolder;
 color: black;
}

.pbok{
    font-family:Sakkal Majalla;
}
.inp{
  position: absolute;
  top: 6000px; 
  left:210px ;
   background-color:dab547;
   border:none;
width: 80px;
height: 25px;
font-family: Centaur;
font-size:19px;

}
.inp:hover{

  background-color:#c2c1bf;
  font-weight:bolder;

}
.SR{
  position: absolute;top: 830px;left: 321px; font-size: 24px; width: 130px; height: 60px;
  background-image:linear-gradient(45deg,#ecd179,#e8bf37,#eac445);
border:none;
font-family:Felix Titling;
}.SR:hover{
  background-image:linear-gradient(45deg,#e1e1e1,#b6b4aa,#dbdad7);

}
.buttomC:hover{
  
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

}
.esr:hover{
  
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.help:hover{
  
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.buttom:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.BK9:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

}
.i1:hover{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

}
</style>
</head>

<body    >
          
  <!-- onload="alert('welcome  to our library ') ;" -->
                    
  
        
       
 <div class="D1"> </div>
 <!-- HELP -->

<script>
 function sum(){
  
  
  
  var q1= false;
  
  q1=confirm('Do you need help ?');
  if(q1){
  not=prompt(" How we can help you ?");
  if(not)
  alert(" we will provide support to you ");
  if(!not)
    alert(" thanks ");
  }
  if(!q1){
  not=prompt("Du you have any note about our library ?");
  if(not)
  alert(" Thank you for your notes ");
  if(!not){
    alert(  " thank you ");}
  
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

function mmn(){
  
  
  
  var q1= false;
  
  q1=prompt('Give Us Your Email Please ');
  if(q1){
    
    alert("you will receive all new on your email .");
  if(!q1)
 
    alert("  thanks ");
  
  
  }
}

</script>
<!-- head -->
 
  <div style="border:7px solid #e8c843; width: 200px;height: 260px;position: absolute;top: 310px;left: 1290px;"></div>
 <img class="img1" src="img/buu.jpg">

<h1 class="h1"  style="font-size: 40px;position: absolute;top: 250px;left: 690px;font-family: Edwardian Script ITC;letter-spacing: 2px">Are you searching a book ?  </h1>
<h1  style="font-size: 35px;position: absolute;top: 320px;left: 630px; letter-spacing: 2px; font-family: Bell MT">THE BEST LIBRARY BOOK </h1>
<div  style="font-size: 22px;position: absolute;top: 410px;left: 780px; background-color: #e8c843;width: 209px;height: 30px;text-align: center; font-family:Felix Titling;letter-spacing: 1px;font-weight: bold; ">Enjoy Yor Time</div>
<img src="img/rf.png" style="position: absolute;top: 180px;left: 1210px;width: 90px;height: 180px">
<img src="img/lo2.png" style="position: absolute;top: 350px;left: 1190px; ">


<!-- optionns -->

<a class= "home"  href="#one" >HOME</a>
<a class= "home1"  href="#one4">QUOTE</a>
<a class= "catalog"  href="#one1">ABOUT US</a>
<a class= "aouthor" href="#one2">CATALOG</a>
<a class= "quote"  href="#on3">AUTHOR</a>

<!-- 
<div    style="position: absolute;top: 5px;left: 30px;width: 130px;height: 40px;background-color:  #e8c843; "></div>
<a     href="login.php" class="AA" style="position: absolute;top: 7px;left: 50px;font-size: 28px; text-decoration: none;color: black;font-weight: bold ; font-family:Centaur "
        title="تسجيل الدخول "> sing in</a>
-->

<!-- help -->
<div style="position: absolute;top: 5px;left: 50px;width: 90px;height: 40px;background-color:  #e8c843;font-family: Bell MT; text-align: center;font-size: 26px;"   title="المساعدة "  onclick="sum();  " class="help" > help</div>




<!-- create acount users -->
<button class="esr"  > 
   <a   class="aa" href="crate.php" style="text-decoration: none; color:black;font-family: Bell MT;font-size:24px;"> Sing Up </a>  
  </button>


  <form  action="searh.php" method="GET">

<!-- البحث-->
<p  id="one" style="position: absolute;top: 730px;left: 640px; font-size: 38px;font-family: Edwardian Script ITC;letter-spacing: 2px; font-weight: bolder;">Search Books</p>
<img src="img/rf.png" name="SR" style="position: absolute;top: 730px;left: 850px;width: 80px;height: 90px">
<input type="text" name="q" style="position: absolute;top: 830px;left: 452px; font-size: 30px; width: 700px; height: 60px; border: 3px solid #d6d6d5;" >
<a href="#">
<!--<img src="img/sr.png"  style="width: 70px; height: 70px;position: absolute;top: 815px;left: 360px; border-radius: 50%; border-radius: 50%">
--></a>
<input  type="submit"  name="op" value="Search"   class="SR">

</form>

<!--  some books-->
<h1   id="12" style=" position: absolute; top: 1040px;  left: 190px; color: black;text-align: center; font-weight: bolder;
padding-top: 15px;"> Suggestions</h1>
<div style="   position: absolute; top: 1130px;  left: 210px; width: 120px;height: 3px; background-color:#e8c843 "></div>
<!-- <img src="rf.png" style="position: absolute;top: 980px;left: 1310px;width: 50px;height: 70px"> -->


<!-- book 1 -->

<a href="aboutbook.php"  title="كتاب تسحر القيادة  ">
<img src="img/ll21.jpg"   class="one"  >
</a>
<h1  class="pbok" style="position: absolute;top: 1600px ; left: 200px; font-size: 23px; font-family:DecoType Thuluth;  ">  Saher Elqiadoh </h1>



<a href="aboutFZ.php"  title="كتاب ارض زيكولا ">
<img src="img/book8.jpg"   class="one1"  >
</a>
<h1  class="pbok" style="position: absolute;top: 1600px ; left: 500px; font-size: 23px;font-family:DecoType Thuluth; ">ارض زيكولا</h1>


<a href="aboutbook.php"  title="محاسن الاسلام ">
<img src="img/ll14.jpg"   class="one2"  >
</a>
<h1  class="pbok"  style="position: absolute;top: 1600px ; left: 800px; font-size: 23px;font-family:DecoType Thuluth;">محاسن الاسلام </h1>



<a href="aboutbook.php"  title="العرب قبل الاسلام">
<img src="img/ll15.jpg"   class="one3"  >
</a>
<h1   class="pbok" style="position: absolute;top: 1600px ; left: 1100px; font-size: 23px;font-family:DecoType Thuluth; ">العرب قبل الإسلام</h1>


<!-- book 2 -->




<a href="aboutbook.php">
<img src="img/ll8.jpg"   class="one4"  >
</a>
<h1  style="position: absolute;top: 2030px ; left: 200px; font-size: 23px; font-family:DecoType Thuluth; ">حياة بلا توتر </h1>



<a href="aboutbook.php">
<img src="img/mor.jpg"   class="one5"  >
</a>
<h1  style="position: absolute;top: 2030px ; left: 500px; font-size: 23px ;font-family:DecoType Thuluth; ">حديث الصباح </h1>


<a href="aboutbook.php">
<img src="img/mor1.jpg"   class="one6"  >
</a>
<h1 style="position: absolute;top: 2030px; left: 800px; font-size: 23px;font-family:DecoType Thuluth; ">ابق قويا</h1>


<a href="aboutbook.php">
<img src="img/ll9.jpg"   class="one7"  >
</a>
<h1  style="position: absolute;top: 2030px ; left: 1100px; font-size: 23px;font-family:DecoType Thuluth; ">أنا يوسف </h1>


<!--  book 3 -->



<a href="aboutbook.php">
<img src="img/ll2.jpg"   class="one8"  >
</a>
<h1  style="position: absolute;top: 2450px ; left: 200px; font-size: 23px;font-family:DecoType Thuluth; ">في قلبي انثي عبرية </h1>



<a href="aboutbook.php">
<img src="img/ll3.jpg"   class="one9"  >
</a>
<h1  style="position: absolute;top: 2450px  ; left: 500px; font-size: 23px;font-family:DecoType Thuluth; ">طيور القدس </h1>



<a href="aboutbook.php">
<img src="img/ll12.jpg"   class="one10"  >
</a>
<h1  style="position: absolute;top: 2450px ; left: 800px; font-size: 23px;font-family:DecoType Thuluth;">تسعة عشر </h1>


<a href="aboutbook.php">
<img src="img/ll23.jpg"   class="one11"  >
</a>
<h1  style="position: absolute;top: 2450px ; left: 1100px; font-size: 23px;font-family:DecoType Thuluth; ">القطار الاخير في هيروشيما </h1>


  <!-- view all book -->
  <button class="buttom"    onmouseover="">
   
    <a   class="aa" href="allbooks.php" style="text-decoration: none; color: white;"  title="عرض كل الكتب في الموقع  "> VIEW ALL BOOKS</a> 
  </button>
  
  <!-- about us  -->
  
<img src="img/pt1.png"    style="position: absolute;top: 2750px;left: 10px; width: 380px;height: 300px;">
<img src="img/pt2.png" style="position: absolute;top: 2900px;left: 180px; width: 390px;height: 300px;">
<img src="img/cit.jpg" style="position: absolute;top: 2850px;left: 200px; width: 270px;height: 280px;">
<img src="img/pp2.jpg" style="position: absolute;top: 2990px;left: 45px; width: 260px;height: 270px;">
<img src="img/sen.png" style="position: absolute;top: 3140px;left: 1300px; width: 80px;height: 80px;">
<p  id="one1" style="position: absolute;top: 2750px;left: 990px; font-size: 35px; color: black; font-family:  Centaur">
 <small  style="letter-spacing: 2px; font-family: Bell MT; font-size: 17px; color: #eab501;font-weight: bold"> &nbsp &nbsp &nbsp &nbsp &nbsp  INFO</small> <br>ABOUT US </p>
<hr  style="position: absolute;top: 2850px;left: 1020px; color:#e8c843;width: 100px">
<p  style="position: absolute;top: 2880px;left: 700px; font-size: 30px; color: black;">We offer you a selection of the best books  , 
you can now read your<br> &nbsp &nbsp &nbsp &nbsp  favorite book white ease 
tenjoy a different experience <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp to read ,  we always do to offer the best . <br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp  you can notify us any problem  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  you and we will help you<br>
 &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp   &nbsp &nbsp &nbsp 
immediately</p>

<!-- contacct us  -->
<button class="buttomC"    onmouseover="">
   
   <a   class="aa" href="ContaCT.php" style="text-decoration: none; color: white;"  title="تواصل معنا "> Contact Us</a> 
 </button>



  <!-- catalog -->
  
  
<div  style=" position: absolute; top: 3500px; left: 5px; width: 1510px;height: 700px ;background-color: #f4f4f4;" ></div>
<h1 id="one2"  class="hh2" style=" position: absolute;top: 3490px;left: 600px; font-size: 59px; font-family: Edwardian Script ITC ;letter-spacing: 3px"> The Catalog
<br> <b  style="letter-spacing: 7px; font-family: Centaur;font-size: 15px">&nbsp &nbsp THE CATALOG</b> </h1>
  
  <!-- image -->
   <img src="img/o9.png" style="position: absolute;top: 3650px;left: 7px; width: 380px;height: 300px;">
  <img src="img/pt2.png" style="position: absolute;top: 3740px;left: 190px; width: 390px;height: 300px;">
  <img src="img/home.jpg" style="position: absolute;top: 3690px;left: 190px; width: 270px;height: 300px;">
<img src="img/E22.jpg" style="position: absolute;top: 3860px;left: 45px; width: 260px;height: 300px;">
  <!-- الفانتازيا -->
  
<a   class="a11" href="fantazia.php"  title="كتب الفانتازيا">
 <img class="BK9"   src="img/fan.jpg"  style=" position: absolute; top: 3700px; left: 840px;  width: 160px; height: 170px; border-radius: 10%;" >
   </a>
<p style=" position: absolute; top: 3658px; left: 870px; font-weight: bolder">FANTAZIA</p>
  <!-- تاريحية -->
   <a  href="history.php"  title="كتب التاريخ ">
    <img class="BK10" src="img/Hst.jpg"  style=" position: absolute; top: 3700px; left: 1050px; width: 160px; height: 170px;border-radius: 10%;">
   </a>
   <p style=" position: absolute; top: 3658px; left: 1080px; font-weight: bolder">HISTORY</p>
     <!-- تنمية بشرية -->
   <a  href="humandevolp.php"  title="كتب التنمية البشرية ">
    <img class="BK11" src="img/hm.jpg"  style=" position: absolute; top: 3700px; left: 1250px;width: 160px; height: 170px;border-radius: 10%;">
   </a>
   <p style=" position: absolute; top: 3658px; left: 1250px; font-weight: bolder">human devolpment</p>
     <!-- رعب -->
   <a href="horror.php"  title="كتب الرعب ">
    <img class="BK12" src="img/Hor1.jpg" style=" position: absolute; top: 3920px; left: 950px; width: 160px; height: 170px;border-radius: 10%;">
   </a>
   <p style=" position: absolute; top: 3880px; left: 1000px; font-weight: bolder">HORROR</p>
     <!--دينية -->
   <a  href="religion.php"  title="كتب دينية  ">
     <img class="BK13" src="img/gir.jpg"  style=" position: absolute; top: 3920px; left: 1170px; width: 160px; height: 170px;border-radius: 10%;">
   </a>
   <p style=" position: absolute; top: 3880px; left: 1200px; font-weight: bolder">RELIGION</p>
    
  
<!-- aouthor -->




 <p  id="on3" style=" position: absolute;top: 4300px; left: 650px; font-size: 50px; font-family:  Edwardian Script ITC;letter-spacing: 3px;
 font-weight: bolder;">The Authers<br>
 <small style="font-size: 19px;letter-spacing: 6px;font-family:  Centaur">&nbsp &nbsp AUTHORS</small></p>
  


<!--  information aouther -->
 
 <a  class="AS"  href="author.php"  title="د.ابراهيم الفقي ">
 <img class="imA1" src="img/AB1.png" ></a>
 <p style="position: absolute  ;top: 4700px; left: 220px;font-size: 20px;" onmouseover="this.style.color='red'"  onmouseout="this.style.color='black' ;"> &nbsp &nbsp Ebrahim Alfiqe <br>
&nbsp &nbsp &nbsp &nbsp  116 Books </p>
 
 <a   href="author.php"  title="الشيخ الشعراوي ">
  <img  class="imA2" src="img/aa1.jpg"  >
   </a>
 <p style="position: absolute  ;top: 4700px; left: 480px;font-size: 20px;"  onmouseover="this.style.color='red'"  onmouseout="this.style.color='black'">   Alsheikh Alshaarawi     <br> &nbsp &nbsp &nbsp &nbsp 316 Books  </p>
 
 <a href="author.php"  title="أيمن العتوم ">
  <img class="imA3" src="img/aa2.jpg"  >
  </a>
 <p style="position: absolute  ;top: 4700px; left: 715px;font-size: 20px;" onmouseover="this.style.color='red'"  onmouseout="this.style.color='black'"> &nbsp &nbsp Aiman Alatum    <br>
&nbsp &nbsp &nbsp &nbsp 23 Books</p>
<a href="author.php" title="د.فهد عامر ">
 <img  class="imA4" src="img/aa3.jpg"  >
 </a>
 <p style="position: absolute  ;top: 4700px; left: 980px;font-size: 20px;" onmouseover="this.style.color='red'"  onmouseout="this.style.color='black';">&nbsp &nbsp Fahed Amer  <br>
&nbsp &nbsp &nbsp 14 Books </p>

 <a href="author.php"  title="د.مصطفي محمد " >
  <img  class="imA5" src="img/aa4.jpg"  ></a>
 <p style="position: absolute  ;top: 4700px; left: 1230px;font-size: 20px;" onmouseover="this.style.color='red'"  onmouseout="this.style.color='black';"> &nbsp  mustafa mohamed  <br>
 &nbsp &nbsp &nbsp 224 Books </p>
 
 
 



<!-- اقتباسات من الكتب  -->

<div  style=" position: absolute;top: 4890px;left: 5px;width: 1578px;height: 500px; "></div>


<div  style=" position: absolute;top: 5050px;left: 150px;width: 290px;height:270px; border: 7px solid #eab501"></div>
<div  style=" position: absolute;top: 5190px;left: 50px;width: 290px;height:270px; border: 7px solid #eab501;background: #eab501"></div>
 <img src="img/kk.jpg" style="width: 300px;height: 310px;position: absolute;top: 5100px;left: 110px;">
 

<p id="one4" style=" position: absolute;top: 5000px;left: 650px;;font-size: 50px;color:black;font-family: Edwardian Script ITC;letter-spacing: 3px;
font-weight: bolder;">Quatations from books <br> <small style="font-family: Centaur; font-size: 17px; letter-spacing: 5px">&nbsp
&nbsp  &nbsp &nbsp &nbsp &nbsp &nbspQUATATION</small> <br><br><small  style="font-family: Centaur;font-size: 25px">
Get The Most Beautiful Quantities<br> &nbsp &nbsp &nbsp &nbsp of the great books</small></p>

<div style="position: absolute;top: 5260px;left: 1240px;border: 6px solid #eab501;width: 250px ;height: 250px"></div>
<img src="img/q.jpg" style="width: 250px;height: 260px;position: absolute;top: 5200px;left: 1200px;border: 4px    dashed #eab501">
 
<!-- button view -->
<button  class="b2">
 <a href="sumtext.php" style="text-decoration: none;color: black"  title="هنا ستجد اجمل الاقتباسات "> VIEW MORE</a>
</button>



<!-- contact -->



<div style="position: absolute;top: 5870px;left: 4px;background-color:  #e5e2e2;width: 1510px ;height: 630px"></div>
<!-- <img src="qq2.png" style="width: 100px;height: 100px;position: absolute;top: 5800px;left: 760px;">-->
<p   style=" position: absolute;top: 5880px;left: 760px;;font-size: 19px; color:black;font-family: Centaur;letter-spacing: 3px;
color: #eab501; font-weight: bolder;letter-spacing: 9px;">BOOK</p>
 <p  style=" position: absolute;top: 5870px;left: 680px;;font-size: 44px;color:black;font-family: Centaur;letter-spacing: 3px;
color: black">  Contact As</p>
 
 <!-- icon -->
 <img src="img/twitter1.png" style="position: absolute;top: 5990px;left: 570px;"  class="i1">
<img src="img/122.png"   style="position: absolute;top: 5990px;left: 630px;"  class="i2">
<img src="img/ff55.png" style="position: absolute;top: 5990px;left: 680px;" class="i3">
<img src="img/pp11.png" style="position: absolute;top: 5990px;left: 740px;"class="i4">
<img src="img/blog.png" style="position: absolute;top: 5990px;left: 800px;"class="i5">
<img src="img/tt33.png"  style="position: absolute;top: 5990px;left:860px;"class="i6">
<img src="img/ggg.png" onclick="mmn()" style="position: absolute;top: 5990px;left: 920px;"class="i7">





<!-- image for footer -->
<img src="img/kk.jpg" style="width: 220px;height: 230px;position: absolute;top: 6100px;left: 190px;">
<img src="img/FF1.jpg" style="width: 220px;height: 230px;position: absolute;top: 6100px;left: 430px;">
<img   src="img/E22.jpg"    style="width: 220px;height: 230px;position: absolute;top: 6100px;left: 670px;">
<img src="img/home.jpg" style="width: 220px;height: 230px;position: absolute;top: 6100px;left: 910px;">
<img src="img/cit.jpg" style="width: 220px;height: 230px;position: absolute;top: 6100px;left: 1150px;">
<div style="border-bottom: 4px solid #eab501 ; position: absolute;top: 6370px;left: 230px;
width: 1050px ; height: 7px;"></div>
<p style="position: absolute;top: 6390px; left: 610px ;font-size: 24px;font-family: Centaur;letter-spacing: 1px;"> All Rights Are Save @ 2021</p>

<!--
<input  type="text"  onblur="isCheckEmail(this.value)" style="position: absolute;top: 6000px; left:30px ; ">
<input  type="submit"  class="inp" value="Email" onclick=" mmn()"   >

-->

</form>
</body>






</html>