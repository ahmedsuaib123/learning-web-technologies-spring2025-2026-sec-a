let btn=document.getElementById('btn');

btn.addEventListener('click', function(){

    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;

    let male=document.getElementById("male");
    let female=document.getElementById("female");
    let other=document.getElementById("other");

    let dd=document.getElementById("dd").value;
    let mm=document.getElementById("mm").value;
    let yyyy=document.getElementById("yyyy").value;

    let ssc=document.getElementById("ssc");
    let hsc=document.getElementById("hsc");
    let bsc=document.getElementById("bsc");

    let bloodGroup=document.getElementById("bloodGroup").value;

    let userId=document.getElementById("userId").value;
    let picture=document.getElementById("picture").value;

    let msg=document.getElementById("msg");

    function validEmail(email){
        return (email.includes("@") && email.includes(".") && email.indexOf("@") < email.lastIndexOf(".") && !email.includes(" "));
    }

    if(name==""){
        msg.innerHTML="Name cannot be empty!";
    }
    else if(email==""){
        msg.innerHTML="Email cannot be empty!";
    }
    else if(!validEmail(email)){
        msg.innerHTML="Must be a valid email address!";
    }
    else if(!male.checked && !female.checked && !other.checked){
        msg.innerHTML="At least one gender must be selected!";
    }
    else if(dd=="" || mm=="" || yyyy==""){
        msg.innerHTML="DOB cannot be empty!";
    }
    else if(dd<1 || dd>31 || mm<1 || mm>12 || yyyy<1900 || yyyy>2016){
        msg.innerHTML="Invalid DOB!";
    }
    else if(!ssc.checked && !hsc.checked && !bsc.checked){
        msg.innerHTML="At least one degree must be selected!";
    }
    else if(bloodGroup==""){
        msg.innerHTML="Blood group must be selected!";
    }
    else if(userId==""|| userId<=0){
        msg.innerHTML="UserId must be positive!";
    }
    else if(picture==""){
        msg.innerHTML="Picture cannot be empty!";
    }
    else{
        msg.innerHTML="Registration Successful!";
    }

});