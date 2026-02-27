let btn=document.getElementById('btn');

btn.addEventListener('click',function(){
    let male=document.getElementById("male");
    let female=document.getElementById("female");
    let other=document.getElementById("other");
    
    let msg=document.getElementById('msg');

    if(!male.checked && !female.checked && !other.checked){
        msg.innerHTML="At least one of them has to be selected";
    } else{
        msg.innerHTML="Gender Selected Successfully";
    }

});