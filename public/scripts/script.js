/*
window.addEventListener('resize', displayScreenWidth); 


function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();
*/
const windowHolder = document.querySelectorAll(".windowHolder");

for (i=0; i<windowHolder.length; i++) {
    windowHolder[i].addEventListener("click", makeItSpin);

}
function makeItSpin() {
let spinThis = this;
spinThis.classList.toggle("spinIt");
console.log(spinThis.id);

switch(spinThis.id) {
    case "windowHolder1" :
            setTimeout(function () {
        window.open("https://2023.webdev-cf2m.be/Lee/Site/", "_blank");
    }, 1250);
        break;
    case "windowHolder2" :
            setTimeout(function () {
        window.open("https://2023.webdev-cf2m.be/Lee/javaStuff/", "_blank");
    }, 1250);
        break;
    case "windowHolder3" :
            setTimeout(function () {
        window.open("https://2023.webdev-cf2m.be/Lee/TI/public/", "_blank");
    }, 1250);
        break;
    case "windowHolder4" :
            setTimeout(function () {
        window.open("https://2023.webdev-cf2m.be/Lee/TI2-HomeVersion/public/", "_blank");
    }, 1250);
        break;
    case "windowHolder5" :
 //           setTimeout(function () {
 //       window.open("");
 //   }, 1250);
        break;    
    case "windowHolder6" :
 //           setTimeout(function () {
 //       window.open("");
 //   }, 1250);
        break;
    case "windowHolder7" :
            setTimeout(function () {
        window.open("https://2023.webdev-cf2m.be/Lee/Site/", "_blank");
    }, 1250);
        break;
    case "windowHolder8" :
            setTimeout(function () {
        window.open("https://2023.webdev-cf2m.be/Lee/Site/", "_blank");
    }, 1250);
        break;
}

}

