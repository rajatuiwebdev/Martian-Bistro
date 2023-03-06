let search = document.getElementById("searchTxt");
search.addEventListener("input", function () {
    let inputval = search.value.toLowerCase();
    let noteCards = document.getElementsByClassName("dish-lists");
    Array.from(noteCards).forEach(function (element) {
        let cardTxt = element.getElementsByTagName("b")[0].innerText;
        cardTxt=cardTxt.toLowerCase();
        if (cardTxt.includes(inputval)) {
            element.style.display = "block";
        }
        else {
            element.style.display = "none";
        }
    })
})




let popup = document.getElementById("dish-view")
function popUpbtn(src){
    
    
    popup.style.display='block';

}
function offpopup(){
    popup.style.display='none';
}