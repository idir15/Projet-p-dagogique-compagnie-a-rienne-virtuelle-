@extends('layout')

@section('title')
    preparer le voyager
@endsection
@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
@endsection
@section('content')
    

<div class="information__background">
        
</div>
<div class="information__container">
    <div class="information__top__photo background__preparer">

        <img src="images/avion2.png" class="information__photo_cam">
        <div class="separation">

            <img src="icons/wave.svg" alt="" >
        </div>
    </div>
    <div class="information__content">

                <div class="information__text">
                    <div class="information__titre">
                        Nos destinations
                    </div>
                    <div class="information__desc"> 
                   
                    </div>


                </div>
    


        <div class="information__list">
            
            <div class="information__element">
                
                <div class="element__titre" onclick="elementToggle('0')">
                    <div class="element__icon element__icon1"></div>
                    1. Je gère ma réservation
                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                     Vous avez acheté un billet pour un vol Fennec Airlines ? Pour consulter ou modifier votre réservation, rendez-vous dans l'espace Mes réservations. Là, vous pourrez changer votre vol, réserver un siège encore plus confortable, Composez le voyage qui vous convient !
                    </div>
                    <a href="" class="element__lien"><span class="link__arrow"></span>Gérer mes reservations</a>

                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('1')">
                    <div class="element__icon element__icon2"></div>
                    2. je prépare mes documents de voyage
                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Visas, passeport, vaccins, formalités d'entrée… Pour plus de sérénité, vérifiez avant votre départ les formalités d'entrée et de séjour requises pour votre voyage. Informez-vous auprès de l'ambassade ou du consulat de votre pays de destination ou de correspondance. Avant de partir, un réflexe : assurez-vous d’avoir les documents nécessaires et contrôlez leur date de validité !

                    </div>
                    
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('2')">
                    <div class="element__icon element__icon3"></div>
                    3. j'obtients ma carte d'embarquement

                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Votre vol décolle dans 30 heures ? Pour gagner du temps, vous pouvez déjà choisir votre siège et obtenir votre carte d'embarquement ! Elle vous est nécessaire pour monter dans l'avion. Pour vous enregistrer, vous avez le choix : - rendez-vous sur l'espace Enregistrement de notre site. Ensuite, pour obtenir votre carte d’embarquement, c’est comme vous voulez ! - Recevez-la par e-mail, - imprimez-la tout de suite, - ou retirez-la à l’aéroport.
                    </div>
                    <a href="" class="element__lien"><span class="link__arrow"></span>Commencer l'enregistrement</a>
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('3')">
                    <div class="element__icon element__icon4"></div>
                    4. je me rends à l'aéroport

                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Le moment est venu de vous rendre à l'aéroport ! Pour partir en toute tranquillité,
                        pensez à l'heure de fin d’enregistrement de votre vol.
                    </div>
                </div>

            </div>

    
        </div>

        <div class="information__list">
            <div class="list__titre">
                A l'aéroport
            </div>
            <div class="information__element">
                
                <div class="element__titre" onclick="elementToggle('4')">
                    <div class="element__icon element__icon5"></div>
                    1. Je m'assure d'avoir ma carte d'embarquement
                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        À l'aéroport, gardez votre carte d'embarquement à portée de main&nbsp;: vous devrez la présenter régulièrement et elle vous est nécessaire pour monter dans l’avion. <br><br> Vous préférez imprimer votre carte d’embarquement à l'aéroport&nbsp;? Nos bornes Fennec Airlines sont à votre service 24h/24&nbsp;!                        </div>
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('5')">
                    <div class="element__icon element__icon6"></div>
                    2. J'attache mon étiquette bagage
                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">

                        Vous avez imprimé votre étiquette bagage avant de partir ? 
                        Fennec Airlines met des pochettes à votre disposition. Glissez-y votre étiquette bagage et attachez la pochette à votre bagage. 
                        Pas encore d’étiquette bagage ? Vous pouvez l’imprimer à une borne Fennec AIrlines ! 
                        Une fois vos bagages étiquetés, rendez-vous à la dépose bagage.
                    </div>
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('6')">
                    <div class="element__icon element__icon7"></div>
                    3. Je dépose mon bagage 

                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        C'est le moment de vous rendre à la dépose bagage ! Consultez le mur d'affichage des vols pour connaitre votre zone de dépose bagage.

                        Une fois votre bagage déposé, Fennec Airlines s’assure de son acheminement jusqu'à votre destination finale.
                        
                        Vous souhaitez transporter des liquides en cabine, voyager avec plus de bagages ou emporter un équipement de sport ? Nous vous expliquons tout dans l'espace Bagages, mode d'emploi !                        </div>
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('7')">
                    <div class="element__icon element__icon8"></div>
                    4. Je passe les contrôles 

                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Les agents de sûreté vérifient votre bagage cabine pour la sécurité de chacun : gagnez du temps en présentant séparément vos produits liquides, votre ordinateur, votre veste et vos objets métalliques.
                        Le temps d'attente peut être long aux contrôles de sûreté. Pour voyager en toute quiétude, pensez à l’anticiper.
                    </div>
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('8')">
                    <div class="element__icon element__icon9"></div>
                    5. J'embarque

                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Vous allez bientôt être invité à monter à bord ! La porte d’embarquement se trouve après le contrôle de sûreté.

Gardez votre carte d’embarquement à portée de main et veillez à respecter l'heure de fin d’embarquement, entre 15 et 20 min avant le départ de l’avion.
                    </div>
                </div>

            </div>

    
        </div>

        <div class="information__list">
            <div class="list__titre">
                A l'arrivé
            </div>
            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('9')">
                    <div class="element__icon element__icon10"></div>
                    1. J'effectue ma correspondance              
               <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Si vous changez d'aéroport, pensez à récupérer vos bagages ! Transports en commun et taxis sont à votre disposition pour rejoindre votre aéroport de correspondance.
                    </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('10')">
                    <div class="element__icon element__icon11"></div>
                    2. Je récupère mes bagages                        <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">

                        Vous êtes arrivé à destination&nbsp;! Consultez l’affichage de l’aéroport pour connaitre le tapis de livraison bagages prévu pour votre vol. <br><br> Votre bagage ne vous a pas été remis ? Nous mettrons tout en œuvre pour vous aider. Vous pouvez faire une déclaration&nbsp;:
                        <ul>
                        <li>auprès de notre service bagages,</li>
                        <li>sur une borne Fennec Airlines avant de quitter l'aéroport,</li>
                        <li>en ligne, dans les 48&nbsp;h suivant votre arrivée.</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="information__element">
                <div class="element__titre" onclick="elementToggle('11')">
                    <div class="element__icon element__icon12"></div>
                    3. Je profite de mon séjour !
                    <div class="element__btn" ></div>
                </div>
                <div class="element__content element__content--hide ">
                    <div class="content__texte">
                        Profitez à fond de votre séjour et planifiez vos prochaines escapades avec votre guide de voyage, Travel by Fennec Airlines. Hébergement, trésors culturels, météo, balades gourmandes, évènements… Tout y est !

                    </div>
                </div>

            </div>
    
        </div>
    </div>       
</div>         


<script>
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


   
    
</script>

@endsection