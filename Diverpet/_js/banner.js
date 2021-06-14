function slide1(){
document.getElementById('id').src="_img/banner1_1.jpg";
setTimeout("slide2()", 4000)
}
  
function slide2(){
document.getElementById('id').src="_img/banner2.jpg";
setTimeout("slide3()", 4000)
}
  
function slide3(){
document.getElementById('id').src="_img/banner3.jpg";
setTimeout("slide1()", 4000)
}