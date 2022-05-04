var form=0;
function agrandirFormulaire(){
    if(form==0){
        document.getElementsByClassName("plusDeFormulaire")[0].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[1].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[2].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[3].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[4].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[5].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[6].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[7].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[8].style.visibility="visible";
        document.getElementsByClassName("plusDeFormulaire")[9].style.visibility="visible";

        document.getElementsByClassName("high-body")[0].style.height="860px";
        document.getElementsByClassName("formulaire")[0].style.height= "600px";
        document.getElementsByClassName("buttonPlusInfo")[0].innerHTML="Moins d'information";
        form=1;
    }else{
        document.getElementsByClassName("plusDeFormulaire")[0].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[1].style.visibility="hidden";        
        document.getElementsByClassName("plusDeFormulaire")[2].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[3].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[4].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[5].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[6].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[7].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[8].style.visibility="hidden";
        document.getElementsByClassName("plusDeFormulaire")[9].style.visibility="hidden";

        document.getElementsByClassName("high-body")[0].style.height="600px";
        document.getElementsByClassName("formulaire")[0].style.height= "300px";
        form=0;
    }
}
