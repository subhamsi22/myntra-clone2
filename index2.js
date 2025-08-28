var big  = document.getElementById("bigclick");
var big2  = document.getElementById("bigclick2");

    var bigg =  document.getElementById("big");
    var neww = document.querySelector(".new");
 var slideup2  = document.querySelector(".slideup2");
  var slideuploadopen2 = document.getElementById("slideuploadopen2");
  var slideuploadopen3= document.getElementById("slideuploadopen3");
   var slideuploadopen = document.getElementById("slideuploadopen");
     var slideuploadopen4= document.getElementById("slideuploadopen4");
 var slideup2  = document.querySelector(".slideup2");



 var slideup3  = document.querySelector(".slideup3");
  var slideup4  = document.querySelector(".slideup4");
    var admin11  = document.querySelector(".admin11");


 big.addEventListener("click",()=>{
    bigg.style.height = "300px";
    big.style.display = "none";
        big2.style.display = "block";
        neww.style.display = "flex";

 });
  big2.addEventListener("click",()=>{
    bigg.style.height = "";
    big2.style.display = "none";
        big.style.display = "block";
                neww.style.display = "none";


 });


var profilenewbox  = document.getElementById("profilenewbox");
var profile_button = document.getElementById("profile_button");

profile_button.addEventListener("click", function() {
    if (profilenewbox.style.display === "block" || 
        window.getComputedStyle(profilenewbox).display === "block") {
        profilenewbox.style.display = "none";
    } else {
        profilenewbox.style.display = "block";
    }
});




 var slideup  = document.querySelector(".slideup");
 slideuploadopen.addEventListener("click",()=>{
    slideup.style.display = "block";
    slideup2.style.display = "none";
slideup3.style.display = "none";
admin11.style.display ="none";
slideup4.style.display = "none";


 })


// 2nd slide upload

 slideuploadopen2.addEventListener("click",()=>{
    slideup.style.display = "none";
slideup2.style.display = "block";
slideup3.style.display = "none";
slideup4.style.display = "none";
admin11.style.display ="none";


 })






slideuploadopen3.addEventListener("click",()=>{
   slideup.style.display = "none";
slideup2.style.display = "none";
slideup3.style.display = "block";
slideup4.style.display = "none";
admin11.style.display ="none";

})
slideuploadopen4.addEventListener("click",()=>{

   slideup.style.display = "none";
slideup2.style.display = "none";
slideup3.style.display = "none";
slideup4.style.display = "block";
admin11.style.display ="none";

});




var x  = document.getElementById("x");
x.addEventListener("click",()=>{
    profilenewbox.style.display = "none";
});

var date1 = document.querySelector(".date2");
function updateDateDisplay(){
   let newdate =  new Date();
let options  = {
    weekday: 'long',
  
};
date2.textContent = newdate.toLocaleDateString('en-US', options);
}

updateDateDisplay();

var datefinal = document.getElementById("datefinal");
function updte2(){
    let datefi = new Date();
    let options2= {
        
        month: 'long'
    }
    datefinal.textContent = datefi.toLocaleDateString('en-US', options2);   
}
updte2();

var datefo = document.getElementById("dateq");
function mydate(){
    let  dateqq  =  new Date();
    let options3 = {
        
        year: 'numeric',
        day: 'numeric'
    };
    datefo.textContent = dateqq.toLocaleDateString('en-US', options3);
}
mydate();
var datah1 = document.getElementById("datah1").innerText;

var graph1 = document.querySelector(".graph1");
var chartHeight = 200;    // same as .grph CSS height
var maxValue = 100;       // max scale (0–100)

// calculate proportional height
var newHeight = (datah1 / maxValue) * chartHeight;
graph1.style.height = newHeight + "px";
