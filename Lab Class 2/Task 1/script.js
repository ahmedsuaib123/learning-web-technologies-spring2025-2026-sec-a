let btn=document.getElementById('btn')

btn.addEventListener('click',function(){
    let name=document.getElementById('name').value;
    let msg=document.getElementById('msg');

    let invalidChar = false;

    for(let i=0;i<name.length;i++){
        let ch=name[i];

        if(!((ch>='A' && ch<='Z') || (ch>='a' && ch<='z') || ch=='.' || ch=='-' || ch==' ')){
            invalidChar=true;
            break;
        }
    }

    if(name==""){
        msg.innerHTML="Cannot be empty!";
    } else if(name.split(" ").length<2){
        msg.innerHTML="Contains at least two words!";
    } else if(invalidChar){
        msg.innerHTML="Can contain a-z or A-Z or dot(.) or dash(-) ";
    } else if(!((name[0]>='A' && name[0]<='Z') || (name[0]>='a' && name[0]<='z'))){
        msg.innerHTML="Must start with a letter ";
    }else{
        msg.innerHTML=name;
    }

});