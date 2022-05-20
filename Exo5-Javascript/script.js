var cpt = 0

function increment() {
    cpt++;
    document.querySelector('#numberClicks').innerHTML = cpt;
}

function game() {
    increment();
    if (cpt === 10) {
        document.querySelector('#gameText').remove();
        document.body.style.background = "green";
        document.querySelector('#myH1').innerHTML = "Bravo, c'est gagné !";
        document.querySelector('#myButton').remove();
    }
}