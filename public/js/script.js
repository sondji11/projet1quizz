const form=document.getElementById('form');
const login=document.getElementById('loginE');
const password=document.getElementById('password');
const submit=document.getElementById('submit');
const loginInput=document.getElementById('login_input');
const passwordInput=document.getElementById('password_input');

const loginerror=document.getElementById('loginerror');
const passworderror=document.getElementById('passworderror');

login.addEventListener('input', () =>
{
    if(loginInput.value === ''|| loginInput.value == null)
    {
        login.style.border='2px solid red';
    }
    else if(!loginInput.value.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g))
    {
        login.style.border='2px solid red';
    }
    else
    {
        login.style.border='2px solid green';
    }

});
password.addEventListener('input', () =>
{
    if(passwordInput.value === ''|| passwordInput.value == null)
    {
        password.style.border='2px solid red';
    }
    else if(!passwordInput.value.match(/[a-zA-Z]/) ||!passwordInput.value.match(/[0-9]/) || passwordInput.value<6)

    {
        password.style.border='2px solid red';
    }
    else
    {
        password.style.border='2px solid green';
    }

});

form.addEventListener('submit',(e)=>{

        let errormail=[];
        let errorpasswd=[];

        if(loginInput.value === ''|| loginInput.value == null)
        {   
            errormail.push('Cet email est requis');
            login.style.border='2px solid red';
        }
        else if(!loginInput.value.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g))
        {
            errormail.push('le format de votre login est invalide');
            login.style.border='2px solid red';
        }

        if(passwordInput.value === ''|| passwordInput.value == null)
        {
            errorpasswd.push('Ce mot de passe est requis');
            password.style.border='2px solid red';
        }
        else if(!passwordInput.value.match(/[a-zA-Z]/) ||!passwordInput.value.match(/[0-9]/) || passwordInput.value<6)
    
        {
            errorpasswd.push('le format de votre mot de passe est invalide');
            password.style.border='2px solid red';
        }
    
        if(errormail.length > 0)
        {
            e.preventDefault();
            loginerror.innerText=errormail;
        }

        if(errorpasswd.length > 0)
        {    
            e.preventDefault();
            passworderror.innerText = errorpasswd;
        }
})

