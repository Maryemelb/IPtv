let carousel_slide= document.getElementsByClassName('carousel_slide');
let container=document.getElementsByClassName('container');
let alertbox=document.getElementsByClassName('alertbox');
let btn=document.getElementsByClassName('btn bg-info')
let alert= document.getElementById('alert');
let container1=document.getElementsByClassName('container1');

let navbar=document.getElementsByClassName('navbar');
let container2=document.getElementsByClassName('container-fluid');
let navbarb=document.getElementsByClassName('navbar-brand');
let navbart=document.getElementsByClassName('navbar-toggler-icon')
function innernavbar(){
  navbart.innerHTML="hhhhhhk";
  }

function call() { 
    swal({
        title: "contact us on watssap :)",
        text: "Message!",
        type: "success",
         
       

    }).then(function() {
        window.location = "https://web.whatsapp.com/";
    });

}