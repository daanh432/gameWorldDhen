let counterSelectedItems = 0;

function addToBasket(elmnt, gameId) {
    let checkbox = document.getElementById("checkbox" + gameId);
    let counter = document.getElementById("amountSelectedDisplayDhen");

    if (checkbox.checked === true) {
        elmnt.innerText = "Order";
        checkbox.checked = false;
        counterSelectedItems = counterSelectedItems - 1;
        counter.innerText = counterSelectedItems;
    } else {
        elmnt.innerText = "Added";
        checkbox.checked = true;
        counterSelectedItems = counterSelectedItems + 1;
        counter.innerText = counterSelectedItems;
    }
}