{{--
<h1>passager: {{$nom_client}} {{$prenom_client}}</h1>
<h1>{{$dateNaissance}}</h1>
<h1>numéro de billet:{{$num_billet}}</h1>
{{-- <h1>numéro de billet:{{$numSiege}}</h1> 
<h1> vol: {{$vol->num_vol}}</h1>
<h1> référence de reservation: {{$reservation->reference_reservation}}</h1>
<h1> le numéro de siège: {{$siege}}</h1> 
--}}

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
                        <h1>CARTE D'EMBARQUEMENT</h1>
                        <h2>BOARDING PASS</h2>
                        <h3>Document à conserver jusqu'à la fin de votre parcours </h3>
                        <h4>Please keep this document until the end of your trip</h4>
                        
                        
                    </div>
                    <div class="embarq__logo">
                        <img class="embarq__logo_img" src="{{ asset('images/logo.png')}}">
                        
                    </div>
                    
                    
                </div>
                
                <DIV class="embarq__mid">
                    
                    <div class="embarq__midleft">
                        <div>  <b>Nom //</b>Name <b>{{$nom_client}} {{$prenom_client}}</b> </div>
                        
                        <div> <b>Passeport //</b>Passport <b>{{$num_passeport_client}}</b> </div>
                        <div> <b>N° de billet //</b>E- ticket# <b>{{$num_billet}}</b> </div>
                        
                        
                    </div>

                    <div class="embarq__midright">
                        <img class="embarq__logo_img" src="{{ asset('images/barcode.gif')}}">
                        
                    </div>
                    
                    
                </DIV>
                
                <div class="embarq__bottom">
                    <div class="embarq__ligne"></div>
                    <div class="embarq__element">
                        <div class="embarq__bottitre">
                            <b>N° VOL</b><p>FLIGHT</p>
                        </div>
                        
                        <div class="embarq__details"> 
                            {{$vol->num_vol}}
                        </div>
                        
                    </div>
                    
                    <div class="embarq__element">
                        <div class="embarq__bottitre">
                            <b>Date</b><p>Date</p>
                        </div>
                        
                        <div class="embarq__details"> 
                            {{$vol->date_depart}}
                        </div>
                        
                    </div>
                    
                    <div class="embarq__element">
                        <div class="embarq__bottitre">
                            <b>De</b><p>FROM</p>
                        </div>
                        
                        <div class="embarq__details"> 
                          {{substr($vol->ville_depart,0,8)}}
                            
                        </div>
                        
                    </div>
                    
                    <div class="embarq__element">
                        <div class="embarq__bottitre">
                            <b>A</b><p>TO</p>
                        </div>
                        
                        <div class="embarq__details"> 
                            {{$vol->ville_arriver}}
                        </div>
                        
                    </div>
                    
                    <div class="embarq__element">
                        <div class="embarq__bottitre">
                            <b>DEPART A</b><p>DEPARTURE</p>
                        </div>
                        
                        <div class="embarq__details"> 
                            {{$vol->heure_depart}}
                        </div>
                        
                    </div>
                    
                    <div class="embarq__element">
                        <div class="embarq__bottitre">
                            <b>EMBARQ</b><p>BOARDING</p>
                        </div>
                        
                        <div class="embarq__details"> 
                    {{$vol->getCarbonDepart()->addHours(-3)->format('H:i')}}
                </div>
                
               </div>
               
               <div class="embarq__element">
                   <div class="embarq__bottitre">
                       <b>CLASSE</b><p>CLASS</p>
                    </div>
                    
                    <div class="embarq__details"> 
                        ECO
                    </div>
                    
                </div>
                
                <div class="embarq__element">
                    <div class="embarq__bottitre">
                        <b>SIEGE</b><p>SEAT</p>
                    </div>
                    
                    <div class="embarq__details"> 
                        {{$siege}}
                    </div>
                    
                </div>
                
                
                
            </div>
        </div>
        
        <div class="carte_emb__droite">
            <div class="embarq__logo2">
                <img class="embarq__logo2_img" src="{{asset('images/logo.png')}}">
                
            </div>
            <h1>CARTE D'EMBARQU</h1>
            <h2>BOARDING PASS</h2>
            
            <div>  <b>Nom //</b>Name <b>{{$nom_client}} {{$prenom_client}}</b> </div>
            
            <div> <b>Passeport //</b>Passport <b>{{$num_passeport_client}}</b> </div>
            <div> <b>N° de billet //</b>E- ticket# <b>{{$num_billet}}</b> </div>
            <br>
            <div> <b>N° Vol //</b>Flight <b>{{$vol->num_vol}}</b> </div>
            <div> <b>Class //</b>Class <b>ECO</b> </div>
            <div> <b>Siege //</b>Seat <b>{{$siege}}</b> </div>
            <img class="embarq__logo_img2" src="{{ asset('images/barcode.gif')}}">
            
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
    width:720px;
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
  .embarq__midleft{
   
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
  .embarq__ligne{ 
     
    width: 100%;
    border-bottom: 2px solid;
    position: absolute;
    top: 40px;
  }
  .embarq__bottitre>p{
   line-height: 0.1;
    
  }
.embarq__bottitre {
  padding:20px 0px 5px 0px;
  }


</style>