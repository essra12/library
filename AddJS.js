

/*

const form=document.getElementById('myform');
const name=document.getElementById('UserName');
const email=document.getElementById('UserEmail');
const password=document.getElementById('Userpass1');
const password=document.getElementById('Userpass2');
const errorelement=document.getElementById('error');
form.addEventListener('ADD',(e) =>
{  e.preventDefault();
    check();});

    function check(){
    const uname=   UserName.value.trim();
    const  uemail= UserEmail.value.trim();
    const  upass1= Userpass1.value.trim();
    const upass2=  Userpass2.value.trim();
    if(uname==''){



        seterrorfor(name,'user can not be blane ');
    }else{
setsuccessfor(name);



    }

    }


function seterrorfor(input,message){
const formcontrol=input.porentElement;
const small=uname.querySelector('small');
function seterrorfor(input,message){
    small.innerText=message;
    uname.className='uname error';





}
*/










const form=document.getElementById('myform');
const name=document.getElementById('UserName');
const email=document.getElementById('UserEmail');
const password=document.getElementById('Userpass1');
const password2=document.getElementById('Userpass2');
const errorelement=document.getElementById('error');
form.addEventListener('ADD',(e) =>
{
let message =[]
if(name.value===' ' name.value==null)
{
    message.push('enter your name please !')

}else if(email.value===' ' email.value==null)
{
    message.push('enter your email please !')
    
}
else if(password.value===' ' password.value==null)
{
    message.push('enter your password  please !')
}

if(password2.value==='' password2.value==null)
{
    message.push('enter your password  again please !!')
}
if(message.length>0)
{
    e.preventDefault()
    errorelement.innerText=message.join(',')
}
})






