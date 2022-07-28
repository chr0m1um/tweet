document.getElementById("button-reg").addEventListener("click", function(){
    document.querySelector(".popup-reg").style.display = "flex";
})

document.querySelector(".cross").addEventListener("click", function(){
    document.querySelector(".popup-reg").style.display = "none";
})