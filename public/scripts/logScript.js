const devOrderUp = document.getElementById("devOrderUp");
const devOrderDown = document.getElementById("devOrderDown");
const devList = document.getElementById('devList');

devOrderUp.addEventListener("click", function () {
    devList.style.flexDirection = "column-reverse";
    console.log("button clicked");
});


devOrderDown.addEventListener("click", function () {
    devList.style.flexDirection = "column";
    console.log("button clicked");
});