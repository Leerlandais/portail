const cardStart = document.getElementById("cardStart");
const cardQuit = document.getElementById("cardQuit");
const cardWindow = document.querySelectorAll(".cardWindow");
const cardWinFront = document.querySelectorAll(".cardWinFront");
const cardWinBack = document.querySelectorAll(".cardWinBack");
let gameTicker = 0;
let gameScore = 0;
let goCount = 0;
let cardBackgrounds = [
    "images/MoustacheGlasses.svg",
    "images/MoustacheGlasses.svg",
    "images/GlassesSmirk.svg",
    "images/GlassesSmirk.svg",
    "images/TongueSquint.svg",
    "images/TongueSquint.svg",
    "images/TongueSmile.svg",
    "images/TongueSmile.svg",
    "images/StarsEyes.svg",
    "images/StarsEyes.svg",
    "images/PurpleDevil.svg",
    "images/PurpleDevil.svg",
    "images/MoneySmile.svg",
    "images/MoneySmile.svg",
    "images/WinkSmile.svg",
    "images/WinkSmile.svg"
  ];
  let firstCard = "";
  let secondCard = "";
console.log(cardBackgrounds);
console.log(cardWindow.length);
cardStart.addEventListener('click', shuffleCards);
/*
for (let i=cardWinBack.length-1; i>=0; i--) {
    cardWinBack[i].style.backgroundImage= `url(${cardBackgrounds[i]})`;
}
*/
for (let i=cardWinFront.length-1; i>=0; i--) {
    cardWinFront[i].style.backgroundImage= `url("images/BWWonder.svg")`;
 //   cardWinBack[i].style.display = "none";
}

cardQuit.addEventListener("click", quitGame);


/*
function shuffleCards () {
    const shuffle = () => { 
        return cardBackgrounds.sort(() => Math.random() - 0.5); 
    }; 
    const shuffledArray = shuffle(cardBackgrounds);     
    console.log(shuffledArray);
    cardBackgrounds = shuffledArray;
    console.log(cardBackgrounds);
}
*/

function shuffleCards() {
    gameTicker = 0;
    gameScore = 0;
    goCount = 0;
    const array = [...cardBackgrounds]; 
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1)); 
        [array[i], array[j]] = [array[j], array[i]]; 
    }

    cardBackgrounds = array; 
    for (let i=0; i<cardWindow.length; i++) {
        cardWindow[i].addEventListener("click", flipCard);
    }
    cardStart.style.display ="none";
    cardQuit.style.display ="block";
}


function flipCard () {
    console.log(this.id);
    let clickedCard = this;
    if (clickedCard === firstCard) {
        return;
    }
//    clickedCard.classList.remove("flipCard");
    clickedCard.classList.toggle("flipCard");
    setTimeout(function () {
        switch (clickedCard.id) {
            case "cardWinFront16" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[15]})`;
                break;
            case "cardWinFront15" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[14]})`;                    
                break;
            case "cardWinFront14" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[13]})`;                    
                break;
            case "cardWinFront13" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[12]})`;                    
                break;
            case "cardWinFront12" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[11]})`;                    
                break;
            case "cardWinFront11" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[10]})`;                    
                break;
            case "cardWinFront10" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[9]})`;                    
                break;
            case "cardWinFront9" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[8]})`;                    
                break;
            case "cardWinFront8" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[7]})`;                    
                break;
            case "cardWinFront7" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[6]})`;                    
                break;
            case "cardWinFront6" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[5]})`;                    
                break;
            case "cardWinFront5" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[4]})`;                    
                break;  
            case "cardWinFront4" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[3]})`;                    
                break;  
            case "cardWinFront3" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[2]})`;                    
                break;  
            case "cardWinFront2" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[1]})`;                    
                break;       
            case "cardWinFront1" :
                clickedCard.style.backgroundImage = `url(${cardBackgrounds[0]})`;                    
                break;                                                                                                                                                                                     
    }    
    


    },250);  // first spin timer
    setTimeout(function () {
    clickedCard.classList.toggle("flipCard");

    if (firstCard === ""){
        firstCard = clickedCard;
        console.log(firstCard.style.backgroundImage);
    }else {
        for (let i=0; i<cardWindow.length; i++) {
            cardWindow[i].removeEventListener("click", flipCard);
        }
        goCount++;
        secondCard = clickedCard;
        console.log(firstCard.style.backgroundImage);
        console.log(secondCard.style.backgroundImage);
        if (firstCard.style.backgroundImage === secondCard.style.backgroundImage) {
            firstCard.childNodes[0].style.backgroundColor = "green";
            firstCard.style.backgroundColor = "green";
            secondCard.childNodes[0].style.backgroundColor = "green";
            secondCard.style.backgroundColor = "green";
            firstCard.removeEventListener("click", flipCard);
            secondCard.removeEventListener("click", flipCard);
            firstCard = "";
            secondCard = "";
            gameScore++;
            if (gameScore === 8){
                setTimeout(function () {
                alert("congrats; that took " + goCount + " turns");
                location.reload();
                },250);
            }
        }else {
            setTimeout(function () {

                           setTimeout(function () {
                               firstCard.style.backgroundImage = 'url("images/BWWonder.svg")'
                               secondCard.style.backgroundImage = 'url("images/BWWonder.svg")'
                            },250);
                            firstCard.classList.toggle("flipCard");
                            secondCard.classList.toggle("flipCard");
                            setTimeout(function () {
                                firstCard.classList.remove("flipCard");
                                secondCard.classList.remove("flipCard");
                            firstCard = "";
                            secondCard = "";
                        },1000); 
                        }, 1000);

                    }
                }
                setTimeout(function () {
                for (let i=0; i<cardWindow.length; i++) {
                    cardWindow[i].addEventListener("click", flipCard);
                }
            },2500);
            },500); 
}
    

function quitGame () {
console.log("quit");

    for (let i=0; i<cardWindow.length; i++) {
        cardWindow[i].removeEventListener("click", flipCard);
        cardWindow[i].classList.toggle("flipCard");
    setTimeout(function () {
            switch (cardWindow[i].id) {
                case "cardWinFront16" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[15]})`;
                    break;
                case "cardWinFront15" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[14]})`;                    
                    break;
                case "cardWinFront14" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[13]})`;                    
                    break;
                case "cardWinFront13" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[12]})`;                    
                    break;
                case "cardWinFront12" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[11]})`;                    
                    break;
                case "cardWinFront11" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[10]})`;                    
                    break;
                case "cardWinFront10" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[9]})`;                    
                    break;
                case "cardWinFront9" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[8]})`;                    
                    break;
                case "cardWinFront8" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[7]})`;                    
                    break;
                case "cardWinFront7" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[6]})`;                    
                    break;
                case "cardWinFront6" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[5]})`;                    
                    break;
                case "cardWinFront5" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[4]})`;                    
                    break;  
                case "cardWinFront4" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[3]})`;                    
                    break;  
                case "cardWinFront3" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[2]})`;                    
                    break;  
                case "cardWinFront2" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[1]})`;                    
                    break;       
                case "cardWinFront1" :
                    cardWindow[i].style.backgroundImage = `url(${cardBackgrounds[0]})`;                    
                    break;                                                                                                                                                                                     
        }    
    },250);
    }
    setTimeout(function () {
        location.reload();
    },3000);
}

