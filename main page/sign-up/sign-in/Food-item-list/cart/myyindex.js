b1.addEventListener("click",function(){

    document.getElementById("h1").style.display = "block";
    document.getElementById("h2").style.display = "block";
    document.getElementById("h3").style.display = "block";
    document.getElementById("h4").style.display = "block";
    
    
    
    var value = (document.getElementById("str").value);
    const myArray = value.split(",");
    var tc=Number(0);

    for (myval of myArray){
        var current = myval;
        if(current == 1){
            document.getElementById("item1").style.display = "inline-block";
            document.getElementById("item11").style.display = "inline-block";
            document.getElementById("item12").style.display = "inline-block";
            document.getElementById("item13").style.display = "inline-block";
            var cost1 = Number(document.getElementById("item11").innerHTML);
            
            tc = eval(Number(tc)+Number(cost1));
            

            
        }
        if(current == 2){
            document.getElementById("item2").style.display = "inline-block";
            document.getElementById("item21").style.display = "inline-block";
            document.getElementById("item22").style.display = "inline-block";
            document.getElementById("item23").style.display = "inline-block";
            var cost2 = Number(document.getElementById("item21").innerHTML);
            tc = tc+cost2;
            
        }

        if(current == 3){
            document.getElementById("item3").style.display = "inline-block";
            document.getElementById("item31").style.display = "inline-block";
            document.getElementById("item32").style.display = "inline-block";
            document.getElementById("item33").style.display = "inline-block";
            var cost3 = Number(document.getElementById("item31").innerHTML);
            tc = tc+cost3;
            
        }

        if(current == 4){
            document.getElementById("item4").style.display = "inline-block";
            document.getElementById("item41").style.display = "inline-block";
            document.getElementById("item42").style.display = "inline-block";
            document.getElementById("item43").style.display = "inline-block";
            var cost4 = Number(document.getElementById("item41").innerHTML);
            tc = tc+cost4;
            
        }

        if(current == 5){
            document.getElementById("item5").style.display = "inline-block";
            document.getElementById("item51").style.display = "inline-block";
            document.getElementById("item52").style.display = "inline-block";
            document.getElementById("item53").style.display = "inline-block";
            var cost5 = Number(document.getElementById("item51").innerHTML);
            tc = tc+cost5;
            
        }

        if(current == 6){
            document.getElementById("item6").style.display = "inline-block";
            document.getElementById("item61").style.display = "inline-block";
            document.getElementById("item62").style.display = "inline-block";
            document.getElementById("item63").style.display = "inline-block";
            var cost6 = Number(document.getElementById("item61").innerHTML);
            tc = tc+cost6;
            
        }

        if(current == 7){
            document.getElementById("item7").style.display = "inline-block";
            document.getElementById("item71").style.display = "inline-block";
            document.getElementById("item72").style.display = "inline-block";
            document.getElementById("item73").style.display = "inline-block";
            var cost7 = Number(document.getElementById("item71").innerHTML);
            tc = tc+cost7;
            
        }

        if(current == 8){
            document.getElementById("item8").style.display = "inline-block";
            document.getElementById("item81").style.display = "inline-block";
            document.getElementById("item82").style.display = "inline-block";
            document.getElementById("item83").style.display = "inline-block";
            var cost8 = Number(document.getElementById("item81").innerHTML);
            tc = tc+cost8;
            
        }

        if(current == 9){
            document.getElementById("item9").style.display = "inline-block";
            document.getElementById("item91").style.display = "inline-block";
            document.getElementById("item92").style.display = "inline-block";
            document.getElementById("item93").style.display = "inline-block";
            var cost9 = Number(document.getElementById("item91").innerHTML);
            tc = tc+cost9;
            
        }
    }
    document.getElementById("st").innerHTML=tc;
    console.log(tc);
    var tax = 15;
    var nc1 = Number(tc)+Number(tax);
    console.log(nc1);
    document.getElementById("nc").innerHTML=nc1;
    document.getElementById("ses").innerHTML=10;
    document.getElementById("vat").innerHTML=5;

    cbutton.addEventListener("click",function(){

        var mycoupon = document.getElementById("coupon").value;
        var couponcode = "fifty";
        if(mycoupon == couponcode){
            var tt = Number(document.getElementById("st").innerHTML);
            tt = Math.round(tt/2);
            var nc = eval(tt+15);
            document.getElementById("st").innerHTML=tt;
            document.getElementById("nc").innerHTML=nc;
    
            document.getElementById("cmsg").style.display = "block";
            document.getElementById("cmsg").style.color = "green";
        }
        else{
            document.getElementById("cmsg").style.color = "red";
            document.getElementById("cmsg").innerHTML = "Please enter correct coupon-code";
        }
    
    });


});

item13.addEventListener("click",function(){

    document.getElementById("item1").style.display = "none";
    document.getElementById("item11").style.display = "none";
    document.getElementById("item12").style.display = "none";
    document.getElementById("item13").style.display = "none";


});

item23.addEventListener("click",function(){

    document.getElementById("item2").style.display = "none";
    document.getElementById("item21").style.display = "none";
    document.getElementById("item22").style.display = "none";
    document.getElementById("item23").style.display = "none";


});

item33.addEventListener("click",function(){

    document.getElementById("item3").style.display = "none";
    document.getElementById("item31").style.display = "none";
    document.getElementById("item32").style.display = "none";
    document.getElementById("item33").style.display = "none";


});

item43.addEventListener("click",function(){

    document.getElementById("item4").style.display = "none";
    document.getElementById("item41").style.display = "none";
    document.getElementById("item42").style.display = "none";
    document.getElementById("item43").style.display = "none";


});

item53.addEventListener("click",function(){

    document.getElementById("item5").style.display = "none";
    document.getElementById("item51").style.display = "none";
    document.getElementById("item52").style.display = "none";
    document.getElementById("item53").style.display = "none";


});

item63.addEventListener("click",function(){

    document.getElementById("item6").style.display = "none";
    document.getElementById("item61").style.display = "none";
    document.getElementById("item62").style.display = "none";
    document.getElementById("item63").style.display = "none";


});

item73.addEventListener("click",function(){

    document.getElementById("item7").style.display = "none";
    document.getElementById("item71").style.display = "none";
    document.getElementById("item72").style.display = "none";
    document.getElementById("item73").style.display = "none";


});

item83.addEventListener("click",function(){

    document.getElementById("item8").style.display = "none";
    document.getElementById("item81").style.display = "none";
    document.getElementById("item82").style.display = "none";
    document.getElementById("item83").style.display = "none";


});

item93.addEventListener("click",function(){

    document.getElementById("item9").style.display = "none";
    document.getElementById("item91").style.display = "none";
    document.getElementById("item92").style.display = "none";
    document.getElementById("item93").style.display = "none";


});

