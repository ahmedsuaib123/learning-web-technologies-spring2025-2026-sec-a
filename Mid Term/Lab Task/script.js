let calcBtn = document.getElementById("showCalc");
let calculator = document.getElementById("calculator");
let display = document.getElementById("display");
let buttonArea = document.getElementById("buttons");

let num1="";
let operator="";

calcBtn.onclick=function(){

    if(buttonArea.children.length==0){

        let arr = ["7","8","9","/",
                   "4","5","6","*",
                   "1","2","3","-",
                   "0",".","+","=",
                   "CLEAR"];

        for(let i=0;i<arr.length;i++){

            let btn = document.createElement("button");
            btn.innerHTML = arr[i];

            if(arr[i]=="CLEAR"){
                btn.classList.add("clearBtn");
            }

            btn.onclick=function(){

                let val = this.innerHTML;

                if(val=="+" || val=="-" || val=="*" || val=="/"){
                    num1 = display.value;
                    operator = val;
                    display.value = "";
                } else if(val=="="){

                    let num2=display.value;
                    let result;

                    if(operator=="+"){
                        result=parseInt(num1)+parseInt(num2);
                    } else if(operator=="-"){
                        result=parseInt(num1)-parseInt(num2);
                    } else if(operator=="*"){
                        result=parseInt(num1)*parseInt(num2);
                    } else if(operator=="/"){
                        result=parseInt(num1)/parseInt(num2);
                    }

                    display.value=result;
                } else if(val=="CLEAR"){
                    display.value="";
                    num1="";
                    operator="";
                } else{
                    display.value+=val;
                }

            };
            buttonArea.appendChild(btn);
        }
    }
}