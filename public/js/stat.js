var element__btn=document.querySelectorAll('.element__btn');
var element__content=document.querySelectorAll('.element__content');

function elementToggle(i){
    if(element__content[i].classList.contains('element__content--hide')){
    element__content[i].classList.remove('element__content--hide');
    element__btn[i].classList.add('element__btn--rotate');
    }
    else{

    element__content[i].classList.add('element__content--hide');
    element__btn[i].classList.remove('element__btn--rotate');
    }
}