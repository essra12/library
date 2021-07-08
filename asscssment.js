

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
const name=document.getElementById('name');
const email=document.getElementById('email');
const massge=document.getElementById('massege');
const errorelement=document.getElementById('error');
form.addEventListener('SEND',(e) =>
{
let message =[]
if(name.value===' ' name.value==null)
{
    message.push('enter your name please !')

}else if(email.value===' ' email.value==null)
{
    message.push('enter your password please !')
    
}
else if(massge.value===' ' massge.value==null)
{
    message.push('password must be longer 6 characters !')
}


if(message.length>0)
{
    e.preventDefault()
    errorelement.innerText=message.join(',')
}
})






