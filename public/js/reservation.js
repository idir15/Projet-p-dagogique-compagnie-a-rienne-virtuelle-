var foopicker=[];
function addCalendar(i){
     foopicker[i] = new FooPicker({
     id: 'date_de_naissance_'+i,
     dateFormat: 'yyyy-MM-dd', 
   });
   
}

foopicker_passeport = new FooPicker({
  id: 'date_de_naissance_passport',
  dateFormat: 'yyyy-MM-dd', 
});
   var msg_erreur_nom=document.querySelectorAll('.reservation__erreur_nom');
   var premier_nom=[];
   var erreur_nom =[];

   var msg_erreur_pnom=document.querySelectorAll('.reservation__erreur_pnom');
   var premier_pnom=[];
   var erreur_pnom =[];



   var msg_erreur_date=document.querySelectorAll('.reservation__erreur_date');
   var premier_date=[];
   var erreur_date =[];

   var msg_erreur_tel=document.querySelector('.reservation__erreur_tel');
   var premier_tel;
   var erreur_tel ;

   var msg_erreur_mail=document.querySelector('.reservation__erreur_mail');
   var premier_mail;
   var erreur_mail ;

   var msg_erreur_mail_con=document.querySelector('.reservation__erreur_mail_con');
   var premier_mail_con;
   var erreur_mail_con ;



   var reservation_nom=document.querySelectorAll('.information_reservation__nom');
   var reservation_pnom=document.querySelectorAll('.information_reservation__pnom');
   var reservation_date=document.querySelectorAll('.information_reservation__date');
  
  
   var reservation_mail=document.querySelector('.information_reservation__mail');
   var reservation_mail_con=document.querySelector('.information_reservation__mail_con');
   var reservation_phone=document.querySelector('.information_reservation__phone');

   var reservation_phone_script=document.querySelector('#reservation_phone');
   var nb_form=reservation_nom.length;
   //renit des msg

   var formulaire_res=document.querySelector('#form_reservation');   

   if(formulaire_res!=null){
   for(var i=0;i<nb_form;i++){
       if(reservation_nom[i].value=="") erreur_nom[i]="Ce champ est obligatoire.";
        else erreur_nom[i]="";
        if(reservation_pnom[i].value=="") erreur_pnom[i]="Ce champ est obligatoire.";
        else erreur_pnom[i]="";
 
   }


   if(reservation_phone.value=="") erreur_tel="Ce champ est obligatoire.";
     else erreur_tel="";
   if(reservation_mail.value=="") erreur_mail="Ce champ est obligatoire.";
   else
   erreur_mail="";
   if(reservation_mail_con.value=="") erreur_mail_con="Ce champ est obligatoire.";
   else
   erreur_mail_con="";

   
   
   // nom
   reservation_nom.forEach(function(value,i) {
       value.addEventListener("keydown",function(){


       });
       value.addEventListener("keyup",function(){
           if (value.value.length==0)
              erreur_nom[i]="Ce champ est obligatoire.";
           else if (value.value.length<3)
                   erreur_nom[i]="Veuillez entrer un nom valide.";        
                 else erreur_nom[i]="";  

       if(premier_nom[i]!=null) msg_erreur_nom[i].innerHTML=erreur_nom[i];
         
       });
       value.addEventListener("focusout",function(){

           if (value.value.length==0)
              erreur_nom[i]="Ce champ est obligatoire.";
           else if (value.value.length<3)
                   erreur_nom[i]="Veuillez entrer un nom valide.";        
                 else erreur_nom[i]="";  
           premier_nom[i]=false;
           msg_erreur_nom[i].innerHTML=erreur_nom[i];
           console.log(erreur_nom[i])
           
       });

   });

   //pnom
   reservation_pnom.forEach(function(value,i) {
       value.addEventListener("keydown",function(){


       });
       value.addEventListener("keyup",function(){
           if (value.value.length==0)
              erreur_pnom[i]="Ce champ est obligatoire.";
           else if (value.value.length<3)
                   erreur_pnom[i]="Veuillez entrer un nom valide.";        
                 else erreur_pnom[i]="";  

       if(premier_pnom[i]!=null) msg_erreur_pnom[i].innerHTML=erreur_pnom[i];
         
       });
       value.addEventListener("focusout",function(){
           if (value.value.length==0)
              erreur_pnom[i]="Ce champ est obligatoire.";
           else if (value.value.length<3)
                   erreur_pnom[i]="Veuillez entrer un nom valide.";        
                 else erreur_pnom[i]=""; 

           premier_pnom[i]=false;
           msg_erreur_pnom[i].innerHTML=erreur_pnom[i];
         
           
       });

   });

   //date
   reservation_date.forEach(function(value,i) {
       addCalendar(i+1);
       value.addEventListener("keydown",function(){

           event.returnValue= false;

       });
       value.addEventListener("keyup",function(){
          
         
       });

   });


   
   //tel
         
   reservation_phone_script.addEventListener("keydown",function(){
     onlyPhone();

    });
    reservation_phone_script.addEventListener("keyup",function(){
       
     if (reservation_phone_script.value.length==0)
     erreur_tel="Ce champ est obligatoire.";
  else if (!iti.isValidNumber())
          erreur_tel="Veuillez entrer un numero valide.";        
        else erreur_tel="";  

   if(premier_tel!=null) msg_erreur_tel.innerHTML=erreur_tel;
    });

    reservation_phone_script.addEventListener("focusout",function(){
      if (reservation_phone_script.value.length==0)
      erreur_tel="Ce champ est obligatoire.";
   else if (!iti.isValidNumber())
           erreur_tel="Veuillez entrer un numero valide.";        
         else erreur_tel="";  

     premier_tel=false;
     msg_erreur_tel.innerHTML=erreur_tel;
   
     
 });



//mail

 reservation_mail.addEventListener("keyup",function(){
    
  if (reservation_mail.value.length==0)
  erreur_mail="Ce champ est obligatoire.";
else if (!validateEmail(reservation_mail.value))
       erreur_mail="Veuillez entrer un mail valide.";        
     else erreur_mail="";  

if(premier_mail!=null) msg_erreur_mail.innerHTML=erreur_mail;
 });

 reservation_mail.addEventListener("focusout",function(){
  if (reservation_mail.value.length==0)
  erreur_mail="Ce champ est obligatoire.";
else if (!validateEmail(reservation_mail.value))
       erreur_mail="Veuillez entrer un mail valide.";        
     else erreur_mail="";  

  premier_mail=false;
  msg_erreur_mail.innerHTML=erreur_mail;

  
});


//mail conf


reservation_mail_con.addEventListener("keyup",function(){
    
  if (reservation_mail_con.value.length==0)
  erreur_mail_con="Ce champ est obligatoire.";
else if (!validateEmail(reservation_mail_con.value))
       erreur_mail_con="Veuillez entrer un mail valide.";        
     else erreur_mail_con="";  

if(premier_mail_con!=null) msg_erreur_mail_con.innerHTML=erreur_mail_con;
 });

 reservation_mail_con.addEventListener("focusout",function(){
  if (reservation_mail_con.value.length==0)
  erreur_mail="Ce champ est obligatoire.";
else if (!validateEmail(reservation_mail_con.value))
       erreur_mail_con="Veuillez entrer un mail valide.";        
     else erreur_mail_con="";  

  premier_mail_con=false;
  msg_erreur_mail_con.innerHTML=erreur_mail_con;

  
});



 //validation


    formulaire_res.addEventListener("submit",function(){
     var erreur=false;
 for(var i=0;i<nb_form;i++){
   if(erreur_nom[i]==null||erreur_nom[i]!=""){
     msg_erreur_nom[i].innerHTML=erreur_nom[i];
     erreur=true;
     
   } 
   if(erreur_pnom[i]==null||erreur_pnom[i]!=""){
     msg_erreur_pnom[i].innerHTML=erreur_pnom[i];
     erreur=true;

   } 
   if(reservation_date[i].value==""){
    msg_erreur_date[i].innerHTML='Ce champ est obligatoire';
    erreur=true;

  } else{
    msg_erreur_date[i].innerHTML='';
  }


  reservation_phone.value=iti.getNumber();
   if(erreur_tel==null||erreur_tel!=""){
    msg_erreur_tel.innerHTML=erreur_tel;
    erreur=true;

  } 

}
  if(reservation_mail.value!=reservation_mail_con.value){
  msg_erreur_mail_con.innerHTML="Les 2 adresses sont pas identiques";
  erreur=true;

 }
  if(erreur_mail==null||erreur_mail!=""){
    msg_erreur_mail.innerHTML=erreur_mail;
    erreur=true;

  }
  if(erreur_mail_con==null||erreur_mail_con!=""){
    msg_erreur_mail_con.innerHTML=erreur_mail_con;
    erreur=true;

  }


if (erreur) event.returnValue= false;
// 

});
}


//enregistrement00

var enreg__num=document.querySelector('.form_enreg__num');
var enreg__nom=document.querySelector('.form_enreg__nom');


var msg_erreur_enrnum=document.querySelector('.enregis__erreur_num');
var premier_enrnum;
var erreur_enrnum="Ce champ est obligatoire.";

var msg_erreur_enrnom=document.querySelector('.enregis__erreur_nom');
var premier_enrnom;
var erreur_enrnom="Ce champ est obligatoire.";


var form_enreg=document.querySelector('#form_enrege');

//num

if(form_enreg!=null){
enreg__num.addEventListener("keydown",function(){
onlyAZNum();

     

});
enreg__num.addEventListener("keyup",function(){
   
 if (enreg__num.value.length==0)
 erreur_enrnum="Ce champ est obligatoire.";
else if (enreg__num.value.length>8)
 erreur_enrnum="Veuillez entrer un numero valide.";        
    else erreur_enrnum="";  

if(premier_enrnum!=null)msg_erreur_enrnum.innerHTML=erreur_enrnum;
});

enreg__num.addEventListener("focusout",function(){
  if (enreg__num.value.length==0)
  erreur_enrnum="Ce champ est obligatoire.";
 else if (enreg__num.value.length>8)
  erreur_enrnum="Veuillez entrer un numero valide.";        
     else erreur_enrnum="";  

 premier_enrnum=false;
 msg_erreur_enrnum.innerHTML=erreur_enrnum;


 
});


//Nom
enreg__nom.addEventListener("keydown",function(){
  
       
  
  });
  enreg__nom.addEventListener("keyup",function(){
     
   if (enreg__nom.value.length==0)
   erreur_enrnomm="Ce champ est obligatoire.";
  else if (enreg__nom.value.length>30||enreg__nom.value.length<3)
   erreur_enrnom="Veuillez entrer un nom valide.";        
      else erreur_enrnom="";  
  
  if(premier_enrnom!=null)msg_erreur_enrnom.innerHTML=erreur_enrnom;
  });
  
  enreg__nom.addEventListener("focusout",function(){
    if (enreg__nom.value.length==0)
    erreur_enrnom="Ce champ est obligatoire.";
    else if (enreg__nom.value.length>30||enreg__nom.value.length<3)
        erreur_enrnom="Veuillez entrer un nom valide.";        
       else erreur_enrnom="";  
  
   premier_enrnom=false;
   msg_erreur_enrnom.innerHTML=erreur_enrnom;
  
  
   
  });
  
//validation

 form_enreg.addEventListener("submit",function(){
     var erreur=false;

   if(erreur_enrnom==null||erreur_enrnom!=""){
     msg_erreur_enrnom.innerHTML=erreur_enrnom;
     erreur=true;

   } 
   if(erreur_enrnum==null||erreur_enrnum!=""){
    msg_erreur_enrnum.innerHTML=erreur_enrnum;
    erreur=true;

  } 
 
if (erreur) event.returnValue= false;

});

}


//list vols



function onlyAZ(){
  if(!((event.key>="a" && event.key<="z") || (event.key>="A" && event.key<="Z")))
  event.returnValue= false;
}

function onlyAZNum(){
              if(!((event.key>="a" && event.key<="z") || (event.key>="A" && event.key<="Z")||(event.key>="0" && event.key<="9")))
          event.returnValue= false;
    
}
function onlyPhone(){
              if(!((event.key=="+") ||(event.key>="0" && event.key<="9")||(event.key=="Backspace")))
      
          event.returnValue= false;
          
}
function validateEmail(email) {
   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   return re.test(String(email).toLowerCase());
}