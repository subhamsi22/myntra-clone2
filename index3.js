var btt = document.getElementById("btt");
var fieldset = document.getElementById("ff");

btt.addEventListener("click",()=>{
    var username =  document.getElementById("username").value.trim()
        var email =  document.getElementById("email").value.trim();

var number =  document.getElementById("number").value.trim();
var pass =  document.getElementById("pass").value.trim();
var male =  document.getElementById("male");
var female =  document.getElementById("female");

if(username ===""|| email ===""||number.length !== 10 || !/^\d{10}$/.test(number)|| pass==="" ||
(!male.checked && !female.checked)
){
   alert("please emter the data");
}
else{
 alert("you have been succesfully singup")
window.location.href = "regester2.php";
}
});
        
