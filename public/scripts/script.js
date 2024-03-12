/*
window.addEventListener('resize', displayScreenWidth); 

function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();
*/

const portalWindow = document.querySelectorAll(".portalWindow");
const descPrefo = document.getElementById("descPrefo");
const descEarlyJS = document.getElementById("descEarlyJS");
const descTI1 = document.getElementById("descTI1");
const descTI2 = document.getElementById("descTI2");
const descGit = document.getElementById("descGit");
const descCF2M = document.getElementById("descCF2M");
const descCardMem = document.getElementById("descCardMem");

for (let i=0; i<portalWindow.length; i++) {
    portalWindow[i].addEventListener("mouseenter", showDesc);
}

function showDesc () {
    switch(this.id) {
        case "portalToPrefo" :
            descPrefo.style.opacity = 1
            setTimeout(() => {
                descPrefo.style.opacity = 0;
              }, 3000);
            break;
            case "portalToEarlyJS" :
                descEarlyJS.style.opacity = 1
                setTimeout(() => {
                    descEarlyJS.style.opacity = 0;
                  }, 3000);
                break;
                case "portalToTI1" :
                    descTI1.style.opacity = 1
                    setTimeout(() => {
                        descTI1.style.opacity = 0;
                      }, 3000);
                    break;
                    case "portalToTI2" :
                        descTI2.style.opacity = 1
                        setTimeout(() => {
                            descTI2.style.opacity = 0;
                          }, 3000);
                        break;
                        case "portalToCardMem" :
                            descCardMem.style.opacity = 1
                            setTimeout(() => {
                                descCardMem.style.opacity = 0;
                              }, 3000);
                            break;
                        case "portalToGit" :
                            descGit.style.opacity = 1
                            setTimeout(() => {
                                descGit.style.opacity = 0;
                              }, 3000);
                            break;
                            case "portalToCF2M" :
                                descCF2M.style.opacity = 1
                                setTimeout(() => {
                                    descCF2M.style.opacity = 0;
                                  }, 3000);
                                break;      
    }
}

const windowHolder = document.querySelectorAll(".windowHolder");

for (let i=0; i<windowHolder.length; i++) {
    windowHolder[i].addEventListener("click", makeItSpin);
}

function makeItSpin() {
let spinThis = this;
spinThis.classList.toggle("spinIt");
console.log(spinThis.id);
if (window.innerWidth < 800 && spinThis.id != "windowHolder4"){
    alert("Sorry, this site is only available on larger screens");
    return;
}
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
            setTimeout(function () {
        window.open("?p=cardgame", "_self");
    }, 1250);
        break;    
    case "windowHolder6" :
            setTimeout(function () {
        window.open("?p=countries", "_self");
    }, 1250);
        break;
    case "windowHolder7" :
            setTimeout(function () {
        window.open("https://github.com/Leerlandais", "_blank");
    }, 1250);
        break;
    case "windowHolder8" :
            setTimeout(function () {
        window.open("https://www.cf2m.be/home", "_blank");
    }, 1250);
        break;
}

}

const messageHolder = document.querySelectorAll(".messageHolder");
const replyField = document.querySelectorAll(".replyField");
const replyForm = document.querySelectorAll(".replyField");
const parentIdField = document.getElementById("parentIdField");

for (let i=0; i<messageHolder.length; i++) {
    messageHolder[i].addEventListener("click", showReplies);
}


function showReplies () {
    let pleaseWork = this.childNodes;
    for (let i=0; i<replyField.length; i++) {
        replyField[i].setAttribute("style", "display: none;");
        replyForm[i].setAttribute("style", "display: none;");
    }
        pleaseWork[5].setAttribute("style", "display: block;");
   //     pleaseWork[5].childNodes[5].setAttribute("style", "display: block;");
    }

