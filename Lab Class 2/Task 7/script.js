let btn=document.getElementById('btn');

btn.addEventListener('click',function(){
    let userId=document.getElementById("userId").value;
    let picture=document.getElementById("picture").value;
    
    let msg=document.getElementById('msg');

    if(userId=="" || userId<=0){
        msg.innerHTML="UserId cannot be empty and has to be a positive number";
    } else if(picture==""){
        msg.innerHTML="Picture cannot be empty";
    } else{
        msg.innerHTML="Profile Picture Submitted Successfully";
    }

});