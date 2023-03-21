<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <div class="embarq__container">
        <div class="embarq">
            <div class="embarq__top">
                <div class="embarq__titre">
                   <h1>Billet electronique </h1>
                   
                   <b>Date: </b> {{ now()->format('Y-m-d') }}
                   


                </div>
                <div class="embarq__logo">
                  <img class="embarq__logo_img" src="{{ asset('images/logo.png')}}">
                    
                </div>

                
            </div>

            <DIV class="embarq__mid">
           
            <div class="embarq__midleft">
              <b>Passagers :</b>
              @foreach ($clients as $client)
              <div>  <b> {{ $client->nom_client }} </b> {{ $client->prenom_client }} </div>
              @endforeach
              <br>
              <div>  <b>Numero de telephone </b> {{ $reservation->contact->num_telephone_client }} </div>
               

              <div>  <b>Adresse mail: </b> {{ $reservation->contact()->first()->email_client }} </div>
                <br>
                <div>  <b>Compagnie émettrice : </b> Fennec Airlines</div>
                <div>  <b> Réference Billet : </b> {{$reference_billet_electronique}} </div>
                <div>  <b>Réference Reservation :</b> {{ $reservation->reference_reservation}} </div>

            </div>

        


            </DIV>

            <br>
            <b>Vol Aller</b>
            <div class="embarq__bottom">

         
              <div class="embarq__ligne"></div>
                <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>N° VOL</b>
                     </div>
    
                     <div class="embarq__details"> 
                            {{ $vol_aller->num_vol }}
                     </div>
    
                   </div>
    
                   <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>Date</b>
                     </div>
    
                     <div class="embarq__details"> 
                      {{$vol_aller->date_depart}}
                     </div>
    
                   </div>
    
                   <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>De</b>
                     </div>
    
                     <div class="embarq__details"> 
                            {{$vol_aller->ville_depart}}
                     </div>
    
                   </div>
    
                   <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>A</b>
                     </div>
    
                     <div class="embarq__details"> 
                      {{$vol_aller->ville_arriver}}
                     </div>
    
                   </div>

               <div class="embarq__element">
                <div class="embarq__bottitre">
                   <b>Départ</b>
                 </div>

                 <div class="embarq__details"> 
                  {{$vol_aller->heure_depart}}
                 </div>

               </div>

               <div class="embarq__element">
                <div class="embarq__bottitre">
                   <b>Arrivé </b>
                 </div>

                 <div class="embarq__details"> 
                  {{$vol_aller->heure_arriver}}

                 </div>

               </div>

               <div class="embarq__element">
                <div class="embarq__bottitre">
                   <b>Terminal </b>
                 </div>

                 <div class="embarq__details"> 
                        {{$vol_aller->terminal1()->first()->nom_terminal}}
                 </div>

               </div>

   


  

               

            </div>

            @if(!is_null($vol_retour))
            <br>
            <b>Vol Retour</b>
            <div class="embarq__bottom">

              
              <div class="embarq__ligne"></div>
                <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>N° VOL</b>
                     </div>
    
                     <div class="embarq__details"> 
                      {{$vol_retour->num_vol}}
                     </div>
    
                   </div>
    
                   <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>Date</b>
                     </div>
    
                     <div class="embarq__details"> 
                      {{$vol_retour->date_depart}}
                     </div>
    
                   </div>
    
                   <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>De</b>
                     </div>
    
                     <div class="embarq__details"> 
                      {{$vol_retour->ville_depart}}
                     </div>
    
                   </div>
    
                   <div class="embarq__element">
                    <div class="embarq__bottitre">
                       <b>A</b>
                     </div>
    
                     <div class="embarq__details"> 
                      {{$vol_retour->ville_arriver}}
                     </div>
    
                   </div>

               <div class="embarq__element">
                <div class="embarq__bottitre">
                   <b>Départ</b>
                 </div>

                 <div class="embarq__details"> 
                  {{$vol_retour->heure_depart}}
                 </div>

               </div>

               <div class="embarq__element">
                <div class="embarq__bottitre">
                   <b>Arrivé </b>
                 </div>

                 <div class="embarq__details"> 
                  {{$vol_retour->heure_arriver}}
                 </div>

               </div>

               <div class="embarq__element">
                <div class="embarq__bottitre">
                   <b>Terminal </b>
                 </div>

                 <div class="embarq__details"> 
                  {{$vol_retour->terminal1()->first()->nom_terminal}}
                 </div>

               </div>

   


  

               

            </div>
@endif

            <br>
            <div>  <b>Montant payé :</b>  {{$amount / 100}} $</div>
        </div>




    </div>
</body>
<style>
  @page { margin: 0px; }

body { margin: 0px 30px; }
    body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
  .embarq__container{
    
  }

  .embarq{
    width:100%;
    position: absolute;
    top:40px;

  }
  .carte_emb__droite,.embarq{
    display: inline-block;
  }
.carte_emb__droite{
  font-size: 14px;
  width:180px;
  border-left: 3px   dashed   black;
  height: 330px;
  float:right;
  padding:5px 10px ;
}
  .embarq__top{
    margin-bottom: 20px;
  }
  .embarq__titre{
     
    

      
  }
  .embarq__titre>*{
 
  }
  .embarq__logo{
      float: right;
  }
.embarq__logo>img{
width:200px;
}
.embarq__logo_img2{
  width: 150px;
  position: absolute;
  margin-left: 22px;
  bottom: 40px;
}

.embarq__logo2>img{
width:150px;
margin-left: 20px;

}
  .embarq__logo,.embarq__titre{
    display: inline-block;
  }
  .embarq__titre>h1,.embarq__titre>h2{
      line-height: 0.5;
      
}
.carte_emb__droite>h1,.carte_emb__droite>h2{
  
  line-height: 0.5;
  text-align: center;
}
.carte_emb__droite>h1{
font-size: 14px;
}
.carte_emb__droite>h2{
  font-size: 13px;
}
.embarq__titre>h3,.embarq__titre>h4{
    line-height: 0.05;
 
}
.embarq__titre>h1{
  font-size: 22px;

}
.embarq__titre>h2{
  font-size: 20px;
  margin-bottom: 11px;

}

.embarq__titre>h4{
  font-size: 14px;

}
.embarq__titre>h3{
    
  font-size: 16px;


}


  .embarq__mid{

  }
  .embarq__midleft>div{
   margin-left: 22px;
  }
.embarq__midright{
    float: right;
}
.embarq__midleft,.embarq__midright{
  display: inline-block;
}
  .embarq__bottom{
    position: relative;
    margin-top: 15px;
    padding-top: 5px;
      width: 100%;
      border-top: 1px black dashed;

  }

  .embarq__element{
      
    display: inline-block;
   
    padding: 0px 14px;
    font-size: 13px;   
    
  }
  .embarq__details{


  }
  .embarq__ligne{ 
     
    width: 100%;
    border-bottom: 1px solid;
    position: absolute;
    top: 25px;
  }
  .embarq__bottitre>p{
   line-height: 1;
    
  }
  .embarq__bottitre>b{
   margin-bottom: 13px;
    
  }
.embarq__bottitre {
  padding:20px 0px 5px 0px;
  }


</style>