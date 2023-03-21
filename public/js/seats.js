var passengers=document.querySelectorAll('.passenger__logo');
 
var seats=document.querySelectorAll('.airplane_seats__seat');
var num_pass=0;

for(var i=0;i<passengers.length;i++)
    passengers[i].onclick = function(){passengerClick(event)};
for(var i=0;i<seats.length;i++)
    seats[i].onclick = function(){seatClick(event)};    
    


 function passengerClick(event){
    num_pass= event.target.id.substr(4) ;
    
    for(var i=0;i<passengers.length;i++) 
    passengers[i].classList.remove('passenger__logo--selected');

     event.target.classList.add("passenger__logo--selected");
 }

 function seatClick(event){
     if(num_pass==0) afficherSeatErreur1();
     var selected=event.target;
    if(selected.classList.contains("seat--selected")||selected.classList.contains("seat--busy")) afficherSeatErreur2();
    else{
        
        changerPlace( num_pass, selected);


    }
 }

 function changerPlace( num_pass, new_place){
    var old_place_id;
    var selectedplace_id=new_place.id;
    var  selected_places=document.querySelectorAll('.passenger_hidden');


    for(var i=0;i<selected_places.length;i++){
         if ((selected_places[i].name)=="passager_"+num_pass){
   
         old_place_id=selected_places[i].value; 
         selected_places[i].value=selectedplace_id;
                }
         
         }
    var old_place=document.querySelector('#'+old_place_id);
    
    old_place.classList.remove('seat--selected');
    
    new_place.classList.add('seat--selected');
    new_place.textContent=num_pass;
    old_place.textContent=old_place_id.substr(0,1);
    

    }

    var seats_erreur1=document.querySelector('.sieges_erreurs__erreur1');
    var seats_erreur_btn1=document.querySelectorAll('.sieges_erreurs__btn')[0];

    var seats_erreur2=document.querySelector('.sieges_erreurs__erreur2');
    var seats_erreur_btn2=document.querySelectorAll('.sieges_erreurs__btn')[1];
    var seats_passengers=document.querySelectorAll('.seats__passenger');
    var airplane__all=document.querySelector('.airplane__all');

     function afficherSeatErreur1(){
       seats_erreur1.classList.add('sieges_erreurs__erreur--show');
       airplane__all.classList.add('airplane__all--blur');
       seats_passengers.forEach(function(value,i) {
           value.classList.add('seats__passenger--shake');
       });
       
   }
       if(seats_erreur_btn1!=null){
           seats_erreur_btn1.addEventListener('click',function(){
           seats_erreur1.classList.remove('sieges_erreurs__erreur--show');
           airplane__all.classList.remove('airplane__all--blur');

            seats_passengers.forEach(function(value,i) {
           value.classList.remove('seats__passenger--shake');
       });
           });
       }
     

       function afficherSeatErreur2(){
       seats_erreur2.classList.add('sieges_erreurs__erreur--show');
       airplane__all.classList.add('airplane__all--blur');
 
       
   }
       if(seats_erreur_btn2!=null){
           seats_erreur_btn2.addEventListener('click',function(){
           seats_erreur2.classList.remove('sieges_erreurs__erreur--show');
           airplane__all.classList.remove('airplane__all--blur');


           });
       }