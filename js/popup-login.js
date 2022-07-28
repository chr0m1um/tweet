document.getElementById("button-login").addEventListener("click", function(){
    document.querySelector(".popup-login").style.display = "flex";
})

document.querySelector(".cross1").addEventListener("click", function(){
    document.querySelector(".popup-login").style.display = "none";
})
