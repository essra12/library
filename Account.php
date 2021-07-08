
<?php


?>


<html>
    <head>
        
        <title>Join US | Bee Queen</title>
        <!--stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style1.css"/>
		<link rel="stylesheet"  href="css/all.min.css"/>
		<script src="js/JQuery.js" ></script>
		<link rel="shortcut icon" href="a.png"/>
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--using-Font-Awesome-------------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    </head>
    <body>
		<body>

       
			<!--navigation bar-->
			<nav> 
				<!--social-links-and-phone-number----------------->
		 <div class="social-call">
			 <!--social-links--->
			 <div class="social">
				 <a href="#"><i class="fab fa-facebook-f"></i></a>
				 <a href="#"><i class="fab fa-twitter"></i></a>
				 <a href="#"><i class="fab fa-instagram"></i></a>
			 </div>
			 <!--phone-number------>
			 <div class="phone">
				 <span>Call: +21892375341</span>
			 </div>
		 </div>
		 <!--menu-bar----------------------------------------->
		 <div class="navigation">
			 <!--logo------------>
			 <a href="#" class="logo"><img src="bee.jpg"></a>
			 <!--menu----------------->
			 <ul class="menu">
				 <li><a href="../index.php">Home</a></li>
				 <li ><a href="#" >JEWELLERY</a></li>
				 <li><a href="../bags/bags.php">BAGS</a>
					 <!--lable---->
					 <span class="sale-lable">Sale</span>
				 </li>
				 <li><a href="#">SHOES</a></li>
			 </ul>
		<!--right-menu----------->
		<div class="right-menu">
			<div class="f-slider2-text">
            
				<strong> BE <font> E </font>QUEEN</strong><br>
				
			</div>
		</div>
			 
			 </div>
		 </nav>

<div class="container">
	<div class="header">
		<h2>SIGN UP</h2>
	</div>
	<!--<form id="form" class="form" action="InsertD_fun.php" method="post" name =myform>-->
    <form   name="formCC"  action="INCC.php" method="post">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="" id="username" name="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Country</label>
			<input type="text" placeholder="" id="country" name="country" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Mobile phone Number</label>
			<input type="text" placeholder="" id="phone" name="phone" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" placeholder="" id="email" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="" id="password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Re-type Password</label>
			<input type="password" placeholder="" id="password2" name="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<!--<button name='op'>Create</button>-->


        <input type="submit" value="Create" name="op"   class="BB">
<input type="submit" value="essra" name="op " style=" position: absolute;top:100px;left:80px">
 

	</form>
</div>

<!--footer---------------------------->
<footer>
    <!--copyright-------------->
    <span class="copyright">
        Copyright 2021 - Khawla Abossawa
    </span>
    <!--subcribe---------------->
    <div class="subscribe">
        <form>
        <input type="email" placeholder="Example@gmail.com" required/>
        <input type="submit" value="Subscribe">
        </form>
    </div>
</footer>





<script type="text/javascript">

const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const country = document.getElementById('country');
const phone = document.getElementById('phone');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	const countryValue =country.value.trim();
	const phoneValue = phone.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
	if(countryValue === '') {
		setErrorFor(country, 'Country cannot be blank');
	} else {
		setSuccessFor(country);
	}
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else {
		setSuccessFor(phone);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}














</script>

</form>
</body>
</html>