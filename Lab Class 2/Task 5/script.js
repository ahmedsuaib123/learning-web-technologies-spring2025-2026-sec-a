let btn=document.getElementById('btn');

btn.addEventListener('click',function(){

    let ssc=document.getElementById("ssc");
    let hsc=document.getElementById("hsc");
    let bsc=document.getElementById("bsc");

    let msg=document.getElementById("msg");

    if(!ssc.checked && !hsc.checked && !bsc.checked){
        msg.innerHTML = "At least one of them has to be selected!";
    }
    else{
        msg.innerHTML = "Degree selected successfully!";
    }

});