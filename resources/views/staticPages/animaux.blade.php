@extends('layout')

@section('title')
animaux
@endsection

@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
@endsection

@section('content')
    <div class="information__container">
        <div class="information__top__photo background__animaux">

            <img src="images/avion2.png" class="information__photo_cam">
            <div class="separation">
    
                <img src="/icons/wave5.svg" alt="">
            </div>
        </div>
        <div class="information__content">

                    <div class="information__text">
                        <div class="information__titre">
                            Voyagez Avec votre animal de compagnie 
                        </div>
                        <div class="information__desc"> </div>
                        Sur la plupart des vols Fennec Airlines,
                        vous pouvez emmener votre chat ou votre chien avec vous.
                        Nous vous proposons une gamme d’options de voyage
                        qui permettront à votre animal d’être transporté agréablement et
                        en toute sécurité avec Fennec Airlines.

                    </div>
        


            <div class="information__list">
                <div class="list__titre">
                    Condition transport d'annimaux
                </div>
                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('0')">
                        <div class="element__icon element__icon17"></div>
                        Animaux de compagnie transportés en cabine
                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Sous réserve de formalités en règle,
                            seuls les animaux domestiques de petite taille d’un poids
                            maximum de 6 Kg sont
                            acceptés en cabine: Chat, chien, hamster, petits oiseaux apprivoisés, tortues.
                            Le transport doit se faire dans un contenant ou caisse,
                            fermé, étanche et aéré permettant à l’animal de respirer.
                            Ce dernier doit respecter les dimensions
                            maximales du bagage cabine de 115 cm (55 +40 +20 cm) et
                            constitue le seul bagage cabine du passager. L’animal doit être maintenu
                            dans son contenant pendant toute la durée du vol et
                            placé aux pieds du passager ou son siège.
                        </div>
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('1')">
                        <div class="element__icon element__icon18"></div>
                        Animaux de compagnie transportés en soute                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Si dans certains cas, votre animal
                            ne peut pas voyager avec vous en cabine,
                            soit à cause d’un poids excédant les 6 Kg ou la
                            dimension de son contenant dépassant les 115 cm,
                            vote animal de compagnie devra être transporté en soute.
                            Son contenant doit être robuste,
                            avec un plancher étanche et doit être muni
                            d’un dispositif de fermeture solide, aéré pour permettre
                            à votre animal un voyage confortable sans désagréments.
                            Le contenant ou cage, doit portée les
                            informations suivantes : nom et prénom du passager,
                            son adresse, poids de l’animal.
                            Le voyage en soute offre toutes les garanties nécessaires,
                            les animaux sont alors placés dans les soutes chauffées et pressurisées.
                        </div>
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('2')">
                        <div class="element__icon element__icon19"></div>
                        
                        Formalités

                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Votre chien ou chat voyageant à destination des
                            Pays de l'Union européenne et autres doit être
                            muni d’une puce électronique d’identification,
                            d’un passeport spécifique autre que son carnet de
                            vaccination ordinaire, fourni et rempli
                            par un vétérinaire habilité.
                            Les exigences et conditions d’acceptation de votre animal
                            sont plus strictes pour certains Etats, tel
                            que : le Royaume Uni. Nous vous recommandons de vous renseigner
                            auprès de l’ambassade de votre pays de destination.
                            Pour être admis au transport, votre animal
                            doit avoir tous ses vaccins à jour.
                            Pensez à vous renseigner sur les conditions et réglementation
                            d’acceptation en vigueur dans votre pays de destination.
                            En cas de vols en correspondance avec une autre compagnie aérienne,
                            l’accord d’acceptation à bord de votre animal doit vous être
                            confirmé par votre compagnie Fennec Airlines.                     </div>
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