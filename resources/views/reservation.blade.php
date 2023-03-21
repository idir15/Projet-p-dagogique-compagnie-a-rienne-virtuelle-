@extends('layout')

@section('title')
    Reservation
@endsection

@section('content')
    
    <div class="entete__cadre">  
        <div class="entete">
            <p>Réservation</P>
                
        </div>
    </div>
    <form class="container_reservation">

        
      <div class="information_reservation">
          <div class="information_reservation__titre">
              <p>Informations personnelles (Adulte 1)</p>
          </div>
          <div class="information_reservation__ligne">
              <input type="text" name="nom_1" required/>
              <label for="nom_1" class="information_reservation__label"><span class="information_reservation__contenue">Nom</span></label>
          </div>
          <div class="information_reservation__ligne">
                <input type="text" name="prenom_1" required/>
                <label for="prenom_1" class="information_reservation__label"><span class="information_reservation__contenue">Prénom</span></label>
            </div>
            <div class="information_reservation__ligne">
                    <input type="text" name="date_de_naissance_1" required/>
                    <label for="date_de_naissance_1" class="information_reservation__label"><span class="information_reservation__contenue">Date de naissance</span></label>
            </div>
            <div class="information_reservation__ligne">
                    <input type="text" name="telephone_1" required/>
                    <label for="telephone_1" class="information_reservation__label"><span class="information_reservation__contenue">Numéro de telephone</span></label>
                </div>
            <div class="information_reservation__ligne">
                    <input type="text" name="email_1" required/>
                    <label for="email_1" class="information_reservation__label"><span class="information_reservation__contenue">Email</span></label>
            </div>


            <div class="information_reservation__radio_groupe">
                <label class="civ">Civilité</label> 
                   
                    <label class="information_reservation__radio">
                        <input type="radio" value="monsieur" name="civilite_1" checked>
                        Mr
                        <span></span>
                    </label>
                
                    <label class="information_reservation__radio">
                        <input type="radio" value="madame" name="civilite_1">
                        Mme
                        <span></span>
                    </label>

                    <label class="information_reservation__radio">
                        <input type="radio" value="mademoiselle" name="civilite_1">
                        Mlle
                        <span></span>
                    </label>
            </div>

                    
      </div>

      



      <div class="information_reservation">
        <div class="information_reservation__titre">
            <p>Informations personnelles (Adulte 2)</p>
        </div>
        <div class="information_reservation__ligne">
            <input type="text" name="nom_2" required/>
            <label for="nom_1" class="information_reservation__label"><span class="information_reservation__contenue">Nom</span></label>
        </div>
        <div class="information_reservation__ligne">
              <input type="text" name="prenom_2" required/>
              <label for="prenom_1" class="information_reservation__label"><span class="information_reservation__contenue">Prénom</span></label>
          </div>
          <div class="information_reservation__ligne">
                  <input type="text" name="date_de_naissance_2" required/>
                  <label for="date_de_naissance_1" class="information_reservation__label"><span class="information_reservation__contenue">Date de naissance</span></label>
          </div>
          <div class="information_reservation__ligne">
                  <input type="text" name="telephone_2" required/>
                  <label for="telephone_1" class="information_reservation__label"><span class="information_reservation__contenue">Numéro de telephone</span></label>
              </div>
          <div class="information_reservation__ligne">
                  <input type="text" name="email_2" required/>
                  <label for="email_1" class="information_reservation__label"><span class="information_reservation__contenue">Email</span></label>
          </div>


          <div class="information_reservation__radio_groupe">
              <label class="civ">Civilité</label> 
                 
                  <label class="information_reservation__radio">
                      <input type="radio" value="monsieur" name="civilite_2" checked>
                      Mr
                      <span></span>
                  </label>
              
                  <label class="information_reservation__radio">
                      <input type="radio" value="madame" name="civilite_2">
                      Mme
                      <span></span>
                  </label>

                  <label class="information_reservation__radio">
                      <input type="radio" value="mademoiselle" name="civilite_2">
                      Mlle
                      <span></span>
                  </label>
          </div>

                  
    </div>
                <div class="information_reservation__confirmer">
                    <input type="submit" class="information_reservation__btn_confirmer" value="Confirmer">
                </div>
            </form>

            @endsection
