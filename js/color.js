var color=["#FF0033","#CCFF33","#CC6699","#66FF99","#003399"];
var i=0;
    document.querySelector("button").addEventListener("click",function(){
        i= i< color.length ? ++i:0;
        document.querySelector(".continer").style.background=color[i];
    });