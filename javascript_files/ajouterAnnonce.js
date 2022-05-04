function changeicon(){
    document.getElementById("icon1").style.visibility="hidden";
    document.getElementById("icon2").style.visibility="visible";
}
function changeiconRecursive(){
    document.getElementById("icon1").style.visibility="visible";
    document.getElementById("icon2").style.visibility="hidden";
    
}
function loadimage1(x){
        document.getElementById("icon1").style.visibility="hidden";
        document.getElementById("icon2").style.visibility="hidden";
        document.getElementById("icon1").style.display="none";
        document.getElementById("icon2").style.display="none";
        document.getElementsByClassName("upload-images-h3")[0].style.display="none";
        const reader = new FileReader();
        reader.onload = function(){
            const srcimg= reader.result;
            document.getElementById("imgload1").src= srcimg;
        }
        reader.readAsDataURL(x.files[0]);
    
}

function loadimage2(x){
    if(x.files[0]){
        document.getElementById("plusicon1").style.visibility="hidden";
        const reader = new FileReader();
        reader.onload = function(){
            const srcimg= reader.result;
            document.getElementById("imgload2").src= srcimg;
        }
        reader.readAsDataURL(x.files[0]);
    }
}

function loadimage3(x){
    if(x.files[0]){
        document.getElementById("plusicon2").style.visibility="hidden";
        const reader = new FileReader();
        reader.onload = function(){
            const srcimg= reader.result;
            document.getElementById("imgload3").src= srcimg;
        }
        reader.readAsDataURL(x.files[0]);
    }
}

function loadimage4(x){
    if(x.files[0]){
        document.getElementById("plusicon3").style.visibility="hidden";
        const reader = new FileReader();
        reader.onload = function(){
            const srcimg= reader.result;
            document.getElementById("imgload4").src= srcimg;
        }
        reader.readAsDataURL(x.files[0]);
    }
}

function loadimage5(x){
    if(x.files[0]){
        document.getElementById("plusicon4").style.visibility="hidden";
        const reader = new FileReader();
        reader.onload = function(){
            const srcimg= reader.result;
            document.getElementById("imgload5").src= srcimg;
        }
        reader.readAsDataURL(x.files[0]);
    }
}
