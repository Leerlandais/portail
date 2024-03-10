const showArtist =  document.querySelectorAll(".showArtist");
const songUL = document.querySelectorAll(".songUL");
console.log(showArtist.length);


for (i = 0; i < showArtist.length; i++) {
    showArtist[i].addEventListener("click", showSongs);
    
}

function showSongs () {
    let showThis = this;
    if (showThis.nextElementSibling.style.display === "block") {
        console.log("yes");
        showThis.nextElementSibling.setAttribute("style", "display: none;");   
    }else {
        showThis.nextElementSibling.setAttribute("style", "display: block;");
    }
}
    