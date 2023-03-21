 @extends('layout')

 @section('titme')
     Information
 @endsection

 @section('content')
 
 <style>
     .inputErrorMessage{
         color: red;
     }
 
 </style>
 <div class="entete__cadre">  
    <div class="entete">
        <p>Dites nous qui voyage</P>
            
    </div>
</div>
<div style="display:none;" class="reservation__vol_details_cadre">
    <div class="reservation__vol_details">
        <div class="reservation__vol_details__gauche">
        <img class="reservation__airplanelogo" src="/icons/plane-circle.svg">
        <div class="reservation__vol_detail">
            <div class="vol_detail__line1">22 janvier 2020</div>
            <div class="vol_detail__line2">08:45 ALG</div>

        </div>
        <img class="reservation__airplanelogo" src="/icons/vol-next.svg">
        <div class="reservation__vol_detail">
            <div class="vol_detail__line1">22 janvier 2020</div>
            <div class="vol_detail__line2">08:45 ALG</div>

        </div>
    </div>
    <div class="reservation__vol_details__droite">
        <div class="vol_detail__line1">Prix pour tout les passagers</div>
        <div class="vol_detail__line2">90 000 DA</div>

    </div>
</div>
    
</div>

 <?php $nb_total=0?>
<form method="POST" action="/test" class="container_reservation" id="form_reservation"> 
  @csrf
                {{-- FORM ADULTE START --}}

  @for($i=1; $i <= session('nb_adultes') ; $i++)
  <?php $nb_total++ ?>
                                    {{-- Form Propre --}}
                                    <div class="information_reservation">
                                        <div class="information_reservation__titre">
                                            <p>Adulte {{$i}}</p>
                                        </div>
                                        <div class="information_reservation__ligne">
                                            <input type="text" name="adultes[adulte{{$i}}][nom]" value="{{old("adultes.adulte$i.nom")}}" required class="information_reservation__nom" />
                                            <label for="adultes[adulte{{$i}}][nom]" class="information_reservation__label"><span class="information_reservation__contenue">Nom</span></label>
                                            
                                       </div>
                                       <div class="reservation__erreur reservation__erreur_nom">
                                            @error("adultes.adulte$i.nom")
                                             {{$message}} 
                                            @enderror
                                        </div>
                                        <div class="information_reservation__ligne">
                                              <input type="text" name="adultes[adulte{{$i}}][prenom]" value="{{old("adultes.adulte$i.prenom")}}" required class="information_reservation__pnom"/>
                                              <label for="adultes[adulte{{$i}}][prenom]" class="information_reservation__label"><span class="information_reservation__contenue">Prénom</span></label>
                                              <br>
                                                </div>
                                                <div class="reservation__erreur reservation__erreur_pnom">
                                              @error("adultes.adulte$i.prenom")
                                                {{$message}} 
                                              @enderror
                                            </div>
                                          <div class="information_reservation__ligne">
                                          <input type="text" name="adultes[adulte{{$i}}][date_de_naissance]" value="{{old("adultes.adulte$i.date_de_naissance")}}" required class="information_reservation__date" id="date_de_naissance_{{$nb_total}}" autocomplete="off"/>
                                                  <label for="adultes[adulte{{$i}}][date_de_naissance]" class="information_reservation__label"><span class="information_reservation__contenue">Date de naissance</span></label>
                                                  <br>
                                     </div>
                                     <div class="reservation__erreur reservation__erreur_date">
                                                  @error("adultes.adulte$i.date_de_naissance")
                                                   {{$message}} 
                                                  @enderror
                                                </div>
                                        </div>

        @endfor
                {{-- FORM ADULTE END --}}

                {{-- FORM ENFANT START --}}

        @for($i=1; $i<=session('nb_enfants') ; $i++)
        <?php $nb_total++ ?>
            <div class="information_reservation">
                <div class="information_reservation__titre">
                    <p>Enfant {{$i}}</p>
                </div>
                <div class="information_reservation__ligne">
                    <input type="text" name="enfants[enfant{{$i}}][nom]" value="{{old("enfants.enfant$i.nom")}}" required class="information_reservation__nom"/>
                    <label for="enfants[enfant{{$i}}][nom]" class="information_reservation__label"><span class="information_reservation__contenue">Nom</span></label>
                    <br>
                    </div>
                    <div class="reservation__erreur reservation__erreur_nom">
                    @error("enfants.enfant$i.nom")
                      {{$message}}  
                    @enderror
                    </div>
                <div class="information_reservation__ligne">
                      <input type="text" name="enfants[enfant{{$i}}][prenom]" value="{{old("enfants.enfant$i.prenom")}}" required class="information_reservation__pnom"/>
                      <label for="enfants[enfant{{$i}}][prenom]" class="information_reservation__label"><span class="information_reservation__contenue">Prénom</span></label>
                      <br>
                        </div>
                    <div class="reservation__erreur reservation__erreur_pnom">
                      @error("enfants.enfant$i.prenom")
                       {{$message}}
                      @enderror
                        </div>
                  <div class="information_reservation__ligne">
                          <input type="text" name="enfants[enfant{{$i}}][date_de_naissance]" value="{{old("enfants.enfant$i.date_de_naissance")}}" required class="information_reservation__date" id="date_de_naissance_{{$nb_total}}" autocomplete="off"/>
                          <label for="enfants[enfant{{$i}}][date_de_naissance]" class="information_reservation__label"><span class="information_reservation__contenue">Date de naissance</span></label>
                          <br>
                      </div>
                      <div class="reservation__erreur reservation__erreur_date">
                          @error("enfants.enfant$i.date_de_naissance")
                            {{$message}} 
                          @enderror

                      </div>
                </div>
        @endfor
                {{-- FORM ENFANT END --}}


                {{-- FORM BB START --}}


        @for($i=1; $i<= session('nb_bebes') ; $i++)
        <?php $nb_total++ ?>
                        <div class="information_reservation">
                <div class="information_reservation__titre">
                    <p>Bébé {{$i}}</p>
                </div>
                <div class="information_reservation__ligne">
                    <input type="text" name="bebes[bebe{{$i}}][nom]" value="{{old("bebes.bebe$i.nom")}}" required class="information_reservation__nom" />
                    <label for="bebes[bebe{{$i}}][nom]" class="information_reservation__label"><span class="information_reservation__contenue">Nom</span></label>
                    <br>
                    </div>

                    <div class="reservation__erreur reservation__erreur_nom">
                    @error("bebes.bebe$i.nom")
                      {{$message}} 
                    @enderror

                    </div>
                <div class="information_reservation__ligne">
                      <input type="text" name="bebes[bebe{{$i}}][prenom]" value="{{old("bebes.bebe$i.prenom")}}" required class="information_reservation__pnom"/>
                      <label for="bebes[bebe{{$i}}][prenom]" class="information_reservation__label"><span class="information_reservation__contenue">Prénom</span></label>
                      <br>
                        </div>
                        <div class="reservation__erreur reservation__erreur_pnom">
                      @error("bebes.bebe$i.prenom")
                      {{$message}} 
                      @enderror
                        </div>
                  <div class="information_reservation__ligne">
                          <input type="text" name="bebes[bebe{{$i}}][date_de_naissance]" value="{{old("bebes.bebe$i.date_de_naissance")}}" required class="information_reservation__date" id="date_de_naissance_{{$nb_total}}" autocomplete="off"/>
                          <label for="bebes[bebe{{$i}}][date_de_naissance]" class="information_reservation__label"><span class="information_reservation__contenue">Date de naissance</span></label>
                          <br>
                      </div>
                      <div class="reservation__erreur reservation__erreur_date">
                          @error("bebes.bebe$i.date_de_naissance")
                            {{$message}} 
                          @enderror
                      </div>
                </div>
        @endfor
                {{-- FORM BB END --}}


    

    <div class="information_reservation">
        <div class="information_reservation__titre">
            <p>Informations De Contact</p>
        </div>
        <div class="information_reservation__ligne">
            <input name="email" value="{{old("email")}}" class="information_reservation__mail" required>
            <label for="email" class="information_reservation__label"><span class="information_reservation__contenue">e-mail</span></label>
            <br>
            </div>

            <div class="reservation__erreur reservation__erreur_mail">
            @error("email")
            {{$message}} 
            @enderror
        </div>

        <div class="information_reservation__ligne">
              <input name="email_confrimation" value="{{old("email_confrimation")}}" class="information_reservation__mail_con" required>
              <label for="email_confrimation" class="information_reservation__label"><span class="information_reservation__contenue">Confirmez votre email</span></label>
              <br>
                </div>
                <div class="reservation__erreur reservation__erreur_mail_con">
              @error("email_confrimation")
               {{$message}} 
              @enderror
                </div>
              <div class="reservation__lignephone">
              <span class="information_reservation__label--phone">N° de tel</span><input   id="reservation_phone">
              </div>
            <input name="phone" required class="information_reservation__phone" hidden>
              <div class="reservation__erreur reservation__erreur_tel">
                  @error("phone")
                  {{$message}}
                  @enderror
              </div>
        </div>

        <div class="information_reservation__confirmer">
            <a href="{{redirect()->back()->getTargetUrl()}}"><input type="button" value="Retour" class="information_reservation__btn_confirmer"></a>
            <input  type="submit" value="Validez vos informations" class="information_reservation__btn_confirmer" formnovalidate>

        </div>

      

</form>
<div class="reservation__footer">
    <img class="reservation_footer__img" src="/images/reserfoot.png">
    <div class="reservation_footer__content">

    </div>
</div>
<link rel="stylesheet" href="/css/intlTelInput.css">
<link rel="stylesheet" type="text/css" href="/css/foopicker.css">
    <script type="text/javascript" src="/js/foopicker.js"></script>
<script src="/js/reservation.js"></script>


<script src="/js/intlTelInput.js"></script>
<script src="/js/utils.js"></script>
<script>
  var input = document.querySelector("#reservation_phone");
  var iti =window.intlTelInput(input);
</script>

@endsection
