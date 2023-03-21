<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href=" /css/style-nav.css ">
    
    <link rel="stylesheet" href="/css/payement.css" type="text/css" charset="utf-8" />
    @yield('cssLink')
    <link rel="stylesheet" href="/css/style-bar-rech.css">
    <link rel="stylesheet" href="/css/calander.css">
    <link rel="stylesheet" href="/css/acceuil.css">
    <link rel="stylesheet" href="/css/style_offres.css">
    <link rel="stylesheet" href="/css/reservation.css" type="text/css" charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <script src="js/calander.js"></script>
    <script src="js/bar-rech.js"></script>
     <style>
       @font-face {
    font-family: 'MontserratAlternates-Medium';
    src: url("/fonts/MontserratAlternates-Medium.eot?#iefix") format('embedded-opentype'),  url("/fonts/MontserratAlternates-Medium.otf")  format('opentype'),
         url("/fonts/MontserratAlternates-Medium.woff") format('woff'), url("/fonts/MontserratAlternates-Medium.ttf")  format('truetype'), url("/fonts/MontserratAlternates-Medium.svg#MontserratAlternates-Medium") format('svg');
    font-weight: normal;
    font-style: normal;
  }
       *{
        font-family: 'MontserratAlternates-Medium', sans-serif;
        
       }
     </style>
</head>

<title>@yield('title')</title>


<body>
    <nav>
  
      <div class="navbar">
  
  
  
  
       
                  <a href="/"> <img src=" /images/logo_nav.png" class="navbar__logo"></a>
                   <div class="navbar__content">

                   <div class="navbar__langue">
                    <div class="lang_dropdown">
                      <a class="dropbtn a1">Algérie - FR</a>
                      <div class="dropdown-content">
                        <a class="select_lang ">Algérie - FR</a>
                      <a class="select_lang" >Algérie - EN</a>
                      <a class="select_lang" >Algérie - ES</a>
                      <a class="select_lang" >Algérie - IT</a>
                     </div>
                    </div>
  
  
                      
                     <a class="a1" href="/informations-sur-le-voyage">Aide ?</a>
     
                     
                  </div>
             
              <div class="navbar__bas">
               <div class="navbar__elements">
                       
                       <div class="navbar__element">
                               <a href="/"> Accueil</a> 
                       </div>
  
                       <div class="navbar__element">
                       <a href="/enregistrement">Enregistrement</a>  
                       </div>
  
                       <div class="navbar__element">
                               <a href="/informations-sur-le-voyage"> Informations</a> 
                           
                       </div>
                       <div class="navbar__element">
                           <a href="/notre-vision-et-nos-valeurs"> A propos</a> 
                       
                   </div>
               </div>
              
             
  
                
             <div class="navbar__info">
  
               <div class="navbar__form">
                       <div class="navbar-recherche">
                           <input type="text" placeholder="Rechercher" name="q" id="search"/>
                          
                        </div>
                        <a href=""><img src="/images/search.svg" ></a>
                </div> 
                
  
               <!-- <div class="navbar__user">     
                   <a href=""><img src="user.svg" class="navbar_user-icon"></a>
  
                </div>-->
               
  
                </div>
  
  
                
  
                
                </div>
              </div>   
              <div class="lang_dropdown lang_dropdown--mobile">
                <a class="dropbtn a1">Algérie - FR</a>
                <div class="dropdown-content">
                  <a class="select_lang_mob">Algérie - FR</a>
                    <a class="select_lang_mob" >Algérie - EN</a>
                    <a class="select_lang_mob" >Algérie - ES</a>
                    <a class="select_lang_mob" >Algérie - IT</a>
                </div>
              </div>
              
            
    <div class="navbar__btn" onclick="afficherMenuMobile()">
                
      </div>
      
       </div>
     <div class="navbar__menu_mobile">
  
      <div class="menu__element">
        <a href="/"> Accueil</a> 
</div>

<div class="menu__element">
<a href="/enregistrement">Enregistrement</a>  
</div>

<div class="menu__element">
        <a href="/informations-sur-le-voyage"> Informations</a> 
    
</div>
<div class="menu__element">
    <a href="/notre-vision-et-nos-valeurs"> A propos</a> 

</div>
     </div>
  
  
   </nav>
   
   
  <div>
      @yield('content')
  </div>
  <form style="display:none" method="" action="" id="form_choix_lang">
    <select name="lang" class="select_lang__form" style="display:none">
      <option value="fr">fr</option>
      <option value="en">en</option>
      <option value="es">es</option>
      <option value="it">it</option>
    </ul>  
  </select>
  </form>
  <footer>
  
     <div class="footer">
        <div class="footer__groupe">
           <div class="footer__element footer__element--titre">A propos de Fennec Airlines </div>
           <a href="/notre-flotte" class="footer__element">Notre flotte </a>
           <a href="/notre-vision-et-nos-valeurs" class="footer__element">La vision,les valeurs </a>
           
         </div>
  
         <div class="footer__groupe">
              <a href="/informations-sur-le-voyage" class="footer__element footer__element--titre">Informations</a>
              <a href="/preparer-le-voyage" class="footer__element">Préparer le voyage </a>
              <a href="/voyager-en-famille" class="footer__element">Voyager en famille </a>
              <a href="/bagages" class="footer__element">Bagages </a href="">
            </div>
  
            <div class="footer__groupe">
                  <div class="footer__element footer__element--titre">Contact </div>
                  <a href="https://web.facebook.com/FennecAirlines" class="footer__element"><img src=" /icons/facebook.svg">Facebook </a>
                  <a href="https://www.instagram.com/fennec.airlines2" class="footer__element"><img src=" /icons/insta.svg"> Instagram </a>
                 
                </div>
  
             
  
     </div>
     
     <div class="footer__copyright" style="display:flex;justify-content:center">©{{now()->format('Y')}} Fennec Airlines - tous droits réservés</div>   
  </footer>
  <link rel="stylesheet" href="/css/intlTelInput.css">
<link rel="stylesheet" type="text/css" href="/css/foopicker.css">
    <script type="text/javascript" src="/js/foopicker.js"></script>
<script src="/js/reservation.js"></script>


<script src="/js/intlTelInput.js"></script>
<script src="/js/utils.js"></script>
  <script>
  function afficherMenuMobile(){
      document.querySelector(".navbar__menu_mobile").classList.toggle("navbar__menu_mobile--show");
  }
  
  window.onclick = function(event) {
  var openDropdown = document.querySelector(".navbar__menu_mobile");
  if(!(event.target.matches('.navbar__btn')|| event.target.matches('.navbar') ||event.target.matches('.navbar__logo'))){
    openDropdown.classList.remove("navbar__menu_mobile--show");
  }
  }
  var list_lang=document.querySelectorAll('.select_lang');
  var list_lang_mob=document.querySelectorAll('.select_lang_mob');
  var select_lang__form=document.querySelector('.select_lang__form');
  var form_choix_lang=document.querySelector('#form_choix_lang');
  form_choix_lang;
  
  if(list_lang!=null){
    
    list_lang.forEach(function(value,i) {
       value.addEventListener("click",function(){
        select_lang__form.getElementsByTagName('option')[i].selected = 'selected';
        form_choix_lang.submit();

       });
  });
  }
  if(list_lang_mob!=null){
    
    list_lang_mob.forEach(function(value,i) {
       value.addEventListener("click",function(){
        select_lang__form.getElementsByTagName('option')[i].selected = 'selected';
        form_choix_lang.submit();

       });
  });
  }
  </script>
  </body>
  
  
  </html>
  
</html>