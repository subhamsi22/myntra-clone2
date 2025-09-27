// var start  = json_encode($start);
// var start  = document.getElementById("start");

// var start1  = document.getElementById("start1");
//  var start2  = document.getElementById("start2");
//   var start3  = document.getElementById("start3");
//  var start4 = document.getElementById("start4");
//  var start5 = document.getElementById("start5");
//   var start6  = document.getElementById("start6");

// //1st
// let array = typeof phpdata !== 'undefine' ? phpdata: [];
// var res = 0;
// function changer() {
//     if(res<array.length){
//         start.innerText = array[res];
//         res++;
//         setTimeout(changer,100);
//     }
    
// }
// changer();



// //2nd
// var array1 = typeof phpdata1 !=='undefined'? phpdata1:[];
// var res1 = 0;
// function changer1() {
//     if(res1<array1.length){
//         start1.innerText = array1[res1];
//         res1++;
//         setTimeout(changer1,130);
//     }
    
// }
// changer1();
// //3rd
// var array2 =  typeof phpdata2 !== "undefined" ? phpdata2 :[];
// var res2 =0;
// function changer2(){
//     if(res2<array2.length){
// start2.innerText = array2[res2];
// res2++;
// setTimeout(changer2,200);

// }
// }
// changer2();
// //4th

// var array3 =  typeof phpdata3 !== "undefined" ? phpdata3 :[];
// var res3 =0;
// function changer3(){
//     if(res3<array3.length){
// start3.innerText = array3[res3];
// res3++;
// setTimeout(changer3,200);

// }
// }
// changer3();
// //5th

// var array4 =  typeof phpdata4 !== "undefined" ? phpdata4 :[];
// var res4 =0;
// function changer4(){
//     if(res4<array4.length){
// start4.innerText = array4[res4];
// res4++;
// setTimeout(changer4,200);

// }
// }
// changer4();
// //6th 

// var array5 =  typeof phpdata5 !== "undefined" ? phpdata5 :[];
// var res5 =0;
// function changer5(){
//     if(res5<array5.length){
// start5.innerText = array5[res5];
// res5++;
// setTimeout(changer5,200);

// }
// }
// changer5();


// var loader  = document.getElementById("loader");
// var main  = document.getElementById("main");

// window.addEventListener("load",function(){
//     setTimeout(() => {
//         loader.style.display = "none";
//         main.style.display = "block";

//     }, 5000);
// })


var input =  document.getElementById("in");
input.addEventListener("focus",()=>{
input.style.border = "none";
input.style.outline = "none";
    input.style.boxShadow = "none";
});


// slide 
var prv  = document.getElementById("prv");
var next = document.getElementById("next");
var slide =  document.querySelector(".slide");
var box = document.querySelectorAll(".box");
 

var  a = 0;
function slide1(){
    const b = -a*1300;
    slide.style.transform = `translatex(${b}px)`;

}
prv.addEventListener("click",()=>{
    if(a>0){
         a--;
        slide1();
       
    }
});
next.addEventListener("click",()=>{
    if(a<box.length -1){
        a++;
        slide1();
        
    }
});
function goNext() {
    if(a < box.length - 1){
        a++;
    } else {
        a = 0; 
    }
    slide1();
}

// Start Auto Sliding
setInterval(goNext, 3000);

// 2nd animation 
 var slide2 =  document.querySelector(".slide2");
 var boxes2 =  document.querySelectorAll(".box2");
 var frame2 =  document.querySelector(".frame2");
 let a2 =  0;
 let interval2 = null;

 function newslide2(){
    const b2  = -a2*60;
    slide2.style.transform = `translatex(${b2}px)`;
 }
    function goNext2(){
    if(a2<boxes2.length-1){
        a2++;

    }
    else{
        a2 =0;

    }
    newslide2();
 } 
 

frame2.addEventListener("mouseout",()=>{
    interval2 = setInterval(goNext2,2000);
});
frame2.addEventListener("mouseover",()=>{
    clearInterval(interval2);
    interval2 = null;
});

// slide nav bar


 // 3rd slide
 var prv3  = document.getElementById("prv11");
var next3 = document.getElementById("next11");
var slide3 =  document.querySelector(".slide3");
var box3 = document.querySelectorAll(".box3");
 

var aa = 0;
function slide12(){
    const bb = -aa*100;
    slide3.style.transform = `translateX(${bb}px)`;

}
prv3.addEventListener("click",()=>{
    if(aa>0){
         aa--;
        slide12();
       
    }
});
next3.addEventListener("click",()=>{
    if(aa<box3.length -1){
        aa++;
        slide12();
        
    }
});
function goNext3() {
    if(aa < box3.length - 1){
        aa++;
    } else {
        aa = 0; 
    }
    slide12();
}

// Start Auto Sliding
setInterval(goNext3, 3000);
gsap.to(".adv",{
    y:20, opacity:1,
        ease:"power1.inOut",
    scrollTrigger:{
        trigger:".adv",
        start:"top 80%",
        end:"bottom 20%",
        scrub:1,
       
        // markers:true,
        toggleActions:"play none none reverse"
    }
});
gsap.to(".grid",{
    y:30,
    opacity:1,
    ease:"power1.inOut",
    scrollTrigger:{
        trigger:".grid",
        start:"top 80%",
        end:"bottom 50%",
        scrub:1,
        // markers:true,
        toggleActions:"play none none reverse"
    }
});

