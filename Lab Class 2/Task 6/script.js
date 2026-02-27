let btn=document.getElementById('btn');

btn.addEventListener('click',function(){
    let bloodGroup=document.getElementById("bloodGroup").value;
    let msg=document.getElementById("msg");

    if(bloodGroup==""){
        msg.innerHTML="Must be selected !";
    } else{
        msg.innerHTML=bloodGroup;
    }

});