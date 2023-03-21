



/*  function afficherMenu(){
var etat,resultat;
etat=document.getElementsByClassName("nav_links_mobile")[0].style.display;
if(etat=="none")resultat="flex";
else resultat="none";
document.getElementsByClassName("nav_links_mobile")[0].style.display = resultat;
 }
function kkk(){
 document.getElementsByClassName("nav_links_mobile")[0].style.display = "none";
}*/


 /* When the user clicks on the button, 
 toggle between hiding and showing the dropdown content */
 /*function afficherMenu() {
   document.getElementById("nav_links_mobile").classList.toggle("show");
 }
 
 // Close the dropdown if the user clicks outside of it

 window.onclick = function(event) {
   if (  !(event.target.matches('.button-menu') || event.target.matches('.nav-container'))  ) {
     var openDropdown = document.getElementsByClassName("nav_links_mobile")[0];

       if (openDropdown.classList.contains('show')) {
         openDropdown.classList.remove('show');
       }
     
   }
 }*/


 var cmt_adultes=1;
 var cmt_enfants=0;
 var cmt_bebes=0;
       function open_class(){
          document.getElementsByClassName("bar-recherche__list-choix-de-classe")[0].style.display = "flex";
          
        var listee= document.getElementsByClassName("bar-recherche__choix-classe");
        for(var i=0;i<listee.length;i++){
            listee[i].onclick = function() {selectClasse(event)};

        }
        }


 
 function selectClasse(event){
     var text = event.target.textContent;
     document.getElementsByClassName("classe_affiche")[0].textContent=text;
     document.getElementsByClassName("bar-recherche__list-choix-de-classe")[0].style.display = "none";
     document.getElementById('classe').value=text;

 }

var input_depart=document.getElementsByClassName("bar-recherche__aeroport");
input_depart.onfocus = function(){aeroport_focus()};


/** 
window.onload()=function(){load()};
function load(){
    alert();
}
**/


function open_passager(){
    document.getElementsByClassName('container_passager')[0].style.display="flex";
    accueil_flou();
    
    


}

function close_passager(){
    accueil_unflou();
    document.getElementsByClassName('container_passager')[0].style.display="none";

    var text_places="";
    if(cmt_adultes>0) text_places+="<b>"+cmt_adultes+"</b>"+" Adultes";
    if(cmt_enfants>0) text_places+=", <b>"+cmt_enfants+"</b>"+" enfants";
    if(cmt_bebes>0) text_places+=", <b>"+cmt_bebes+"</b>"+" bebes";
    

    document.querySelector('.bar-recherche__affiche_passager').innerHTML=text_places;
    document.querySelector('#nb_adultes').value=cmt_adultes;
    document.querySelector('#nb_enfants').value=cmt_enfants;
    document.querySelector('#nb_bebes').value=cmt_bebes;
    
}


 function increment(type){
     
   if (type=='adultes') {
      
     if (cmt_adultes<9) 
     cmt_adultes++;
     else
     cmt_adultes=9;    
     document.querySelector('.adlts').innerHTML=cmt_adultes;
     
     }

     
     if (type=='enfants') {
        if (cmt_enfants<9) 
        cmt_enfants++;
        else
         cmt_enfants=9;
        document.querySelector('.enfs').innerHTML=cmt_enfants;
       
    }
    if (type=='bebes') {
        if (cmt_bebes<9) 
        cmt_bebes++;
        else
         cmt_bebes=9;
        document.querySelector('.bbs').innerHTML=cmt_bebes;
       
    }


 }

 function decrement(type){
     
     if (type=='adultes') {
         if (cmt_adultes>0) 
         cmt_adultes--;
         else
          cmt_adultes=0;   
          document.querySelector('.adlts').innerHTML=cmt_adultes;
     
     }



     if (type=='enfants') {
         if (cmt_enfants>0) 
         cmt_enfants--;
         else
          cmt_enfants=0;
          document.querySelector('.enfs').innerHTML=cmt_enfants;
        
     }

     if (type=='bebes') {
        if (cmt_bebes>0) 
        cmt_bebes--;
        else
         cmt_bebes=0;
         document.querySelector('.bbs').innerHTML=cmt_bebes;
    }

 }
  

     function open_classe(){
         document.getElementsByClassName('list_choix_de_classe')[0].style.display="flex";
     }
     function close_classe(){
        document.getElementsByClassName('list_choix_de_classe')[0].style.display="none";
    }

     var choix = document.getElementsByClassName('choix_classe');

     for (var i = 0; i < choix.length; i++) {
         choix[i].onclick= function() { choisi(event) };      
     }
    function choisi(event){
     var choisi = document.getElementsByClassName('choisi');
      if (choisi.length>0) 
         choisi[0].classList.remove('choisi');

        event.target.classList.add('choisi');

        var classe_choisi= event.target.textContent;

        document.getElementsByClassName('classe_affiche')[0].innerHTML = classe_choisi;
        
        document.getElementsByClassName('list_choix_de_classe')[0].style.display = "none";
        document.getElementById('classe').value="knvknvkn";
      

      }

function accueil_flou(){
    document.getElementsByClassName('container-contenu')[0].classList.add('flou');
    //document.body.style.overflow="hidden";
}

function accueil_unflou(){
    //document.body.style.overflow="unset";
    document.getElementsByClassName('container-contenu')[0].classList.remove('flou');
}


var alert_ok=document.querySelector('#alert_ok');
var container_alert=document.querySelector('.container_alert');
if(alert_ok!=null){
    alert_ok.addEventListener("click",function(){
        accueil_unflou();
        container_alert.style.display="none";

    });
}



