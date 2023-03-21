
{{$num_rows=5}}

<div class="seats_container">
    <div class="seats__passengers">
      <div class="seats__passenger" >
          <img src="{{asset('images/man.png')}}" class="passenger__logo" id="pass1">
          <div class="passenger__num">Passager 1</div>
          <div class="passenger__name">Mr Aaaa aaa</div>
      </div>
      <div class="seats__passenger" >
         <img src="{{asset('images/man.png')}}" class="passenger__logo" id="pass2">
         <div class="passenger__num">Passager 2</div>
         <div class="passenger__name">Mr Bbbb aaa</div>
     </div>
      
 
    </div>
    
    <div class="airplane_seats">
         <div class="airplane_seats__class">Economique</div>

    @for ($i=1;$i<$num_rows;$i++)
        
        
    
         <div class="airplane_seats__row">
         <div class="airplane_seats__row_number">{{$i}}</div>
             <div class="airplane_seats__section"> 
                 <div class="airplane_seats__seat " id="A1">A</div>
                 <div class="airplane_seats__seat seat--selected" id="B1">1</div>
                 
                 <div class="airplane_seats__seat seat--selected " id="C1">2</div>
             </div>
             <div class="airplane_seats__space"></div>
             <div class="airplane_seats__section"> 
                 <div class="airplane_seats__seat " id="D1">D</div>
                 <div class="airplane_seats__seat seat--busy" id="E1">E</div>
                 <div class="airplane_seats__seat" id="F1">F</div>
             </div>
         </div>

         
    @endfor
    
         
    </div>
 </div>
 
 <form>
     <input name="passager_1" value="B1" class="passenger_hidden" hidden>
     <input name="passager_2" value="C1" class="passenger_hidden" hidden>
     <input type="submit">
 </form>
 
 <link rel="stylesheet" type="text/css" href={{asset('css/seats.css')}}>
 
 <script>
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
      if(num_pass==0) alert("Veuillez choisir un passager")
      var selected=event.target;
     if(selected.classList.contains("seat--selected")||selected.classList.contains("seat--busy")) alert("Place Occupe !");
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
     old_place.textContent=old_place_id.substr(0,1)
     
 
     }
 
 </script>