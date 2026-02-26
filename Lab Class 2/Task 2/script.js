let btn=document.getElementById('btn')

btn.addEventListener('click',function(){
    let email=document.getElementById('email').value;
    let msg=document.getElementById('msg');

    if(email==""){
        msg.innerHTML="Cannot be empty!";
    } else if(!validEmail(email)){
        msg.innerHTML="Must be a valid email address (i.e anything@example.com)";
    } else{
        msg.innerHTML=email;
    }

    function validEmail(email){
        return( email.includes("@") && email.includes(".") && email.indexOf("@")<email.lastIndexOf(".") && !email.includes(" "));
    }

});