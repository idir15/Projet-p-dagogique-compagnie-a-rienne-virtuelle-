@extends('layout')

@section('title')
    classe première
@endsection
@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
@endsection
@section('content')
    <div class="information__background">
        
    </div>
    <div class="information__container">
        <div class="information__top__photo background__classe">

            <img src="images/avion2.png" class="information__photo_cam">
            <div class="separation">
    
                <img src="icons/wave.svg" alt="">
            </div>
        </div>
        <div class="information__content">

                    <div class="information__text">
                        <div class="information__titre">
                            Classes première et affaires :
                            

                        </div>
                        <div class="information__desc"> </div>
                        Nos classes « Première et Affaires » offrent le meilleur en matière de services,
                        d’espace et de confort pour vous garantir un voyage agréable.

                    </div>
        


            <div class="information__list">
                <div class="list__titre">
                    Informations complémentaires
                </div>
                <div class="information__element">
                    
                    <div class="element__titre" onclick="elementToggle('0')">
                        <div class="element__icon element__icon8"></div>
                        Avant de monter à bord

                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Fennec Airlines met à votre disposition un comptoir d’enregistrement Première
                            qui vous permettra un gain de temps considérable à votre
                            départ et une fois à destination.
                            Vous pouvez profiter de nos services complémentaires
                            dans notre salon Première, travailler et vous connecter à internet
                            , vous restaurer ou simplement vous détendre en feuilletant des
                            revues et journaux mis à votre disposition.                        </div>

                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('1')">
                        <div class="element__icon element__icon27"></div>
                        Bienvenue à bord
                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Pour vous aider à vous installer avant le décollage,
                            notre personnel navigant vous accueillera agréablement.
                            Des rafraichissements vous sont offerts à tout moment de votre voyage.
                        </div>
                        
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('2')">
                        <div class="element__icon element__icon28"></div>
                        Revue de bord « Inflight magazine »

                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Profitez de la durée de votre vol pour vous enquérir des divers évènements médiatiques,
                            des articles de presse nationale et internationale, des rubriques d’art, des biographies,
                            des informations pratiques telles que les adresses de certaines institutions,
                            la liste des hôtels et bien d’autres informations utiles.                        </div>
                    </div>

                </div>

                <div class="information__element">
                    <div class="element__titre" onclick="elementToggle('3')">
                        <div class="element__icon element__icon29"></div>
                        Repas gastronomiques

                        <div class="element__btn"></div>
                    </div>
                    <div class="element__content element__content--hide ">
                        <div class="content__texte">
                            Des repas chauds vous sont confectionnés par des cuisiniers professionnels.
                            Chaque repas constitue une expérience unique de mets délectables.
                            Des boissons sont disponibles à tout moment durant le vol.
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