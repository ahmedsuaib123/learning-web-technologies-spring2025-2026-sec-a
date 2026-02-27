let btn=document.getElementById('btn');

btn.addEventListener('click',function(){

    let dd=document.getElementById("dd").value;
    let mm=document.getElementById("mm").value;
    let yyyy=document.getElementById("yyyy").value;

    let msg=document.getElementById('msg');

    if(dd=="" || mm=="" || yyyy==""){
        msg.innerHTML="Cannot be empty ";
    } else if(dd<1 || dd>31 || mm<1 || mm>12 || yyyy<1900 || yyyy>2016){
        msg.innerHTML="Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";
    } else{
        msg.innerHTML= dd+"-"+mm+"-"+yyyy;
    }
});