const name=document.getElementById('name');
const password=document.getElementById('password');
const form=document.getElementById('myform');
const errorelement=document.getElementById('error');
form.addEventListener('Login',(e) =>
{
let message =['hi essra ']
if(name.value===' ' name.value==null)
{
    message.push('enter your name please !')

}

if(password.value===' ' password.value==null)
{
    message.push('enter your password please !')
}
if(password.value.length<=6)
{
    message.push('password must be longer 6 characters !')
}

if(message.length>0)
{
    e.preventDefault()
    errorelement.innerText=message.join(',')
}
})





