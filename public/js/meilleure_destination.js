

function show__offre(i){
    document.getElementsByClassName('destination__info')[i-1].classList.add('destination__info--show');
}

function hide__offre(i){
    document.getElementsByClassName('destination__info')[i-1].classList.remove('destination__info--show');
}