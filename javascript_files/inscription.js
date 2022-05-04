var b= true;
function form1(){
    b=true;
    if(document.getElementsByClassName("inputform")[0].value==""){
        document.getElementsByClassName('emailVide')[0].style.display="block";
        b=false;
    }else{
        document.getElementsByClassName('emailVide')[0].style.display="none";
    }
    if(document.getElementsByClassName("inputform")[1].value==""){
        document.getElementsByClassName('nomVide')[0].style.display="block";
        b=false;
    }else{
        document.getElementsByClassName('nomVide')[0].style.display="none";
    }
    if(b==true){
        document.getElementsByClassName("inscription-1")[0].style.transform="translate(-100%)";
        document.getElementsByClassName("inscription-2")[0].style.transform="translate(-100%)";
        document.getElementsByClassName("inscription-3")[0].style.transform="translate(-100%)";
    }
}
function form2(){
    b=true;
    if(document.getElementsByClassName("inputform")[2].value==""){
        document.getElementsByClassName('villeVide')[0].style.display="block";
        b=false;
    }else{
        document.getElementsByClassName('villeVide')[0].style.display="none";
    }
    if(document.getElementsByClassName("inputform")[3].value==""){
        document.getElementsByClassName('gmailVide')[0].style.display="block";
        b=false;
    }else{
        document.getElementsByClassName('gmailVide')[0].style.display="none";
    }
    if(document.getElementsByClassName("inputform")[4].value==""){
        document.getElementsByClassName('telephoneVide')[0].style.display="block";
        b=false;
    }else{
        document.getElementsByClassName('telephoneVide')[0].style.display="none";

    }
    if(b){
        document.getElementsByClassName("inscription-1")[0].style.transform="translate(-200%)";
        document.getElementsByClassName("inscription-2")[0].style.transform="translate(-200%)";
        document.getElementsByClassName("inscription-3")[0].style.transform="translate(-200%)";
        
    }
}
function form3(){
    document.getElementsByClassName("inscription-1")[0].style.transform="translate(-200%)";
    document.getElementsByClassName("inscription-2")[0].style.transform="translate(-200%)";
    document.getElementsByClassName("inscription-3")[0].style.transform="translate(-200%)";
    document.getElementsByClassName('inputform')[2].value="";
        document.getElementsByClassName('inputform')[3].value="";
        document.getElementsByClassName('inputform')[4].value="";
}
function form4(){
    h=true;
    if(document.getElementsByClassName("inputform")[5].value==""){
        document.getElementsByClassName('motpasseVide')[0].style.display="block";
        document.getElementById("aaahhh").disabled= true;
        h=false;
    }else{
        document.getElementsByClassName('motpasseVide')[0].style.display="none";
        document.getElementById("aaahhh").disabled= false;
        h=true;
    }
    if(document.getElementsByClassName("inputform")[6].value==""){
        document.getElementsByClassName('motpasseIncorrect')[0].style.display="block";
        document.getElementById("aaahhh").disabled= true;
        h=false;
    }else{
        document.getElementsByClassName('motpasseIncorrect')[0].style.display="none";
        document.getElementById("aaahhh").disabled= false;
        h=true;
    }
    if(document.getElementsByClassName("inputform")[5].value!=document.getElementsByClassName("inputform")[6].value){
        document.getElementsByClassName('motpasseIncorrect')[0].style.display="block";
        document.getElementById("aaahhh").disabled= true;
        h=false;
    }else{
        document.getElementsByClassName('motpasseIncorrect')[0].style.display="none";
        document.getElementById("aaahhh").disabled= false;
        h=true;
    }
    if(h==true){
        document.getElementById("aaahhh").disabled= false;
    }
}
// function form5(){
//     if(document.getElementsByClassName("inputform")[7].value=="" || document.getElementsByClassName("inputform")[8].value==""){
//         document.getElementsByClassName('dataIncorrect')[0].style.display="block";
//         document.getElementById("hhhaaa").disabled= false;
//     }else{
//         document.getElementsByClassName('dataIncorrect')[0].style.display="none";
//         document.getElementById("hhhaaa").disabled= true;
//     }
// }