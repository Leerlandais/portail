const devOrderUp    = document.getElementById("devOrderUp");
const devOrderDown  = document.getElementById("devOrderDown");
const devList       = document.getElementById('devList');

devOrderUp.addEventListener("click", function () {
    devList.style.flexDirection = "column-reverse";
    devOrderUp.style.display = "none";
    devOrderDown.style.display = "block";
    console.log("button clicked");
});

devOrderDown.addEventListener("click", function () {
    devList.style.flexDirection = "column";
    devOrderDown.style.display = "none";
    devOrderUp.style.display = "";
    console.log("button clicked");
});