function opennav(){
    document.getElementById("addsidebar").style.width="250px";
    document.getElementById("main").style.marginLeft="250px";
    document.getElementById("main-content").style.marginLeft="250px";
    document.getElementById("main").style.display="none";
}
function closenav(){
    document.getElementById("addsidebar").style.width="0px";
    document.getElementById("main").style.marginLeft="0";
    document.getElementById("main").style.display="block";
}