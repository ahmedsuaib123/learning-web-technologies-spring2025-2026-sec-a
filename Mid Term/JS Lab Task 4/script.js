var price=1000;

var quantity=document.getElementById("quantity");
var total=document.getElementById("totalPrice");

quantity.addEventListener("input",function(){
    
    if(quantity.value<0){
        quantity.value=0;
    }

    total.value=price*quantity.value;

    if(total.value>1000){
        alert("You are eligible for gift coupon");
    }

});
