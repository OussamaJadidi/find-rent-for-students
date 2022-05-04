let swit=0;
    function change(){
        if(swit==0){
            document.getElementById("iconUpDownID").src="../photo_files/iconup.png";
            document.getElementsByClassName("box_login")[0].style.visibility="visible";
            swit=1;
        }else{
            document.getElementById("iconUpDownID").src="../photo_files/icondown.png";
            document.getElementsByClassName("box_login")[0].style.visibility="hidden";
            swit=0;
        }
    }
    function demiChange(){
        document.getElementById("iconUpDownID").src="../photo_files/icondown.png";
        document.getElementsByClassName("box_login")[0].style.visibility="hidden";
        swit=0;
}
 