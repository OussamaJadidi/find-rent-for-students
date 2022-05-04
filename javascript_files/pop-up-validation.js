function show_pop_up_validation(){
    document.getElementsByClassName("pop-up-validation")[0].style.display="block";
    setTimeout(hid_pop_up_validation,3000);
}
function hid_pop_up_validation(){
    document.getElementsByClassName("pop-up-validation")[0].style.display="none";
    window.location.href="../php_files/pageMesAnnonces.php";
}
