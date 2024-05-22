window.addEventListener('resize', displayScreenWidth); 
function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();




const descPrefo     = document.getElementById("descPrefo");
const descEarlyJS   = document.getElementById("descEarlyJS");
const descTI1       = document.getElementById("descTI1");
const descTI2       = document.getElementById("descTI2");
const descGit       = document.getElementById("descGit");
const descCF2M      = document.getElementById("descCF2M");
const descCardMem   = document.getElementById("descCardMem");
const descCountries = document.getElementById("descCountries");
const descTabs      = document.getElementById("descTabs");

fetch("?json")
.then(function(response){
    response.json().then(function(data){
        
        makeGlobalCss(data);

        });

        })
        .catch(function(error){
            console.log(error.message);
    });

const portalWindow = document.querySelectorAll(".portalWindow");
    for (let i=0; i<portalWindow.length; i++) {
        portalWindow[i].addEventListener("mouseenter", showDesc);
    }
        function showDesc () {
           let desc = this.childNodes;
        //  console.log(desc);
        // console.log(desc[0].style);
          desc[0].style.opacity = 1;
                setTimeout(() => {
                   desc[0].style.opacity = 0;
                  }, 3000);

        }
const windowHolder = document.querySelectorAll(".windowHolder");
    for (let i=0; i<windowHolder.length; i++) {
        windowHolder[i].addEventListener("click", makeItSpin);
    }
        function makeItSpin() {
        let spinThis = this;
        spinThis.classList.toggle("spinIt");
        spinUrl = spinThis.getAttribute("url");
       if (window.innerWidth < 700){
            alert("Please understand, many of these pages were created before I was able to make responsive view");
        }       
        setTimeout(function () {
            window.open(spinUrl);
        }, 1250);
                

        }

const messageHolder = document.querySelectorAll(".messageHolder");
const replyField    = document.querySelectorAll(".replyField");
const replyForm     = document.querySelectorAll(".replyField");
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

function makeGlobalCss(datas) {
    let body    = document.querySelector('body'),
        link    = document.querySelector("a"),
        header  = document.querySelector(".headerDiv"),
        windows = document.querySelector(".portalWindow");
console.log(header.style.border);
    console.log(datas);
    for (let data in datas) {
        if (datas[data].selector === "backgroundColor") body.style.background = datas[data].value;
        if (datas[data].selector === "font-family") body.style.fontFamily = datas[data].value;
        if (datas[data].selector === "color") { body.style.color = datas[data].value; link.style.color = datas[data].value; }
        if (datas[data].selector === "border-header")  header.style = datas[data].value; 
        if (datas[data].selector === "box-shadow-header") header.style.boxShadow = datas[data].value;
        if (datas[data].selector === "border-radius-windows") windows.style.borderRadius = datas[data].value;
    }
    
  
}