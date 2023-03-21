@extends('layout')

@section('title')
    informations
@endsection
@section('cssLink')
<link rel="stylesheet" href="/css/stat.css">
@endsection
@section('content')
    
    <div class="information__top__photo background__information">

        <img src="images/avion2.png" class="information__photo_cam">
        <div class="separation">

            <img src="icons/wave5.svg" alt="">
        </div>
    </div>
<div class="information__container">


    <div class="information__background">

   
        </div>
        
    <div class="information__content">
       

            <div class="information__text">
                <div class="information__titre">
                Informations
                </div>
                <div class="information__desc">
                    Que vous soyez prêt à réserver votre billet, à la recherche d’informations pratiques ou en quête d’inspiration,
                    nous avons pensé à tout ! Nous avons fait la liste de toutes les informations concernant nos vols Fennec Airlines,
                    les billets et votre voyage à venir. Besoin d’aide ? N’hésitez pas à nous contacter, nous sommes là pour vous 24 h/24 et 7 j/7.
                </div>


            </div>
            <div class="cartes__titre">
                Commencez à planifier votre prochain voyage
            </div>
            <div class="information__cartes">
                
                <a href="/preparer-le-voyage" class="information__carte">
                    <div class="carte__photo preparer"></div>
                    <div class="carte__content">
                        <div class="carte__titre">Préparer le voyage</div>
                        <div class="carte__texte">
                            
        Tout ce que vous devez savoir sur la préparation de votre prochain voyage : la franchise de bagages, comment réserver un siège et les documents de voyage requis.
    
                        </div>
                        <div class="carte__plus">En savoir plus</div>
                    </div>
                   

                </a>
                <a href="/voyager-en-famille" class="information__carte">
                    <div class="carte__photo famille"></div>
                    <div class="carte__content">
                        <div class="carte__titre">Voyager en famille</div>
                        <div class="carte__texte">
                            Nous aimons offrir bonheur et bonne humeur aux enfants et à leurs parents.
Découvrez comment faire de votre voyage en famille avec Fennec Airlines une agréable expérience !
                        </div>
                        <div class="carte__plus">En savoir plus</div>
                    </div>
                   

                </a>
        
               
                <a href="/bagages" class="information__carte">
                    <div class="carte__photo bagage"></div>
                    <div class="carte__content">
                        <div class="carte__titre">Bagages</div>
                        <div class="carte__texte">
                            Vérifiez combien de bagages vous pouvez emporter, ainsi que les frais et réductions applicables aux sacs supplémentaires et bagages spéciaux.

                            
    
                        </div>
                        <div class="carte__plus">En savoir plus</div>
                    </div>
                   

                </a>

                <a href="/animaux" class="information__carte">
                    <div class="carte__photo animaux"></div>
                    <div class="carte__content">
                        <div class="carte__titre">Animaux</div>
                        <div class="carte__texte">
                            Sur la plupart des vols Fennec Airlines,
                            vous pouvez emmener votre chat ou votre chien avec vous.
                            
    
                        </div>
                        <div class="carte__plus">En savoir plus</div>
                    </div>
                   

                </a>

                <a href="/classe-première" class="information__carte">
                    <div class="carte__photo classe"></div>
                    <div class="carte__content">
                        <div class="carte__titre">Classes premiéres et affaires</div>
                        <div class="carte__texte">
                            Nos classes « Première et Affaires » offrent le meilleur en matière de services,
                            d’espace et de confort pour vous garantir un voyage agréable.
                            
    
                        </div>
                        <div class="carte__plus">En savoir plus</div>
                    </div>
                   

                </a>


            </div>

    
    </div>

</div>

<footer>

    
    
       
 </footer>



<script src="js/navbar.js"></script>
@endsection