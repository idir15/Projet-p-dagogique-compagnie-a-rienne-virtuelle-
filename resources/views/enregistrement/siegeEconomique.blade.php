<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>sièges</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="/css/seats.css">
    <link rel="stylesheet" href="/css/reservation.css" type="text/css" charset="utf-8" />

</head>
{{-- {{dd($affectation)}}  --}}

<div class="entete__cadre">  
    <div class="entete">
        <p>Siéges</P>
            
    </div>
</div>
<div class="seats_container">
    <div class="passengers_container">
    <div class="seats__passengers">
        
     
	@for($i=0; $i< count($listeEnregistre); $i++)
      <div class="seats__passenger" >
          <img src="/images/man.png" class="passenger__logo" id="pass{{$i+1}}">
          <div class="passenger__num">Passager {{$i+1}}</div>
          <div class="passenger__name">{{$listeEnregistre[$i]->nom_client}} {{$listeEnregistre[$i]->prenom_client}}</div>
      </div>
      
     @endfor
 
    </div>
</div>
<div class="airplane_seats__class">Economique</div>
    <div class="airplane__all">
   <img src="/images/head2.svg" class="airplane__head">
    <div class="airplane_seats">
      
        
        
         <div class="airplane__services">
            <img src="/images/toilet.svg" class="airplane__toilet">
            <img src="/images/coffee.svg" class="airplane__coffe">
            <img src="/images/toilet.svg" class="airplane__toilet">
         </div>

         <div class="airplane__doors">
            <img src="/images/exit-left.svg" class="airplane__door">
            <img src="/images/exit-right.svg" class="airplane__door">

         </div>
   <?php $rows=0;$milieu=intdiv(count($ToutNumSiege),12)?>
   @foreach ($ToutNumSiege as $key)
   
         <?php  $colone=substr($key,0,1);$ligne=substr($key,-2)?>
       
         
         @if($colone == 'A')
         <?php $rows++?>
         @if($rows==$milieu)
         <div class="airplane__services">
            <img src="/images/toilet.svg" class="airplane__toilet">
            <img src="/images/coffee.svg" class="airplane__coffe">
            <img src="/images/toilet.svg" class="airplane__toilet">
         </div>
         <div class="airplane__doors">
            <img src="/images/exit-left.svg" class="airplane__door">
            <img src="/images/exit-right.svg" class="airplane__door">

         </div>
         <div class="airplane__services">
            <img src="/images/toilet.svg" class="airplane__toilet">
            <img src="/images/coffee.svg" class="airplane__coffe">
            <img src="/images/toilet.svg" class="airplane__toilet">
         </div>
         @endif
             <div class="airplane_seats__row"> 
             <div class="airplane_seats__row_number">{{$ligne}} </div>
		  @endif

          @if($colone == 'A' || $colone =='D')
             <div class="airplane_seats__section"> 
		  @endif 


		   @if(in_array($key, $siegeOccupe))
				<div class="airplane_seats__seat seat--busy" id="{{$key}}">{{$colone}}</div>
		   @else

				@if(in_array($key, $affectation))
                
				<div class="airplane_seats__seat seat--selected " id="{{$key}}">{{array_search($key, $affectation)}}</div>
				@else
				<div class="airplane_seats__seat " id="{{$key}}">{{$colone}}</div>
			    @endif

		   @endif
                 
              

		 @if($colone == 'C' || $colone =='F')
             </div>
			 @if($colone=='C')
			 	<div class="airplane_seats__space"></div>
             @else
                </div>
			 @endif	 

		 @endif  
            

             

 			 
         

         
    @endforeach

    <div class="airplane__doors">
        <img src="/images/exit-left.svg" class="airplane__door">
        <img src="/images/exit-right.svg" class="airplane__door">

     </div>
    <div class="airplane__services">
        <img src="/images/toilet.svg" class="airplane__toilet">
        <img src="/images/coffee.svg" class="airplane__coffe">
        <img src="/images/toilet.svg" class="airplane__toilet">
     </div>
 
         
    </div>

    

    <img src="/images/right_wing.svg" class="right_wing">
    <img src="/images/left_wing.svg" class="left_wing">
    <img src="/images/tail.svg" class="airplane__back">
 </div>

</div>
 
 <form action="/enregistrement/informations/bagage/siège" method="POST">
 @csrf
 @for ($i=1;$i<=count($affectation);$i++)
	 <input name="passager_{{$i}}" value="{{$affectation[$i]}}" class="passenger_hidden">
 @endfor
   

 
 <div class="seats_bottom__container">
    <div class="seats_bottom__content">
        <div class="seats__colors"> 
            <div class="seat_color__element">
                <div class="seat_color seat_color--red"></div>Place occupée
            </div>
            <div class="seat_color__element">
                <div class="seat_color seat_color--blue"></div>Place sélèctionnée
            </div>
            <div class="seat_color__element">
                <div class="seat_color seat_color--white"></div>Place disponible
            </div>
        </div>
        <input type="submit">
    </div>
</div>

</form>


<div class="sieges_erreurs_container">
    <div class="sieges_erreurs__erreur sieges_erreurs__erreur1">
        <div class="sieges_erreurs__text">
            Veuillez selectioner un passager
        </div>
        <div class="sieges_erreurs__btns">
            <input type="button" class="sieges_erreurs__btn" value="OK">
         </div>


    </div>

    <div class="sieges_erreurs__erreur sieges_erreurs__erreur2">
        <div class="sieges_erreurs__text">
            Place occupée
        </div>
        <div class="sieges_erreurs__btns">
            <input type="button" class="sieges_erreurs__btn" value="OK">
         </div>


    </div>


</div>

 <script src="/js/seats.js"> </script>