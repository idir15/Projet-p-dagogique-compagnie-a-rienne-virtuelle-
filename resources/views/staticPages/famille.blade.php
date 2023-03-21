@extends('layout')

@section('title')
    voyager en famille
@endsection
@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
@endsection

@section('content')
    <div class="information__container">
        <div class="information__top__photo background__famille">

            <img src="images/avion2.png" class="information__photo_cam">
            <div class="separation">
    
                <img src="icons/wave5.svg" alt="">
            </div>
        </div>
        <div class="information__background">
        </div>
        <div class="information__content">

                    <div class="information__text">
                        <div class="information__titre">
                            Voyager en famille
                        </div>
                        <div class="information__desc"> </div>
                        Nous aimons offrir bonheur et bonne humeur aux enfants et à leurs parents.
Découvrez comment faire de votre voyage en famille avec Fennec Airlines une agréable expérience !


                    </div>
        


            <div class="information__list">
                <div class="list__titre">
                    Conditions et formalités
                </div>
                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('0')">
                        <div class="element__icon element__icon13"></div>
                        Passagers agés de moins de 18 ans
                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Il est impératif de présenter une autorisation paternelle .

                        </div>
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('1')">
                        <div class="element__icon element__icon14"></div>
                        Enfants ou mineurs non accoppagnés
                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Sont considérés comme "Enfants non accompagné" ,
                            les enfants âgés de plus de 5 ans et moins de 12 ans à leur date du Transport,
                            ne souffrant d’aucun handicap physique ou mental,
                            et qui ne sont pas accompagnés durant leur voyage,
                            par une personne exerçant une puissance parentale (père, mère, ou tuteur légal).
                            Les enfants non accompagnés peuvent être acceptés au transport jusqu'à 15 ans à la demande des parents.
                            L’enfant mineur doit être muni des documents suivants :
                            
                            Un billet de passage Aller/Retour,
                            Un passeport biométrique individuel en cours de validité pour l’international ou
                            une carte d’identité nationale pour le réseau domestique,
                            Un visa conforme si nécessaire,
                            Une autorisation parentale,
                            Un certificat de vaccination si requis,
                            Un double de la déclaration de décharge de responsabilité dûment remplie et signée,
                            Une fiche UM (Unaccompagnied Minor) indiquant les noms,
                            adresses et numéros de téléphones des personnes qui présentent
                            l’enfant au départ et celles prévues le récupérer à l’arrivée,
                            La pochette et la fiche UM sont fournies par la compagnie.
                            Dès le départ du tuteur légal, l’enfant est pris en charge
                            par le personnel de la compagnie depuis l'enregistrement à l'aéroport de départ,
                            tout au long de son voyage, à travers les différents points de contrôles (formalités de police,
                            de douanes, de santé, récupération des bagages),
                            jusqu'à l’arrivée de la personne chargée de le récupérer à l'aéroport destination.
                            Si la personne chargée de récupérer l’enfant ne se présente pas à l’aéroport de destination et qu’elle
                            reste injoignable, la compagnie prendra en charge le rapatriement de l’enfant sur le prochain vol retour.
                            Il est recommandé aux parents de rester à l’aéroport au moins 30 minutes après le décollage de l’avion.
                        </div>
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('2')">
                        <div class="element__icon element__icon15"></div>
                        
                        Femmes enceintes

                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Les femmes enceintes sont acceptées à bord de nos vols jusqu’au septième mois
                            de grossesse sans aucune formalité. Cependant, la passagère de 7 à 9 mois
                            de grossesse devra être munie d’un certificat médical l’autorisant à voyager et
                            spécifiant le stade de grossesse, son état de santé et attestant l’absence de tout
                            risque d’accouchement prématuré dû à l’altitude.                        </div>
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('3')">
                        <div class="element__icon element__icon16"></div>
                        Les passagers accompagnés de bébé

                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Les enfants sont les bienvenus à bord de nos vols.
                            Est considéré comme "bébé", tout passager n'ayant pas atteint son deuxième
                            anniversaire. Il doit être accompagné de ses parents ou par un passager autonome âgé d'au moins 18ans,
                            sauf s'il s'agit du père, de la mère ou du tuteur légal.
                            Dans le cas où le passager voyage accompagné de deux (02) bébés,
                            la présence d’un deuxième accompagnateur répondant aux mêmes conditions que le premier,
                            est obligatoire sauf si le bébé est âgé de moins de douze (12) mois,
                            dans ce cas précis le bébé sera installé sur un siège bébé fourni par le parent et
                            placé sur le siège avion, il sera alors considéré comme "enfant".
                            Le voyage est autorisé, mais non recommandé,
                            pour les nouveau-nés âgés de moins de 7 jours.
                            Les bébés doivent impérativement être munis d’un billet de passage avec leurs noms,
                            prénoms et dates de naissance.
                            La franchise bagage autorisée pour les bébés est de 10 kg.
                            Des berceaux sont proposés à bord pour faciliter le transport des bébés.
                            Cependant, le nombre de ces berceaux est limité selon le type d'appareil utilisé pour le vol.
                            Par conséquent, il est recommandé au parent de signaler
                            la présence de son bébé lors du voyage au moment de la réservation.
                        </div>
                    </div>

                </div>

        
            </div>
        </div>       
    </div>    
         


<script src="js/stat.js"></script>
@endsection